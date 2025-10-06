<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIntervention;

class Image extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'name',
        'original_name',
        'extension',
        'size',
        'mime_type',
        'alt_text',
        'title',
        'description',
        'is_featured',
        'order',
        'imageable_type',
        'imageable_id',
        'metadata',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
        'size' => 'integer',
        'metadata' => 'array',
    ];

    /**
     * Les tailles d'images prédéfinies.
     *
     * @var array
     */
    public const SIZES = [
        'thumbnail' => [150, 150, true],  // [width, height, crop]
        'small' => [300, 200, false],
        'medium' => [800, 600, false],
        'large' => [1200, 800, false],
        'xlarge' => [1920, 1080, false],
    ];

    /**
     * Relation avec le modèle parent.
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Récupère l'URL de l'image redimensionnée.
     *
     * @param string $size
     * @return string
     */
    public function getUrl(string $size = 'original'): string
    {
        if ($size === 'original') {
            return Storage::disk('public')->url($this->path);
        }

        if (!array_key_exists($size, self::SIZES)) {
            throw new \InvalidArgumentException("Taille d'image non valide: {$size}");
        }

        $pathInfo = pathinfo($this->path);
        $resizedPath = "{$pathInfo['dirname']}/{$pathInfo['filename']}_{$size}.{$pathInfo['extension']}";

        // Si l'image redimensionnée n'existe pas, on la crée
        if (!Storage::disk('public')->exists($resizedPath)) {
            $this->resizeImage($size);
        }

        return Storage::disk('public')->url($resizedPath);
    }

    /**
     * Redimensionne l'image à la taille spécifiée.
     *
     * @param string $size
     * @return void
     */
    protected function resizeImage(string $size): void
    {
        if (!array_key_exists($size, self::SIZES)) {
            return;
        }

        [$width, $height, $crop] = self::SIZES[$size];
        $pathInfo = pathinfo($this->path);
        $resizedPath = "{$pathInfo['dirname']}/{$pathInfo['filename']}_{$size}.{$pathInfo['extension']}";

        $image = ImageIntervention::make(Storage::disk('public')->get($this->path));

        if ($crop) {
            $image->fit($width, $height);
        } else {
            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        Storage::disk('public')->put($resizedPath, $image->encode($pathInfo['extension'] ?? 'jpg', 90));
    }

    /**
     * Supprime le fichier physique de l'image.
     *
     * @return bool
     */
    public function deleteFile(): bool
    {
        // Supprimer l'image originale
        if (Storage::disk('public')->exists($this->path)) {
            Storage::disk('public')->delete($this->path);
        }

        // Supprimer les images redimensionnées
        $pathInfo = pathinfo($this->path);
        foreach (array_keys(self::SIZES) as $size) {
            $resizedPath = "{$pathInfo['dirname']}/{$pathInfo['filename']}_{$size}.{$pathInfo['extension']}";
            if (Storage::disk('public')->exists($resizedPath)) {
                Storage::disk('public')->delete($resizedPath);
            }
        }

        return true;
    }

    /**
     * Récupère la taille formatée du fichier.
     *
     * @param int $precision
     * @return string
     */
    public function getFormattedSizeAttribute(int $precision = 1): string
    {
        $size = $this->size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $unitIndex = 0;

        while ($size >= 1024 && $unitIndex < count($units) - 1) {
            $size /= 1024;
            $unitIndex++;
        }

        return round($size, $precision) . ' ' . $units[$unitIndex];
    }

    /**
     * Récupère les dimensions de l'image.
     *
     * @return array|null
     */
    public function getDimensionsAttribute(): ?array
    {
        try {
            $image = ImageIntervention::make(Storage::disk('public')->get($this->path));
            return [
                'width' => $image->width(),
                'height' => $image->height(),
            ];
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Marque cette image comme image mise en avant.
     *
     * @return bool
     */
    public function setAsFeatured(): bool
    {
        // Désélectionner les autres images mises en avant pour ce modèle
        $this->imageable->images()
            ->where('id', '!=', $this->id)
            ->where('is_featured', true)
            ->update(['is_featured' => false]);

        return $this->update(['is_featured' => true]);
    }

    /**
     * Supprime le fichier physique lors de la suppression du modèle.
     */
    protected static function booted()
    {
        static::deleting(function ($image) {
            $image->deleteFile();
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Facility extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'category',
        'is_featured',
        'is_active',
        'order',
        'metadata',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order' => 'integer',
        'metadata' => 'array',
    ];

    /**
     * Les catégories d'équipements possibles.
     *
     * @var array
     */
    public const CATEGORIES = [
        'general' => 'Général',
        'room' => 'Chambre',
        'bathroom' => 'Salle de bain',
        'media' => 'Médias et technologie',
        'food' => 'Nourriture et boissons',
        'services' => 'Services',
        'business' => 'Affaires',
        'accessibility' => 'Accessibilité',
        'parking' => 'Parking',
        'wellness' => 'Bien-être',
        'outdoor' => 'Extérieur',
        'activities' => 'Activités',
        'transport' => 'Transport',
        'safety' => 'Sécurité',
    ];

    /**
     * Relation avec les hôtels qui ont cet équipement.
     */
    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotel_facility')
            ->withTimestamps();
    }

    /**
     * Relation avec les chambres qui ont cet équipement.
     */
    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'room_facility')
            ->withTimestamps();
    }

    /**
     * Relation avec les images de l'équipement.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Récupère la catégorie formatée de l'équipement.
     *
     * @return string
     */
    public function getFormattedCategoryAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    /**
     * Récupère l'URL de l'icône de l'équipement.
     *
     * @return string
     */
    public function getIconUrlAttribute(): string
    {
        if (empty($this->icon)) {
            return asset('images/default-facility.png');
        }

        if (filter_var($this->icon, FILTER_VALIDATE_URL)) {
            return $this->icon;
        }

        return Storage::disk('public')->url($this->icon);
    }

    /**
     * Scope pour les équipements actifs.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour les équipements en vedette.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope pour les équipements par catégorie.
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Trie les équipements par ordre croissant.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }

    /**
     * Supprime les relations avant de supprimer l'équipement.
     */
    protected static function booted()
    {
        static::deleting(function ($facility) {
            // Supprimer les relations avec les hôtels
            $facility->hotels()->detach();
            
            // Supprimer les relations avec les chambres
            $facility->rooms()->detach();
            
            // Supprimer les images associées
            $facility->images()->delete();
        });
    }
}

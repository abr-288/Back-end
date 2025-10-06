<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Hotel extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'latitude',
        'longitude',
        'phone',
        'email',
        'website',
        'star_rating',
        'check_in_time',
        'check_out_time',
        'policies',
        'is_active',
        'is_featured',
        'user_id', // Propriétaire/gérant de l'hôtel
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'star_rating' => 'integer',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    /**
     * Les attributs qui doivent être cachés pour la sérialisation.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Relation avec les chambres de l'hôtel.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Relation avec les équipements de l'hôtel.
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class, 'hotel_facility');
    }

    /**
     * Relation avec les images de l'hôtel.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Relation avec les avis sur l'hôtel.
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Relation avec les réservations de l'hôtel.
     */
    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'bookable');
    }

    /**
     * Relation avec l'utilisateur propriétaire/gérant de l'hôtel.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Vérifie si l'hôtel a des chambres disponibles pour les dates données.
     *
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @param int $guests
     * @return bool
     */
    public function hasAvailableRooms($checkIn, $checkOut, $guests = 1)
    {
        return $this->rooms()
            ->whereDoesntHave('reservations', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->whereBetween('start_date', [$checkIn, $checkOut])
                      ->orWhereBetween('end_date', [$checkIn, $checkOut])
                      ->orWhere(function ($q) use ($checkIn, $checkOut) {
                          $q->where('start_date', '<=', $checkIn)
                            ->where('end_date', '>=', $checkOut);
                      });
                });
            })
            ->where('max_guests', '>=', $guests)
            ->where('is_available', true)
            ->exists();
    }

    /**
     * Calcule la note moyenne de l'hôtel.
     *
     * @param int $precision
     * @return float
     */
    public function averageRating($precision = 1)
    {
        return round($this->reviews()->avg('rating') ?? 0, $precision);
    }

    /**
     * Récupère les chambres disponibles pour les dates données.
     *
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @param int $guests
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAvailableRooms($checkIn, $checkOut, $guests = 1)
    {
        return $this->rooms()
            ->whereDoesntHave('reservations', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->whereBetween('start_date', [$checkIn, $checkOut])
                      ->orWhereBetween('end_date', [$checkIn, $checkOut])
                      ->orWhere(function ($q) use ($checkIn, $checkOut) {
                          $q->where('start_date', '<=', $checkIn)
                            ->where('end_date', '>=', $checkOut);
                      });
                });
            })
            ->where('max_guests', '>=', $guests)
            ->where('is_available', true)
            ->with('roomType')
            ->get();
    }

    /**
     * Récupère l'URL de l'image principale de l'hôtel.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'medium')
    {
        $image = $this->images()->where('is_featured', true)->first() 
               ?? $this->images()->first();

        if (!$image) {
            return asset('images/default-hotel.jpg');
        }

        return $image->getUrl($size);
    }

    /**
     * Récupère l'adresse complète de l'hôtel.
     *
     * @return string
     */
    public function getFullAddressAttribute()
    {
        $parts = array_filter([
            $this->address,
            $this->city,
            $this->state,
            $this->country,
            $this->postal_code,
        ]);

        return implode(', ', $parts);
    }

    /**
     * Scope pour les hôtels actifs.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour les hôtels en vedette.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope pour rechercher des hôtels par ville ou pays.
     */
    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('city', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%");
    }

    /**
     * Supprime les ressources associées à l'hôtel.
     */
    protected static function booted()
    {
        static::deleting(function ($hotel) {
            // Supprimer les images du stockage
            foreach ($hotel->images as $image) {
                // Supprimer le fichier physique si nécessaire
                if (Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
                $image->delete();
            }
        });
    }
}

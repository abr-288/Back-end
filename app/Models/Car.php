<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'model',
        'year',
        'registration_number',
        'color',
        'seats',
        'doors',
        'transmission',
        'fuel_type',
        'fuel_consumption',
        'mileage',
        'price_per_day',
        'price_per_km',
        'deposit_amount',
        'insurance_coverage',
        'description',
        'features',
        'pickup_location',
        'return_location',
        'is_available',
        'user_id', // Propriétaire/agence de location
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'year' => 'integer',
        'seats' => 'integer',
        'doors' => 'integer',
        'mileage' => 'integer',
        'price_per_day' => 'float',
        'price_per_km' => 'float',
        'deposit_amount' => 'float',
        'fuel_consumption' => 'float',
        'is_available' => 'boolean',
        'features' => 'array',
    ];

    /**
     * Les types de transmission possibles.
     *
     * @var array
     */
    public const TRANSMISSIONS = [
        'manual' => 'Manuelle',
        'automatic' => 'Automatique',
        'semi_automatic' => 'Semi-automatique',
    ];

    /**
     * Les types de carburant possibles.
     *
     * @var array
     */
    public const FUEL_TYPES = [
        'gasoline' => 'Essence',
        'diesel' => 'Diesel',
        'electric' => 'Électrique',
        'hybrid' => 'Hybride',
        'lpg' => 'GPL',
    ];

    /**
     * Relation avec les images de la voiture.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Relation avec les réservations de cette voiture.
     */
    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'bookable');
    }

    /**
     * Relation avec les avis sur la voiture.
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Relation avec le propriétaire/agence de location.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Vérifie si la voiture est disponible pour la période donnée.
     *
     * @param \Carbon\Carbon $startDate
     * @param \Carbon\Carbon $endDate
     * @return bool
     */
    public function isAvailableForDates($startDate, $endDate): bool
    {
        if (!$this->is_available) {
            return false;
        }

        return !$this->reservations()
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate])
                    ->orWhere(function ($q) use ($startDate, $endDate) {
                        $q->where('start_date', '<=', $startDate)
                            ->where('end_date', '>=', $endDate);
                    });
            })
            ->whereNotIn('status', ['cancelled', 'rejected'])
            ->exists();
    }

    /**
     * Calcule le prix total pour la période de location.
     *
     * @param \Carbon\Carbon $startDate
     * @param \Carbon\Carbon $endDate
     * @param float $distance Distance estimée en km
     * @return array
     */
    public function calculateRentalPrice($startDate, $endDate, $distance = 0): array
    {
        $days = $startDate->diffInDays($endDate) + 1; // Au moins 1 jour
        $basePrice = $days * $this->price_per_day;
        $distancePrice = $distance * $this->price_per_km;
        $total = $basePrice + $distancePrice;

        return [
            'days' => $days,
            'distance_km' => $distance,
            'base_price' => $basePrice,
            'distance_price' => $distancePrice,
            'deposit' => $this->deposit_amount,
            'total' => $total,
            'currency' => 'EUR', // Devise par défaut
        ];
    }

    /**
     * Récupère l'URL de l'image principale de la voiture.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'medium'): string
    {
        $image = $this->images()->where('is_featured', true)->first()
            ?? $this->images()->first();

        if (!$image) {
            return asset('images/default-car.jpg');
        }

        return $image->getUrl($size);
    }

    /**
     * Récupère la transmission formatée.
     *
     * @return string
     */
    public function getFormattedTransmissionAttribute(): string
    {
        return self::TRANSMISSIONS[$this->transmission] ?? $this->transmission;
    }

    /**
     * Récupère le type de carburant formaté.
     *
     * @return string
     */
    public function getFormattedFuelTypeAttribute(): string
    {
        return self::FUEL_TYPES[$this->fuel_type] ?? $this->fuel_type;
    }

    /**
     * Récupère le prix par jour formaté.
     *
     * @return string
     */
    public function getFormattedPricePerDayAttribute(): string
    {
        return number_format($this->price_per_day, 2, ',', ' ') . ' €/jour';
    }

    /**
     * Récupère le prix au km formaté.
     *
     * @return string
     */
    public function getFormattedPricePerKmAttribute(): string
    {
        return number_format($this->price_per_km, 2, ',', ' ') . ' €/km';
    }

    /**
     * Scope pour les voitures disponibles.
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope pour les voitures par marque.
     */
    public function scopeByBrand($query, $brand)
    {
        return $query->where('brand', $brand);
    }

    /**
     * Scope pour les voitures par type de transmission.
     */
    public function scopeByTransmission($query, $transmission)
    {
        return $query->where('transmission', $transmission);
    }

    /**
     * Scope pour les voitures par type de carburant.
     */
    public function scopeByFuelType($query, $fuelType)
    {
        return $query->where('fuel_type', $fuelType);
    }

    /**
     * Supprime les ressources associées à la voiture.
     */
    protected static function booted()
    {
        static::deleting(function ($car) {
            // Supprimer les images du stockage
            foreach ($car->images as $image) {
                if (Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
                $image->delete();
            }
        });
    }
}

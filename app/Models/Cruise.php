<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Cruise extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ship_id',
        'description',
        'short_description',
        'duration_nights',
        'start_date',
        'end_date',
        'departure_port_id',
        'arrival_port_id',
        'starting_price',
        'currency',
        'is_active',
        'is_featured',
        'cabin_types',
        'included',
        'not_included',
        'itinerary',
        'activities',
        'dining_options',
        'entertainment',
        'policies',
        'user_id', // Compagnie maritime/agence
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'starting_price' => 'float',
        'duration_nights' => 'integer',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'cabin_types' => 'array',
        'included' => 'array',
        'not_included' => 'array',
        'itinerary' => 'array',
        'activities' => 'array',
        'dining_options' => 'array',
        'entertainment' => 'array',
    ];

    /**
     * Relation avec le navire de la croisière.
     */
    public function ship(): BelongsTo
    {
        return $this->belongsTo(Ship::class);
    }

    /**
     * Relation avec le port de départ.
     */
    public function departurePort(): BelongsTo
    {
        return $this->belongsTo(Port::class, 'departure_port_id');
    }

    /**
     * Relation avec le port d'arrivée.
     */
    public function arrivalPort(): BelongsTo
    {
        return $this->belongsTo(Port::class, 'arrival_port_id');
    }

    /**
     * Relation avec les cabines de la croisière.
     */
    public function cabins(): HasMany
    {
        return $this->hasMany(Cabin::class);
    }

    /**
     * Relation avec les réservations pour cette croisière.
     */
    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'bookable');
    }

    /**
     * Relation avec les images de la croisière.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Relation avec les avis sur la croisière.
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Relation avec la compagnie maritime/agence organisatrice.
     */
    public function company()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Vérifie si la croisière a des cabines disponibles pour les dates données.
     *
     * @param string $cabinType
     * @param int $passengers
     * @return bool
     */
    public function hasAvailableCabins(string $cabinType = null, int $passengers = 2): bool
    {
        $query = $this->cabins()
            ->where('max_occupancy', '>=', $passengers)
            ->where('is_available', true);

        if ($cabinType) {
            $query->where('cabin_type', $cabinType);
        }

        return $query->exists();
    }

    /**
     * Récupère les cabines disponibles pour les critères donnés.
     *
     * @param string|null $cabinType
     * @param int $passengers
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAvailableCabins(string $cabinType = null, int $passengers = 2)
    {
        $query = $this->cabins()
            ->where('max_occupancy', '>=', $passengers)
            ->where('is_available', true);

        if ($cabinType) {
            $query->where('cabin_type', $cabinType);
        }

        return $query->get();
    }

    /**
     * Calcule le prix total pour la croisière.
     *
     * @param string $cabinType
     * @param int $passengers
     * @param array $extras
     * @return array
     */
    public function calculatePrice(string $cabinType, int $passengers = 2, array $extras = []): array
    {
        $cabin = $this->cabins()
            ->where('cabin_type', $cabinType)
            ->where('max_occupancy', '>=', $passengers)
            ->firstOrFail();

        $basePrice = $cabin->price_per_night * $this->duration_nights * $passengers;
        $extrasTotal = 0;
        $appliedExtras = [];

        // Calculer le coût des extras
        foreach ($extras as $extraId => $quantity) {
            $extra = $cabin->extras()->find($extraId);
            if ($extra && $quantity > 0) {
                $extraCost = $extra->price * $quantity;
                $extrasTotal += $extraCost;
                $appliedExtras[] = [
                    'id' => $extra->id,
                    'name' => $extra->name,
                    'quantity' => $quantity,
                    'price_per_unit' => $extra->price,
                    'total' => $extraCost,
                ];
            }
        }

        $total = $basePrice + $extrasTotal;

        return [
            'cabin' => [
                'id' => $cabin->id,
                'type' => $cabin->cabin_type,
                'max_occupancy' => $cabin->max_occupancy,
                'price_per_night' => $cabin->price_per_night,
                'total_nights' => $this->duration_nights,
                'subtotal' => $basePrice,
            ],
            'passengers' => $passengers,
            'extras' => $appliedExtras,
            'extras_total' => $extrasTotal,
            'total' => $total,
            'currency' => $this->currency,
        ];
    }

    /**
     * Récupère l'URL de l'image principale de la croisière.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'large'): string
    {
        $image = $this->images()->where('is_featured', true)->first()
            ?? $this->images()->first();

        if (!$image) {
            return $this->ship ? $this->ship->getFeaturedImageUrl($size) : asset('images/default-cruise.jpg');
        }

        return $image->getUrl($size);
    }

    /**
     * Récupère la durée formatée de la croisière.
     *
     * @return string
     */
    public function getFormattedDurationAttribute(): string
    {
        $nights = $this->duration_nights;
        $days = $nights + 1; // Nuit + 1 jour

        if ($nights === 1) {
            return '1 nuit / 2 jours';
        }

        return "{$nights} nuits / {$days} jours";
    }

    /**
     * Récupère le prix de départ formaté.
     *
     * @return string
     */
    public function getFormattedStartingPriceAttribute(): string
    {
        return number_format($this->starting_price, 2, ',', ' ') . ' ' . $this->currency;
    }

    /**
     * Vérifie si la croisière est complète.
     *
     * @return bool
     */
    public function isFullyBooked(): bool
    {
        return $this->cabins()->where('is_available', true)->doesntExist();
    }

    /**
     * Vérifie si la croisière est à venir.
     *
     * @return bool
     */
    public function isUpcoming(): bool
    {
        return $this->start_date > now();
    }

    /**
     * Vérifie si la croisière est en cours.
     *
     * @return bool
     */
    public function isOngoing(): bool
    {
        $now = now();
        return $this->start_date <= $now && $this->end_date >= $now;
    }

    /**
     * Scope pour les croisières actives.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour les croisières en vedette.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope pour les croisières à venir.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now());
    }

    /**
     * Scope pour les croisières par destination.
     */
    public function scopeByDestination($query, $portId)
    {
        return $query->where('departure_port_id', $portId)
            ->orWhere('arrival_port_id', $portId);
    }

    /**
     * Supprime les ressources associées à la croisière.
     */
    protected static function booted()
    {
        static::deleting(function ($cruise) {
            // Supprimer les images du stockage
            foreach ($cruise->images as $image) {
                if (Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
                $image->delete();
            }
        });
    }
}

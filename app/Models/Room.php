<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Room extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'room_type_id',
        'room_number',
        'floor',
        'max_occupancy',
        'base_price',
        'price_per_extra_person',
        'size',
        'view',
        'bed_type',
        'beds',
        'is_smoking_allowed',
        'is_available',
        'description',
        'features',
        'amenities',
        'status',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'max_occupancy' => 'integer',
        'base_price' => 'float',
        'price_per_extra_person' => 'float',
        'size' => 'float',
        'beds' => 'integer',
        'is_smoking_allowed' => 'boolean',
        'is_available' => 'boolean',
        'features' => 'array',
        'amenities' => 'array',
    ];

    /**
     * Les statuts possibles d'une chambre.
     *
     * @var array
     */
    public const STATUSES = [
        'available' => 'Disponible',
        'occupied' => 'Occupée',
        'maintenance' => 'En maintenance',
        'reserved' => 'Réservée',
    ];

    /**
     * Relation avec l'hôtel auquel appartient la chambre.
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    /**
     * Relation avec le type de chambre.
     */
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    /**
     * Relation avec les réservations de cette chambre.
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }

    /**
     * Relation avec les images de la chambre.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Relation avec les équipements de la chambre.
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class, 'room_facility')
            ->withTimestamps();
    }

    /**
     * Vérifie si la chambre est disponible pour la période donnée.
     *
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @return bool
     */
    public function isAvailableForDates($checkIn, $checkOut): bool
    {
        if (!$this->is_available) {
            return false;
        }

        return !$this->reservations()
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('start_date', [$checkIn, $checkOut])
                    ->orWhereBetween('end_date', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('start_date', '<=', $checkIn)
                            ->where('end_date', '>=', $checkOut);
                    });
            })
            ->whereNotIn('status', ['cancelled', 'rejected'])
            ->exists();
    }

    /**
     * Calcule le prix total pour la durée du séjour.
     *
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @param int $adults
     * @param int $children
     * @return array
     */
    public function calculatePrice($checkIn, $checkOut, $adults = 2, $children = 0): array
    {
        $nights = $checkIn->diffInDays($checkOut);
        $totalGuests = $adults + $children;
        $extraGuests = max(0, $totalGuests - $this->max_occupancy);
        
        $basePrice = $this->base_price * $nights;
        $extraPersonCost = $extraGuests * $this->price_per_extra_person * $nights;
        $total = $basePrice + $extraPersonCost;

        return [
            'nights' => $nights,
            'base_price' => $basePrice,
            'extra_persons' => $extraGuests,
            'extra_person_cost' => $extraPersonCost,
            'total' => $total,
            'currency' => 'EUR', // Devise par défaut
        ];
    }

    /**
     * Récupère l'URL de l'image principale de la chambre.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'medium'): string
    {
        $image = $this->images()->where('is_featured', true)->first()
            ?? $this->images()->first();

        if (!$image) {
            return $this->roomType ? $this->roomType->getFeaturedImageUrl($size) : asset('images/default-room.jpg');
        }

        return $image->getUrl($size);
    }

    /**
     * Récupère le type de lit formaté.
     *
     * @return string
     */
    public function getFormattedBedTypeAttribute(): string
    {
        $types = [
            'single' => 'Lit simple',
            'double' => 'Grand lit',
            'twin' => 'Lits jumeaux',
            'queen' => 'Queen size',
            'king' => 'King size',
            'sofa' => 'Canapé-lit',
            'bunk' => 'Lit superposé',
        ];

        return $types[$this->bed_type] ?? $this->bed_type;
    }

    /**
     * Récupère la taille formatée de la chambre.
     *
     * @return string
     */
    public function getFormattedSizeAttribute(): string
    {
        return $this->size ? "{$this->size} m²" : 'Non spécifiée';
    }

    /**
     * Récupère le prix de base formaté.
     *
     * @return string
     */
    public function getFormattedBasePriceAttribute(): string
    {
        return number_format($this->base_price, 2, ',', ' ') . ' €';
    }

    /**
     * Récupère le statut formaté de la chambre.
     *
     * @return string
     */
    public function getFormattedStatusAttribute(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    /**
     * Vérifie si la chambre est occupée actuellement.
     *
     * @return bool
     */
    public function isOccupied(): bool
    {
        return $this->status === 'occupied';
    }

    /**
     * Vérifie si la chambre est en maintenance.
     *
     * @return bool
     */
    public function isUnderMaintenance(): bool
    {
        return $this->status === 'maintenance';
    }

    /**
     * Marque la chambre comme occupée.
     *
     * @return bool
     */
    public function markAsOccupied(): bool
    {
        return $this->update(['status' => 'occupied']);
    }

    /**
     * Marque la chambre comme disponible.
     *
     * @return bool
     */
    public function markAsAvailable(): bool
    {
        return $this->update(['status' => 'available']);
    }

    /**
     * Marque la chambre comme en maintenance.
     *
     * @return bool
     */
    public function markUnderMaintenance(): bool
    {
        return $this->update(['status' => 'maintenance', 'is_available' => false]);
    }

    /**
     * Scope pour les chambres disponibles.
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true)
                    ->where('status', 'available');
    }

    /**
     * Scope pour les chambres par capacité.
     */
    public function scopeCapacity($query, $guests)
    {
        return $query->where('max_occupancy', '>=', $guests);
    }

    /**
     * Supprime les images associées lors de la suppression de la chambre.
     */
    protected static function booted()
    {
        static::deleting(function ($room) {
            // Supprimer les images du stockage
            foreach ($room->images as $image) {
                $image->delete();
            }
            
            // Supprimer les relations avec les équipements
            $room->facilities()->detach();
        });
    }
}

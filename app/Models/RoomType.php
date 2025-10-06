<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class RoomType extends Model
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
        'base_occupancy',
        'max_occupancy',
        'base_price',
        'extra_person_charge',
        'size',
        'bed_type',
        'bed_count',
        'is_smoking_allowed',
        'is_active',
        'features',
        'amenities',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'base_occupancy' => 'integer',
        'max_occupancy' => 'integer',
        'base_price' => 'float',
        'extra_person_charge' => 'float',
        'size' => 'float',
        'bed_count' => 'integer',
        'is_smoking_allowed' => 'boolean',
        'is_active' => 'boolean',
        'features' => 'array',
        'amenities' => 'array',
    ];

    /**
     * Relation avec les chambres de ce type.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Relation avec les images du type de chambre.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Récupère l'URL de l'image principale du type de chambre.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'medium'): string
    {
        $image = $this->images()->where('is_featured', true)->first()
            ?? $this->images()->first();

        if (!$image) {
            return asset('images/default-room-type.jpg');
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
     * Récupère la capacité formatée.
     *
     * @return string
     */
    public function getFormattedCapacityAttribute(): string
    {
        if ($this->base_occupancy === $this->max_occupancy) {
            return "Jusqu'à {$this->max_occupancy} " . ($this->max_occupancy > 1 ? 'personnes' : 'personne');
        }
        
        return "De {$this->base_occupancy} à {$this->max_occupancy} personnes";
    }

    /**
     * Récupère la taille formatée.
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
     * Calcule le prix total pour la durée du séjour.
     *
     * @param int $nights
     * @param int $adults
     * @param int $children
     * @return array
     */
    public function calculatePrice(int $nights, int $adults = 2, int $children = 0): array
    {
        $totalGuests = $adults + $children;
        $extraGuests = max(0, $totalGuests - $this->base_occupancy);
        
        $basePrice = $this->base_price * $nights;
        $extraPersonCost = $extraGuests * $this->extra_person_charge * $nights;
        $total = $basePrice + $extraPersonCost;

        return [
            'nights' => $nights,
            'base_price' => $basePrice,
            'extra_persons' => $extraGuests,
            'extra_person_cost' => $extraPersonCost,
            'total' => $total,
            'currency' => 'EUR',
        ];
    }

    /**
     * Vérifie si le type de chambre est disponible pour les dates données.
     *
     * @param int $hotelId
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @return bool
     */
    public function isAvailableForDates(int $hotelId, $checkIn, $checkOut): bool
    {
        if (!$this->is_active) {
            return false;
        }

        // Compter les chambres de ce type non disponibles pour la période
        $unavailableRoomsCount = $this->rooms()
            ->where('hotel_id', $hotelId)
            ->whereHas('reservations', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->whereBetween('start_date', [$checkIn, $checkOut])
                      ->orWhereBetween('end_date', [$checkIn, $checkOut])
                      ->orWhere(function ($q) use ($checkIn, $checkOut) {
                          $q->where('start_date', '<=', $checkIn)
                            ->where('end_date', '>=', $checkOut);
                      });
                })
                ->whereNotIn('status', ['cancelled', 'rejected']);
            })
            ->count();

        // Vérifier s'il reste des chambres disponibles
        $totalRooms = $this->rooms()->where('hotel_id', $hotelId)->count();
        
        return $availableRooms = $totalRooms - $unavailableRoomsCount > 0;
    }

    /**
     * Récupère les chambres disponibles pour les dates données.
     *
     * @param int $hotelId
     * @param \Carbon\Carbon $checkIn
     * @param \Carbon\Carbon $checkOut
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAvailableRooms(int $hotelId, $checkIn, $checkOut)
    {
        // Récupérer les ID des chambres réservées pour la période
        $bookedRoomIds = Reservation::where('room_type_id', $this->id)
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('start_date', [$checkIn, $checkOut])
                    ->orWhereBetween('end_date', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('start_date', '<=', $checkIn)
                          ->where('end_date', '>=', $checkOut);
                    });
            })
            ->whereNotIn('status', ['cancelled', 'rejected'])
            ->pluck('room_id');

        // Récupérer les chambres disponibles
        return $this->rooms()
            ->where('hotel_id', $hotelId)
            ->where('is_available', true)
            ->whereNotIn('id', $bookedRoomIds)
            ->get();
    }

    /**
     * Supprime les images associées lors de la suppression du type de chambre.
     */
    protected static function booted()
    {
        static::deleting(function ($roomType) {
            // Supprimer les images du stockage
            foreach ($roomType->images as $image) {
                $image->delete();
            }
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Tour extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'duration',
        'duration_unit',
        'max_participants',
        'min_participants',
        'current_participants',
        'price_per_person',
        'discount_price',
        'currency',
        'start_location',
        'end_location',
        'start_time',
        'end_time',
        'is_active',
        'is_featured',
        'included',
        'not_included',
        'requirements',
        'additional_info',
        'cancellation_policy',
        'user_id', // Guide/agence organisatrice
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'duration' => 'integer',
        'max_participants' => 'integer',
        'min_participants' => 'integer',
        'current_participants' => 'integer',
        'price_per_person' => 'float',
        'discount_price' => 'float',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'included' => 'array',
        'not_included' => 'array',
        'requirements' => 'array',
    ];

    /**
     * Les unités de durée possibles.
     *
     * @var array
     */
    public const DURATION_UNITS = [
        'hours' => 'Heures',
        'days' => 'Jours',
        'weeks' => 'Semaines',
    ];

    /**
     * Relation avec les images du circuit.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Relation avec les réservations pour ce circuit.
     */
    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'bookable');
    }

    /**
     * Relation avec les avis sur le circuit.
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Relation avec les catégories du circuit.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(TourCategory::class, 'tour_tour_category');
    }

    /**
     * Relation avec les points d'intérêt du circuit.
     */
    public function pointsOfInterest(): HasMany
    {
        return $this->hasMany(TourPointOfInterest::class);
    }

    /**
     * Relation avec le guide/agence organisatrice.
     */
    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Vérifie si le circuit a des places disponibles.
     *
     * @param int $participants
     * @return bool
     */
    public function hasAvailableSpots(int $participants = 1): bool
    {
        return ($this->max_participants - $this->current_participants) >= $participants;
    }

    /**
     * Réserve des places pour le circuit.
     *
     * @param int $participants
     * @return bool
     */
    public function bookSpots(int $participants = 1): bool
    {
        if (!$this->hasAvailableSpots($participants)) {
            return false;
        }

        $this->increment('current_participants', $participants);
        return true;
    }

    /**
     * Libère des places annulées.
     *
     * @param int $participants
     * @return bool
     */
    public function releaseSpots(int $participants = 1): bool
    {
        $this->decrement('current_participants', $participants);
        return true;
    }

    /**
     * Calcule le prix total pour le nombre de participants.
     *
     * @param int $participants
     * @return array
     */
    public function calculateTotalPrice(int $participants = 1): array
    {
        $basePrice = $this->price_per_person * $participants;
        $discount = 0;

        if ($this->discount_price > 0 && $this->discount_price < $this->price_per_person) {
            $discount = ($this->price_per_person - $this->discount_price) * $participants;
        }

        $total = $basePrice - $discount;

        return [
            'base_price' => $basePrice,
            'discount' => $discount,
            'total' => $total,
            'currency' => $this->currency,
            'participants' => $participants,
        ];
    }

    /**
     * Récupère l'URL de l'image principale du circuit.
     *
     * @param string $size
     * @return string
     */
    public function getFeaturedImageUrl($size = 'medium'): string
    {
        $image = $this->images()->where('is_featured', true)->first()
            ?? $this->images()->first();

        if (!$image) {
            return asset('images/default-tour.jpg');
        }

        return $image->getUrl($size);
    }

    /**
     * Récupère la durée formatée du circuit.
     *
     * @return string
     */
    public function getFormattedDurationAttribute(): string
    {
        $unit = $this->duration > 1 
            ? strtolower(self::DURATION_UNITS[$this->duration_unit] ?? $this->duration_unit)
            : rtrim(strtolower(self::DURATION_UNITS[$this->duration_unit] ?? $this->duration_unit), 's');

        return "{$this->duration} {$unit}";
    }

    /**
     * Récupère le prix par personne formaté.
     *
     * @return string
     */
    public function getFormattedPriceAttribute(): string
    {
        $price = number_format($this->price_per_person, 2, ',', ' ');
        $discount = '';

        if ($this->discount_price > 0 && $this->discount_price < $this->price_per_person) {
            $discount = number_format($this->discount_price, 2, ',', ' ');
            return "<span class='text-muted text-decoration-line-through'>{$price} {$this->currency}</span> {$discount} {$this->currency}";
        }

        return "{$price} {$this->currency}";
    }

    /**
     * Vérifie si le circuit est complet.
     *
     * @return bool
     */
    public function isFullyBooked(): bool
    {
        return $this->current_participants >= $this->max_participants;
    }

    /**
     * Vérifie si le circuit a le nombre minimum de participants.
     *
     * @return bool
     */
    public function hasMinimumParticipants(): bool
    {
        return $this->current_participants >= $this->min_participants;
    }

    /**
     * Scope pour les circuits actifs.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour les circuits en vedette.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope pour les circuits à venir.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('start_time', '>', now());
    }

    /**
     * Supprime les ressources associées au circuit.
     */
    protected static function booted()
    {
        static::deleting(function ($tour) {
            // Supprimer les images du stockage
            foreach ($tour->images as $image) {
                if (Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
                $image->delete();
            }
        });
    }
}

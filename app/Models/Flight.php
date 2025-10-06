<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Flight extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'flight_number',
        'airline_id',
        'plane_id',
        'origin_airport_id',
        'destination_airport_id',
        'departure_time',
        'arrival_time',
        'duration',
        'price',
        'currency',
        'seats_available',
        'status',
        'cabin_baggage',
        'checkin_baggage',
        'refundable',
        'user_id', // Agent qui a ajouté le vol
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
        'duration' => 'integer', // en minutes
        'price' => 'float',
        'seats_available' => 'integer',
        'refundable' => 'boolean',
        'cabin_baggage' => 'float', // en kg
        'checkin_baggage' => 'float', // en kg
    ];

    /**
     * Les statuts possibles d'un vol.
     *
     * @var array
     */
    public const STATUSES = [
        'scheduled' => 'Programmé',
        'boarding' => 'Embarquement',
        'departed' => 'Décollé',
        'landed' => 'Atterri',
        'delayed' => 'Retardé',
        'cancelled' => 'Annulé',
    ];

    /**
     * Relation avec la compagnie aérienne.
     */
    public function airline(): BelongsTo
    {
        return $this->belongsTo(Airline::class);
    }

    /**
     * Relation avec l'aéroport de départ.
     */
    public function originAirport(): BelongsTo
    {
        return $this->belongsTo(Airport::class, 'origin_airport_id');
    }

    /**
     * Relation avec l'aéroport d'arrivée.
     */
    public function destinationAirport(): BelongsTo
    {
        return $this->belongsTo(Airport::class, 'destination_airport_id');
    }

    /**
     * Relation avec l'avion.
     */
    public function plane(): BelongsTo
    {
        return $this->belongsTo(Plane::class);
    }

    /**
     * Relation avec les réservations de ce vol.
     */
    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'bookable');
    }

    /**
     * Relation avec les escales du vol.
     */
    public function stopovers(): HasMany
    {
        return $this->hasMany(FlightStopover::class);
    }

    /**
     * Relation avec les avis sur le vol.
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Vérifie si des sièges sont disponibles pour la réservation.
     *
     * @param int $passengers
     * @return bool
     */
    public function hasAvailableSeats(int $passengers = 1): bool
    {
        return $this->seats_available >= $passengers;
    }

    /**
     * Réserve des sièges sur le vol.
     *
     * @param int $passengers
     * @return bool
     */
    public function bookSeats(int $passengers = 1): bool
    {
        if (!$this->hasAvailableSeats($passengers)) {
            return false;
        }

        $this->decrement('seats_available', $passengers);
        return true;
    }

    /**
     * Libère des sièges annulés.
     *
     * @param int $passengers
     * @return bool
     */
    public function releaseSeats(int $passengers = 1): bool
    {
        $this->increment('seats_available', $passengers);
        return true;
    }

    /**
     * Calcule la durée du vol formatée.
     *
     * @return string
     */
    public function getFormattedDurationAttribute(): string
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;
        
        return $hours . 'h' . str_pad($minutes, 2, '0', STR_PAD_LEFT);
    }

    /**
     * Vérifie si le vol est complet.
     *
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->seats_available <= 0;
    }

    /**
     * Vérifie si le vol est déjà parti.
     *
     * @return bool
     */
    public function hasDeparted(): bool
    {
        return $this->departure_time->isPast();
    }

    /**
     * Vérifie si le vol est arrivé à destination.
     *
     * @return bool
     */
    public function hasArrived(): bool
    {
        return $this->arrival_time->isPast();
    }

    /**
     * Récupère le prix formaté.
     *
     * @return string
     */
    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 2, ',', ' ') . ' ' . $this->currency;
    }

    /**
     * Scope pour les vols à venir.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('departure_time', '>', now());
    }

    /**
     * Scope pour les vols au départ d'un aéroport.
     */
    public function scopeFromAirport($query, $airportId)
    {
        return $query->where('origin_airport_id', $airportId);
    }

    /**
     * Scope pour les vols à destination d'un aéroport.
     */
    public function scopeToAirport($query, $airportId)
    {
        return $query->where('destination_airport_id', $airportId);
    }

    /**
     * Scope pour les vols avec des sièges disponibles.
     */
    public function scopeAvailable($query, $passengers = 1)
    {
        return $query->where('seats_available', '>=', $passengers);
    }

    /**
     * Met à jour le statut du vol.
     *
     * @param string $status
     * @return bool
     */
    public function updateStatus(string $status): bool
    {
        if (!array_key_exists($status, self::STATUSES)) {
            return false;
        }

        $this->status = $status;
        return $this->save();
    }

    /**
     * Annule le vol et rembourse les réservations.
     *
     * @param string $reason
     * @return bool
     */
    public function cancel(string $reason): bool
    {
        // Mettre à jour le statut du vol
        $this->status = 'cancelled';
        $this->save();

        // Rembourser les réservations
        $this->reservations()->where('status', '!=', 'cancelled')->each(function ($reservation) use ($reason) {
            $reservation->cancel('Vol annulé: ' . $reason);
            
            // Rembourser les paiements associés
            $reservation->payments()->where('status', 'succeeded')->each(function ($payment) {
                $payment->refund(null, 'Remboursement suite à l\'annulation du vol');
            });
        });

        return true;
    }
}

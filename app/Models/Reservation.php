<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reservation extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'bookable_type',
        'bookable_id',
        'start_date',
        'end_date',
        'guests',
        'total_amount',
        'status',
        'special_requests',
        'cancellation_reason',
        'cancelled_at',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'cancelled_at' => 'datetime',
        'total_amount' => 'float',
        'guests' => 'integer',
    ];

    /**
     * Les statuts possibles d'une réservation.
     *
     * @var array
     */
    public const STATUSES = [
        'pending' => 'En attente',
        'confirmed' => 'Confirmée',
        'cancelled' => 'Annulée',
        'completed' => 'Terminée',
    ];

    /**
     * Relation avec l'utilisateur qui a effectué la réservation.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation polymorphe avec le modèle réservable (Hotel, Flight, etc.).
     */
    public function bookable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Relation avec les paiements associés à cette réservation.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Vérifie si la réservation peut être annulée.
     *
     * @return bool
     */
    public function canBeCancelled(): bool
    {
        return in_array($this->status, ['pending', 'confirmed']) && 
               $this->start_date > now()->addDays(1);
    }

    /**
     * Annule la réservation.
     *
     * @param string|null $reason
     * @return bool
     */
    public function cancel(?string $reason = null): bool
    {
        if (!$this->canBeCancelled()) {
            return false;
        }

        return $this->update([
            'status' => 'cancelled',
            'cancellation_reason' => $reason,
            'cancelled_at' => now(),
        ]);
    }

    /**
     * Calcule le montant total de la réservation.
     *
     * @return float
     */
    public function calculateTotal(): float
    {
        // Logique de calcul du montant total basée sur le type de réservation
        // Cette méthode doit être étendue selon la logique métier spécifique
        return $this->total_amount;
    }

    /**
     * Vérifie si la réservation est payée.
     *
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->payments()->where('status', 'succeeded')->exists();
    }

    /**
     * Récupère le montant restant à payer.
     *
     * @return float
     */
    public function getRemainingAmount(): float
    {
        $paidAmount = $this->payments()->where('status', 'succeeded')->sum('amount');
        return max(0, $this->total_amount - $paidAmount);
    }

    /**
     * Scope pour les réservations à venir.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now())
                    ->where('status', 'confirmed');
    }

    /**
     * Scope pour les réservations passées.
     */
    public function scopePast($query)
    {
        return $query->where('end_date', '<', now())
                    ->where('status', 'confirmed');
    }

    /**
     * Scope pour les réservations en cours.
     */
    public function scopeCurrent($query)
    {
        $now = now();
        return $query->where('start_date', '<=', $now)
                    ->where('end_date', '>=', $now)
                    ->where('status', 'confirmed');
    }


    /**
     * Accessor pour la durée du séjour.
     */
    public function getDurationAttribute(): int
    {
        return $this->start_date->diffInDays($this->end_date);
    }

    /**
     * Accessor pour le statut formaté de la réservation.
     *
     * @return string
     */
    public function getFormattedStatusAttribute(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }
}

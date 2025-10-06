<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Review extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'reviewable_type',
        'reviewable_id',
        'reservation_id',
        'rating',
        'title',
        'comment',
        'pros',
        'cons',
        'trip_type',
        'trip_date',
        'status',
        'is_verified',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'rating' => 'integer',
        'is_verified' => 'boolean',
        'trip_date' => 'date',
        'pros' => 'array',
        'cons' => 'array',
    ];

    /**
     * Les statuts possibles d'un avis.
     *
     * @var array
     */
    public const STATUSES = [
        'pending' => 'En attente',
        'approved' => 'Approuvé',
        'rejected' => 'Rejeté',
    ];

    /**
     * Les types de voyage possibles.
     *
     * @var array
     */
    public const TRIP_TYPES = [
        'solo' => 'Voyage en solo',
        'couple' => 'En couple',
        'family' => 'En famille',
        'business' => 'Voyage d\'affaires',
        'friends' => 'Entre amis',
    ];

    /**
     * Relation avec l'utilisateur qui a posté l'avis.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec la réservation associée à l'avis.
     */
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    /**
     * Relation polymorphe avec le modèle évalué (Hotel, Flight, etc.).
     */
    public function reviewable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Vérifie si l'avis est approuvé.
     *
     * @return bool
     */
    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    /**
     * Vérifie si l'avis est en attente de modération.
     *
     * @return bool
     */
    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    /**
     * Vérifie si l'avis est rejeté.
     *
     * @return bool
     */
    public function isRejected(): bool
    {
        return $this->status === 'rejected';
    }

    /**
     * Approuve l'avis.
     *
     * @return bool
     */
    public function approve(): bool
    {
        return $this->update(['status' => 'approved']);
    }

    /**
     * Rejette l'avis.
     *
     * @return bool
     */
    public function reject(): bool
    {
        return $this->update(['status' => 'rejected']);
    }

    /**
     * Marque l'avis comme vérifié.
     *
     * @return bool
     */
    public function markAsVerified(): bool
    {
        return $this->update(['is_verified' => true]);
    }

    /**
     * Récupère le type de voyage formaté.
     *
     * @return string
     */
    public function getFormattedTripTypeAttribute(): string
    {
        return self::TRIP_TYPES[$this->trip_type] ?? $this->trip_type;
    }

    /**
     * Récupère le statut formaté de l'avis.
     *
     * @return string
     */
    public function getFormattedStatusAttribute(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    /**
     * Récupère les étoiles pleines pour l'affichage.
     *
     * @return int
     */
    public function getFullStarsAttribute(): int
    {
        return floor($this->rating);
    }

    /**
     * Récupère les étoiles vides pour l'affichage.
     *
     * @return int
     */
    public function getEmptyStarsAttribute(): int
    {
        return 5 - ceil($this->rating);
    }

    /**
     * Vérifie si l'avis a une demi-étole.
     *
     * @return bool
     */
    public function getHasHalfStarAttribute(): bool
    {
        return fmod($this->rating, 1) !== 0.0;
    }

    /**
     * Scope pour les avis approuvés.
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Scope pour les avis en attente.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope pour les avis vérifiés.
     */
    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    /**
     * Scope pour les avis par note.
     */
    public function scopeWithRating($query, $rating)
    {
        return $query->where('rating', '>=', $rating);
    }

    /**
     * Met à jour la note moyenne du modèle évalué.
     */
    public static function booted()
    {
        static::saved(function ($review) {
            $reviewable = $review->reviewable;
            if ($reviewable && method_exists($reviewable, 'updateAverageRating')) {
                $reviewable->updateAverageRating();
            }
        });

        static::deleted(function ($review) {
            $reviewable = $review->reviewable;
            if ($reviewable && method_exists($reviewable, 'updateAverageRating')) {
                $reviewable->updateAverageRating();
            }
        });
    }
}

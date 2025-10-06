<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    /**
     * Les statuts possibles d'un paiement.
     */
    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_CANCELLED = 'cancelled';

    /**
     * Les statuts disponibles avec leurs libellés.
     */
    public static function getStatuses(): array
    {
        return [
            self::STATUS_PENDING => 'En attente',
            self::STATUS_COMPLETED => 'Payé',
            self::STATUS_FAILED => 'Échoué',
            self::STATUS_REFUNDED => 'Remboursé',
            self::STATUS_CANCELLED => 'Annulé',
        ];
    }

    /**
     * Les méthodes de paiement acceptées.
     */
    public const METHOD_CINETPAY = 'cinetpay';
    public const METHOD_CREDIT_CARD = 'credit_card';
    public const METHOD_MOBILE_MONEY = 'mobile_money';
    public const METHOD_BANK_TRANSFER = 'bank_transfer';

    /**
     * Les méthodes de paiement disponibles avec leurs libellés.
     */
    public static function getPaymentMethods(): array
    {
        return [
            self::METHOD_CINETPAY => 'CinetPay',
            self::METHOD_CREDIT_CARD => 'Carte de crédit',
            self::METHOD_MOBILE_MONEY => 'Mobile Money',
            self::METHOD_BANK_TRANSFER => 'Virement bancaire',
        ];
    }

    /**
     * Les attributs qui sont assignables en masse.
     */
    protected $fillable = [
        'reservation_id',
        'user_id',
        'transaction_id',
        'amount',
        'currency',
        'status',
        'payment_method',
        'payment_details',
        'failure_reason',
        'paid_at',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     */
    protected $casts = [
        'amount' => 'float',
        'paid_at' => 'datetime',
        'payment_details' => 'array',
    ];

    /**
     * Les attributs par défaut pour une nouvelle instance du modèle.
     */
    protected $attributes = [
        'status' => self::STATUS_PENDING,
        'currency' => 'XOF',
    ];

    /**
     * Relation avec la réservation associée.
     */
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    /**
     * Relation avec l'utilisateur qui a effectué le paiement.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Marque le paiement comme réussi.
     *
     * @param string|null $transactionId
     * @param array $details
     * @return bool
     */
    public function markAsPaid(?string $transactionId = null, array $details = []): bool
    {
        return $this->update([
            'status' => self::STATUS_COMPLETED,
            'transaction_id' => $transactionId ?? $this->transaction_id,
            'paid_at' => now(),
            'payment_details' => array_merge($this->payment_details ?? [], $details, ['paid_at' => now()->toDateTimeString()]),
        ]);
    }

    /**
     * Marque le paiement comme échoué.
     *
     * @param string $reason
     * @param array $details
     * @return bool
     */
    public function markAsFailed(string $reason, array $details = []): bool
    {
        return $this->update([
            'status' => self::STATUS_FAILED,
            'failure_reason' => $reason,
            'payment_details' => array_merge($this->payment_details ?? [], $details, ['failed_at' => now()->toDateTimeString()]),
        ]);
    }

    /**
     * Marque le paiement comme remboursé ou partiellement remboursé.
     *
     * @param string|null $refundId
     * @param float|null $amount
     * @param array $details
     * @return bool
     */
    public function markAsRefunded(?string $refundId = null, ?float $amount = null, array $details = []): bool
    {
        $refundAmount = $amount ?? $this->amount;
        $isFullRefund = $refundAmount >= $this->amount;
        
        $refundDetails = [
            'refunded_at' => now()->toDateTimeString(),
            'refund_id' => $refundId ?? 'REF-' . uniqid(),
            'refund_amount' => $refundAmount,
            'is_full_refund' => $isFullRefund,
        ];
        
        $status = $isFullRefund ? self::STATUS_REFUNDED : 'partially_refunded';
        
        // Si c'est un remboursement partiel, on ajoute le montant remboursé au montant existant
        $totalRefunded = $isFullRefund 
            ? $refundAmount 
            : ($this->refund_amount ?? 0) + $refundAmount;

        return $this->update([
            'status' => $status,
            'refunded_at' => now(),
            'refund_amount' => $totalRefunded,
            'payment_details' => array_merge($this->payment_details ?? [], $details, $refundDetails),
        ]);
    }

    /**
     * Vérifie si le paiement est réussi.
     *
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Vérifie si le paiement est en attente.
     *
     * @return bool
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    /**
     * Récupère le libellé du statut du paiement.
     *
     * @return string
     */
    public function getStatusLabelAttribute(): string
    {
        return self::getStatuses()[$this->status] ?? $this->status;
    }

    /**
     * Récupère le libellé de la méthode de paiement.
     *
     * @return string
     */
    public function getPaymentMethodLabelAttribute(): string
    {
        return self::getPaymentMethods()[$this->payment_method] ?? $this->payment_method;
    }

    /**
     * Scope pour les paiements réussis.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', self::STATUS_COMPLETED);
    }

    /**
     * Scope pour les paiements en attente.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    /**
     * Scope pour les paiements échoués.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFailed($query)
    {
        return $query->where('status', self::STATUS_FAILED);
    }


    /**
     * Formate le montant avec la devise.
     *
     * @return string
     */
    public function getFormattedAmountAttribute(): string
    {
        $formatted = number_format($this->amount, 2, ',', ' ');
        
        switch ($this->currency) {
            case 'EUR':
                return $formatted . ' €';
            case 'USD':
                return '$' . $formatted;
            case 'XOF':
                return $formatted . ' FCFA';
            default:
                return $formatted . ' ' . $this->currency;
        }
    }

    
    /**
     * Vérifie si le paiement a été partiellement remboursé.
     *
     * @return bool
     */
    public function isPartiallyRefunded(): bool
    {
        return $this->status === 'partially_refunded';
    }

    /**
     * Vérifie si le paiement a été annulé.
     *
     * @return bool
     */
    public function isCancelled(): bool
    {
        return $this->status === self::STATUS_CANCELLED;
    }
    
    /**
     * Récupère le montant remboursé.
     *
     * @return float
     */
    public function getRefundedAmount(): float
    {
        return $this->refund_amount ?? 0;
    }
    
    /**
     * Récupère le montant remboursable.
     *
     * @return float
     */
    public function getRefundableAmount(): float
    {
        if (!$this->isPaid()) {
            return 0;
        }
        
        return $this->amount - $this->getRefundedAmount();
    }

    /**
     * Rembourse tout ou partie du paiement.
     *
     * @param float|null $amount Montant à rembourser (null pour un remboursement total)
     * @param string $reason Raison du remboursement
     * @return bool
     */
    public function refund(?float $amount = null, string $reason = 'Demande client'): bool
    {
        if (!$this->isPaid()) {
            return false;
        }

        $refundableAmount = $this->getRefundableAmount();
        
        if ($refundableAmount <= 0) {
            return false;
        }

        $amount = $amount ?? $refundableAmount;
        
        if ($amount <= 0 || $amount > $refundableAmount) {
            return false;
        }

        return $this->update([
            'status' => self::STATUS_CANCELLED,
            'failure_reason' => $reason,
        ]);
    }

    /**
     * Scope pour les paiements remboursés.
     */
    public function scopeRefunded($query)
    {
        return $query->whereIn('status', ['refunded', 'partially_refunded']);
    }
}

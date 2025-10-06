<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    /**
     * Payment status constants
     */
    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_CANCELLED = 'cancelled';

    /**
     * Payment method constants
     */
    public const METHOD_CINETPAY = 'cinetpay';
    public const METHOD_CREDIT_CARD = 'credit_card';
    public const METHOD_MOBILE_MONEY = 'mobile_money';
    public const METHOD_BANK_TRANSFER = 'bank_transfer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
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
        'refunded_at',
        'refund_amount',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'amount' => 'float',
        'refund_amount' => 'float',
        'paid_at' => 'datetime',
        'refunded_at' => 'datetime',
        'payment_details' => 'array',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => self::STATUS_PENDING,
        'currency' => 'XOF',
    ];

    /**
     * Get the statuses with their labels.
     *
     * @return array
     */
    public static function getStatuses(): array
    {
        return [
            self::STATUS_PENDING => 'En attente',
            self::STATUS_COMPLETED => 'Payé',
            self::STATUS_FAILED => 'Échoué',
            self::STATUS_REFUNDED => 'Remboursé',
            self::STATUS_CANCELLED => 'Annulé',
            'partially_refunded' => 'Partiellement remboursé',
        ];
    }

    /**
     * Get the payment methods with their labels.
     *
     * @return array
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
     * Get the reservation that owns the payment.
     */
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    /**
     * Get the user that made the payment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mark the payment as paid.
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
            'payment_details' => array_merge($this->payment_details ?? [], $details, [
                'paid_at' => now()->toDateTimeString(),
            ]),
        ]);
    }

    /**
     * Mark the payment as failed.
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
            'payment_details' => array_merge($this->payment_details ?? [], $details, [
                'failed_at' => now()->toDateTimeString(),
            ]),
        ]);
    }

    /**
     * Mark the payment as refunded or partially refunded.
     * This is an alias for the refund() method for backward compatibility.
     *
     * @param string|null $refundId
     * @param float|null $amount
     * @param array $details
     * @return bool
     */
    public function markAsRefunded(?string $refundId = null, ?float $amount = null, array $details = []): bool
    {
        // Préparer les métadonnées pour le remboursement
        $metadata = [
            'refund_id' => $refundId ?? 'REF-' . uniqid(),
            'is_full_refund' => ($amount === null || $amount >= $this->amount),
            'details' => $details,
        ];
        
        // Utiliser la méthode refund pour gérer le remboursement
        return $this->refund(
            $amount,
            $details['reason'] ?? 'Refund processed',
            $metadata
        );
    }

    /**
     * Check if the payment is paid.
     *
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Check if the payment is pending.
     *
     * @return bool
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }
    
    /**
     * Check if the payment can be refunded.
     *
     * @return bool
     */
    public function canBeRefunded(): bool
    {
        // Le paiement doit être marqué comme complété
        if ($this->status !== self::STATUS_COMPLETED) {
            return false;
        }
        
        // Vérifier si le paiement n'est pas déjà totalement remboursé
        if ($this->status === self::STATUS_REFUNDED || 
            (isset($this->payment_details['is_full_refund']) && $this->payment_details['is_full_refund'] === true)) {
            return false;
        }
        
        // Vérifier s'il reste un montant remboursable
        return $this->getRefundableAmount() > 0;
    }
    
    /**
     * Get the refundable amount.
     *
     * @return float
     */
    public function getRefundableAmount(): float
    {
        // Si le paiement n'est pas complété, le montant remboursable est 0
        if ($this->status !== self::STATUS_COMPLETED) {
            return 0.0;
        }
        
        // Si déjà remboursé, retourner 0
        if ($this->status === self::STATUS_REFUNDED) {
            return 0.0;
        }
        
        // Si partiellement remboursé, retourner la différence
        if ($this->refund_amount > 0) {
            return round($this->amount - $this->refund_amount, 2);
        }
        
        // Sinon, retourner le montant total
        return round($this->amount, 2);
    }
    
    
    
    /**
     * Check if the payment has failed.
     *
     * @return bool
     */
    public function isFailed(): bool
    {
        return $this->status === self::STATUS_FAILED;
    }
    
    /**
     * Check if the payment is partially refunded.
     *
     * @return bool
     */
    public function isPartiallyRefunded(): bool
    {
        return $this->status === 'partially_refunded' || 
               ($this->refund_amount > 0 && $this->refund_amount < $this->amount);
    }
    
    /**
     * Check if the payment is fully refunded.
     *
     * @return bool
     */
    public function isFullyRefunded(): bool
    {
        return $this->status === self::STATUS_REFUNDED && 
               $this->refund_amount >= $this->amount;
    }
    
    /**
     * Get the total refunded amount.
     *
     * @return float
     */
    public function getRefundedAmount(): float
    {
        // Si nous avons un montant de remboursement défini, l'utiliser
        if (isset($this->refund_amount)) {
            return (float) $this->refund_amount;
        }
        
        // Sinon, essayer de calculer à partir des remboursements dans les détails
        if (isset($this->payment_details['refunds']) && is_array($this->payment_details['refunds'])) {
            return array_reduce($this->payment_details['refunds'], function($total, $refund) {
                return $total + ($refund['refunded_amount'] ?? 0);
            }, 0);
        }
        
        // Par défaut, retourner 0
        return 0.0;
    }
    
    /**
     * Get the remaining refundable amount.
     *
     * @return float
     */
    public function getRemainingRefundableAmount(): float
    {
        if (!$this->isPaid()) {
            return 0;
        }
        
        return max(0, $this->amount - $this->getRefundedAmount());
    }

    /**
     * Check if the payment is refunded or partially refunded.
     *
     * @return bool
     */
    public function isRefunded(): bool
    {
        return $this->status === self::STATUS_REFUNDED || $this->isPartiallyRefunded();
    }

    /**
     * Check if the payment is cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool
    {
        return $this->status === self::STATUS_CANCELLED;
    }

    /**
     * Get the status label.
     *
     * @return string
     */
    public function getStatusLabelAttribute(): string
    {
        return self::getStatuses()[$this->status] ?? $this->status;
    }

    /**
     * Get the payment method label.
     *
     * @return string
     */
    public function getPaymentMethodLabelAttribute(): string
    {
        return self::getPaymentMethods()[$this->payment_method] ?? $this->payment_method;
    }

    /**
     * Get the formatted amount with currency symbol.
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
     * Get the refund history for this payment.
     *
     * @return array
     */
    public function getRefundHistory(): array
    {
        if (!isset($this->payment_details['refunds']) || !is_array($this->payment_details['refunds'])) {
            return [];
        }
        
        // Trier les remboursements par date (du plus récent au plus ancien)
        $refunds = $this->payment_details['refunds'];
        usort($refunds, function($a, $b) {
            $dateA = $a['processed_at'] ?? '';
            $dateB = $b['processed_at'] ?? '';
            return strtotime($dateB) - strtotime($dateA);
        });
        
        return $refunds;
    }
    
    /**
     * Generate a PDF receipt for this payment.
     *
     * @return \Barryvdh\DomPDF\PDF
     */
    public function generateReceipt()
    {
        $data = [
            'payment' => $this,
            'date' => now()->format('d/m/Y'),
            'reference' => 'RC-' . strtoupper(uniqid()),
        ];
        
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.receipt', $data);
        return $pdf->download('recu-paiement-' . $this->transaction_id . '.pdf');
    }

    /**
     * Process a refund for the payment.
     *
     * @param float|null $amount
     * @param string $reason
     * @param array $metadata Additional metadata for the refund
     * @return bool
     */
    public function refund(?float $amount = null, string $reason = 'Customer request', array $metadata = []): bool
    {
        if (!$this->isPaid()) {
            return false;
        }

        $refundableAmount = $this->getRefundableAmount();
        
        if ($refundableAmount <= 0) {
            return false;
        }

        // Si aucun montant n'est spécifié, rembourser le montant maximum possible
        $amount = $amount ?? $refundableAmount;
        
        // Valider le montant du remboursement
        if ($amount <= 0 || $amount > $refundableAmount) {
            return false;
        }

        // Préparer les détails du remboursement
        $refundDetails = array_merge($metadata, [
            'reason' => $reason,
            'processed_at' => now()->toDateTimeString(),
            'refunded_amount' => $amount,
            'previous_status' => $this->status,
            'previous_refunded_amount' => $this->refund_amount ?? 0,
        ]);

        // Mettre à jour le statut et le montant remboursé
        $newRefundAmount = ($this->refund_amount ?? 0) + $amount;
        $isFullRefund = ($newRefundAmount >= $this->amount);
        
        $this->refund_amount = $newRefundAmount;
        
        if ($isFullRefund) {
            $this->status = self::STATUS_REFUNDED;
            $this->refunded_at = now();
        } else {
            $this->status = 'partially_refunded';
            if ($this->refunded_at === null) {
                $this->refunded_at = now();
            }
        }
        
        // Mettre à jour les détails du paiement
        $this->payment_details = array_merge($this->payment_details ?? [], [
            'refunds' => array_merge($this->payment_details['refunds'] ?? [], [$refundDetails]),
            'last_refund' => $refundDetails,
        ]);
        
        // Sauvegarder les modifications
        return $this->save();
    }

    /**
     * Scope a query to only include completed payments.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', self::STATUS_COMPLETED);
    }

    /**
     * Scope a query to only include pending payments.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    /**
     * Scope a query to only include failed payments.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFailed($query)
    {
        return $query->where('status', self::STATUS_FAILED);
    }

    /**
     * Scope a query to only include refunded payments.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRefunded($query)
    {
        return $query->whereIn('status', [self::STATUS_REFUNDED, 'partially_refunded']);
    }
}

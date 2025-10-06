<?php

namespace App\Policies;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Vérifie si l'utilisateur peut voir le paiement.
     */
    public function view(User $user, Payment $payment): bool
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Vérifie si l'utilisateur peut créer un paiement.
     */
    public function create(User $user): bool
    {
        return true; // Tout utilisateur authentifié peut créer un paiement
    }

    /**
     * Vérifie si l'utilisateur peut mettre à jour le paiement.
     */
    public function update(User $user, Payment $payment): bool
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Vérifie si l'utilisateur peut supprimer le paiement.
     */
    public function delete(User $user, Payment $payment): bool
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Vérifie si l'utilisateur peut payer pour la réservation.
     */
    public function pay(User $user, $booking): bool
    {
        return $user->id === $booking->user_id && 
               $booking->status === 'pending' && 
               $booking->payments()->where('status', Payment::STATUS_COMPLETED)->doesntExist();
    }

    /**
     * Vérifie si l'utilisateur peut demander un remboursement.
     */
    public function refund(User $user, Payment $payment): bool
    {
        // L'utilisateur doit être le propriétaire du paiement
        // Le paiement doit être marqué comme payé
        // Le paiement ne doit pas être déjà remboursé ou annulé
        return $user->id === $payment->user_id &&
               $payment->isPaid() &&
               !$payment->isRefunded() &&
               !$payment->isCancelled();
    }

    /**
     * Vérifie si l'utilisateur peut annuler le paiement.
     */
    public function cancel(User $user, Payment $payment): bool
    {
        // L'utilisateur doit être le propriétaire du paiement
        // Le paiement doit être en attente ou échoué
        // Le paiement ne doit pas être déjà remboursé ou annulé
        return $user->id === $payment->user_id &&
               ($payment->isPending() || $payment->isFailed()) &&
               !$payment->isRefunded() &&
               !$payment->isCancelled();
    }
}

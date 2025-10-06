<?php

namespace App\Services\Contracts;

interface PaymentGatewayInterface
{
    /**
     * Initialise un paiement
     *
     * @param float $amount Montant du paiement
     * @param array $data Données supplémentaires
     * @return array Réponse de la passerelle de paiement
     */
    public function initializePayment(float $amount, array $data = []): array;

    /**
     * Vérifie le statut d'un paiement
     *
     * @param string $transactionId Identifiant de la transaction
     * @return array Statut du paiement
     */
    public function checkPaymentStatus(string $transactionId): array;

    /**
     * Effectue un remboursement
     *
     * @param string $transactionId Identifiant de la transaction
     * @param float|null $amount Montant à rembourser (null pour un remboursement total)
     * @return array Résultat du remboursement
     */
    public function refund(string $transactionId, ?float $amount = null): array;

    /**
     * Vérifie si la passerelle est disponible
     *
     * @return bool
     */
    public function isAvailable(): bool;
}

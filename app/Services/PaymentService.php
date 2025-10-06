<?php

namespace App\Services;

use App\Models\Payment;
use App\Models\Reservation;
use App\Services\Contracts\PaymentGatewayInterface;
use App\Services\PaymentGateways\CinetPayGateway;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaymentService
{
    /**
     * Les passerelles de paiement disponibles
     *
     * @var array
     */
    protected $gateways = [];

    /**
     * La passerelle de paiement par défaut
     *
     * @var string
     */
    protected $defaultGateway = 'cinetpay';

    /**
     * Constructeur du service de paiement
     */
    public function __construct()
    {
        $this->registerGateways();
    }

    /**
     * Enregistre les passerelles de paiement disponibles
     *
     * @return void
     */
    protected function registerGateways(): void
    {
        $this->gateways['cinetpay'] = new CinetPayGateway();
        
        // Ajoutez d'autres passerelles ici (Stripe, PayPal, etc.)
        // $this->gateways['stripe'] = new StripeGateway();
    }

    /**
     * Récupère une passerelle de paiement
     *
     * @param string|null $gateway
     * @return PaymentGatewayInterface
     * @throws \Exception
     */
    public function gateway(string $gateway = null): PaymentGatewayInterface
    {
        $gateway = $gateway ?: $this->defaultGateway;

        if (!isset($this->gateways[$gateway])) {
            throw new \Exception("La passerelle de paiement [{$gateway}] n'est pas configurée.");
        }

        return $this->gateways[$gateway];
    }

    /**
     * Initialise un nouveau paiement
     *
     * @param Reservation $reservation
     * @param string $gateway
     * @return array
     */
    public function initializePayment(Reservation $reservation, string $gateway = null): array
    {
        try {
            $gateway = $this->gateway($gateway);
            
            if (!$gateway->isAvailable()) {
                throw new \Exception("La passerelle de paiement n'est pas disponible pour le moment.");
            }

            $transactionId = (string) Str::uuid();
            
            // Crée un enregistrement de paiement
            $payment = Payment::create([
                'reservation_id' => $reservation->id,
                'user_id' => $reservation->user_id,
                'transaction_id' => $transactionId,
                'amount' => $reservation->total_amount,
                'currency' => 'XOF', // Devise par défaut
                'status' => Payment::STATUS_PENDING,
                'payment_method' => $gateway instanceof CinetPayGateway ? 'cinetpay' : 'other',
                'payment_details' => [
                    'gateway' => $gateway instanceof CinetPayGateway ? 'CinetPay' : 'Other',
                    'reservation_id' => $reservation->id,
                ],
            ]);

            // Initialise le paiement avec la passerelle
            $result = $gateway->initializePayment($reservation->total_amount, [
                'transaction_id' => $transactionId,
                'description' => "Paiement pour la réservation #{$reservation->id}",
                'customer_name' => $reservation->user->name,
                'customer_email' => $reservation->user->email,
                'customer_phone' => $reservation->user->phone,
                'custom_data' => json_encode([
                    'reservation_id' => $reservation->id,
                    'user_id' => $reservation->user_id,
                ]),
            ]);

            if ($result['success']) {
                // Met à jour le paiement avec les informations de la passerelle
                $payment->update([
                    'payment_details' => array_merge(
                        $payment->payment_details ?? [],
                        [
                            'payment_token' => $result['payment_token'] ?? null,
                            'gateway_response' => $result,
                        ]
                    ),
                ]);

                return [
                    'success' => true,
                    'payment_url' => $result['payment_url'],
                    'payment_id' => $payment->id,
                    'transaction_id' => $transactionId,
                ];
            }

            throw new \Exception($result['message'] ?? 'Échec de l\'initialisation du paiement');

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'initialisation du paiement: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => $e->getMessage(),
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Vérifie le statut d'un paiement
     *
     * @param Payment $payment
     * @return array
     */
    public function checkPaymentStatus(Payment $payment): array
    {
        try {
            $gateway = $this->gateway($payment->payment_method === 'cinetpay' ? 'cinetpay' : null);
            $result = $gateway->checkPaymentStatus($payment->transaction_id);

            // Met à jour le statut du paiement
            $status = $this->mapGatewayStatusToPaymentStatus($result['status'] ?? '');
            
            $updates = [
                'status' => $status,
                'payment_details' => array_merge(
                    $payment->payment_details ?? [],
                    [
                        'last_status_check' => now(),
                        'gateway_response' => $result,
                    ]
                ),
            ];

            // Si le paiement est réussi, enregistre la date de paiement
            if ($status === Payment::STATUS_COMPLETED && !$payment->paid_at) {
                $updates['paid_at'] = now();
            }

            $payment->update($updates);

            // Met à jour le statut de la réservation si nécessaire
            if ($status === Payment::STATUS_COMPLETED && $payment->reservation) {
                $payment->reservation->update(['status' => 'confirmed']);
            }

            return [
                'success' => $result['success'] ?? false,
                'status' => $status,
                'payment' => $payment->fresh(),
            ];

        } catch (\Exception $e) {
            Log::error('Erchec de la vérification du statut du paiement: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => $e->getMessage(),
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Effectue un remboursement
     *
     * @param Payment $payment
     * @param float|null $amount
     * @return array
     */
    public function refundPayment(Payment $payment, ?float $amount = null): array
    {
        try {
            if ($payment->status !== Payment::STATUS_COMPLETED) {
                throw new \Exception('Seuls les paiements complétés peuvent être remboursés.');
            }

            $gateway = $this->gateway($payment->payment_method === 'cinetpay' ? 'cinetpay' : null);
            $result = $gateway->refund($payment->transaction_id, $amount);

            if ($result['success']) {
                // Met à jour le statut du paiement
                $payment->update([
                    'status' => $amount >= $payment->amount ? Payment::STATUS_REFUNDED : Payment::STATUS_PARTIALLY_REFUNDED,
                    'refunded_at' => now(),
                    'refund_amount' => $amount,
                    'payment_details' => array_merge(
                        $payment->payment_details ?? [],
                        [
                            'refund_details' => $result,
                            'last_refund_at' => now(),
                        ]
                    ),
                ]);

                return [
                    'success' => true,
                    'message' => 'Remboursement effectué avec succès',
                    'refund_amount' => $amount,
                    'payment' => $payment->fresh(),
                ];
            }

            throw new \Exception($result['message'] ?? 'Échec du remboursement');

        } catch (\Exception $e) {
            Log::error('Erreur lors du remboursement: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => $e->getMessage(),
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Convertit le statut de la passerelle en statut de paiement
     *
     * @param string $gatewayStatus
     * @return string
     */
    protected function mapGatewayStatusToPaymentStatus(string $gatewayStatus): string
    {
        $statusMap = [
            'accepted' => Payment::STATUS_COMPLETED,
            'succeeded' => Payment::STATUS_COMPLETED,
            'completed' => Payment::STATUS_COMPLETED,
            'pending' => Payment::STATUS_PENDING,
            'failed' => Payment::STATUS_FAILED,
            'refunded' => Payment::STATUS_REFUNDED,
            'cancelled' => Payment::STATUS_CANCELLED,
        ];

        return $statusMap[strtolower($gatewayStatus)] ?? Payment::STATUS_PENDING;
    }

    /**
     * Récupère la liste des passerelles de paiement disponibles
     *
     * @return array
     */
    public function getAvailableGateways(): array
    {
        return array_filter($this->gateways, function ($gateway) {
            return $gateway->isAvailable();
        });
    }
}

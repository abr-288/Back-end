<?php

namespace App\Services\PaymentGateways;

use App\Services\Contracts\PaymentGatewayInterface;
use CinetPay\CinetPay;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CinetPayGateway implements PaymentGatewayInterface
{
    /**
     * Instance CinetPay
     *
     * @var CinetPay
     */
    protected $cinetpay;

    /**
     * Identifiant du site
     *
     * @var string
     */
    protected $siteId;

    /**
     * Clé API CinetPay
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Mode de l'API (test ou prod)
     *
     * @var string
     */
    protected $mode;

    /**
     * Devise par défaut
     *
     * @var string
     */
    protected $currency = 'XOF';

    /**
     * Constructeur du service CinetPay
     */
    public function __construct()
    {
        $this->siteId = config('services.cinetpay.site_id');
        $this->apiKey = config('services.cinetpay.api_key');
        $this->mode = config('services.cinetpay.mode', 'test');
        $this->currency = config('services.cinetpay.currency', 'XOF');
        
        $this->initializeCinetPay();
    }

    /**
     * Initialise l'instance CinetPay
     *
     * @return void
     * @throws \Exception
     */
    protected function initializeCinetPay(): void
    {
        if (empty($this->siteId) || empty($this->apiKey)) {
            throw new \Exception('Les identifiants CinetPay ne sont pas configurés.');
        }

        try {
            $this->cinetpay = new CinetPay(
                $this->siteId,
                $this->apiKey,
                $this->mode === 'prod' ? 'PROD' : 'TEST',
                'V2'
            );
        } catch (Exception $e) {
            Log::error('Erreur lors de l\'initialisation de CinetPay: ' . $e->getMessage());
            throw new \Exception('Impossible d\'initialiser CinetPay. Veuillez vérifier votre configuration.');
        }
    }

    /**
     * Initialise un paiement
     *
     * @param float $amount
     * @param array $data
     * @return array
     */
    public function initializePayment(float $amount, array $data = []): array
    {
        $transactionId = $data['transaction_id'] ?? Str::uuid();
        
        try {
            $this->cinetpay->setTransId($transactionId)
                ->setDesignation(\Illuminate\Support\Str::limit($data['description'] ?? 'Paiement', 50))
                ->setTransData(
                    $data['customer_name'] ?? 'Client',
                    $data['customer_email'] ?? null,
                    $data['customer_phone'] ?? null,
                    $data['customer_address'] ?? null,
                    $data['customer_city'] ?? null,
                    $data['customer_country'] ?? 'CI',
                    $data['customer_state'] ?? null,
                    $data['customer_zip_code'] ?? null
                )
                ->setCustom($data['custom_data'] ?? '')
                ->setReturnUrl(route('payments.return'))
                ->setNotifyUrl(route('payments.notify'));

            // Configuration du paiement
            $this->cinetpay->setInfo1('')
                ->setInfo2('')
                ->setInfo3('')
                ->setCurrency($this->currency)
                ->setAmount($amount);

            // Tentative de paiement
            $paymentData = $this->cinetpay->getPaymentData();
            
            return [
                'success' => true,
                'payment_url' => $this->cinetpay->getPayUrl($paymentData['payment_token']),
                'transaction_id' => $transactionId,
                'payment_token' => $paymentData['payment_token'],
                'gateway' => 'cinetpay',
            ];
        } catch (Exception $e) {
            Log::error('Erreur lors de l\'initialisation du paiement CinetPay: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Erreur lors de l\'initialisation du paiement',
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Vérifie le statut d'un paiement
     *
     * @param string $transactionId
     * @return array
     */
    public function checkPaymentStatus(string $transactionId): array
    {
        try {
            $result = $this->cinetpay->getTransactionInfo($transactionId);
            
            return [
                'success' => $result['status'] === 'ACCEPTED',
                'status' => strtolower($result['status']),
                'transaction_id' => $result['transaction_id'],
                'amount' => $result['amount'],
                'currency' => $result['currency'],
                'payment_method' => $result['payment_method'],
                'customer' => [
                    'name' => $result['customer_name'] ?? null,
                    'email' => $result['customer_email'] ?? null,
                    'phone' => $result['customer_phone'] ?? null,
                ],
                'metadata' => [
                    'raw_response' => $result,
                ],
            ];
        } catch (Exception $e) {
            Log::error('Erreur lors de la vérification du statut du paiement: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Erreur lors de la vérification du statut du paiement',
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Effectue un remboursement
     *
     * @param string $transactionId
     * @param float|null $amount
     * @return array
     */
    public function refund(string $transactionId, ?float $amount = null): array
    {
        try {
            $result = $this->cinetpay->refundTransaction($transactionId, $amount);
            
            return [
                'success' => $result['status'] === 'REFUNDED',
                'status' => strtolower($result['status']),
                'transaction_id' => $result['transaction_id'],
                'refund_id' => $result['refund_id'] ?? null,
                'amount_refunded' => $result['amount_refunded'] ?? $amount,
                'metadata' => [
                    'raw_response' => $result,
                ],
            ];
        } catch (Exception $e) {
            Log::error('Erreur lors du remboursement: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Erreur lors du remboursement',
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Vérifie si la passerelle est disponible
     *
     * @return bool
     */
    public function isAvailable(): bool
    {
        return !empty($this->siteId) && !empty($this->apiKey);
    }
}

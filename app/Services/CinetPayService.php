<?php

namespace App\Services;

use CinetPay\CinetPay;
use Exception;
use Illuminate\Support\Facades\Log;

class CinetPayService
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
        
        $this->initializeCinetPay();
    }

    /**
     * Initialise l'instance CinetPay
     * @throws \Exception Si CinetPay n'est pas configuré correctement
     */
    protected function initializeCinetPay(): void
    {
        // Vérifier si CinetPay est activé dans la configuration
        if (!config('cinetpay.enabled', false)) {
            throw new \Exception('CinetPay n\'est pas activé dans la configuration.');
        }

        // Vérifier que les identifiants sont présents
        if (empty($this->siteId) || empty($this->apiKey)) {
            throw new \Exception('Les identifiants CinetPay ne sont pas configurés.');
        }

        try {
            // Selon la documentation de CinetPay, la plateforme doit être 'TEST' pour le mode test
            // et 'PROD' pour le mode production
            $this->cinetpay = new CinetPay(
                $this->siteId,
                $this->apiKey,
                $this->mode === 'prod' ? 'PROD' : 'TEST',
                'V2' // Version de l'API
            );
        } catch (Exception $e) {
            Log::error('Erreur lors de l\'initialisation de CinetPay: ' . $e->getMessage());
            throw new \Exception('Impossible d\'initialiser CinetPay. Veuillez vérifier votre configuration.');
        }
    }

    /**
     * Crée un paiement CinetPay
     *
     * @param string $transactionId Identifiant unique de la transaction
     * @param float $amount Montant à payer
     * @param string $description Description de la transaction
     * @param array $customerData Données du client
     * @param string $returnUrl URL de retour après paiement
     * @param string $notifyUrl URL de notification
     * @return array
     */
    public function createPayment(
        string $transactionId,
        float $amount,
        string $description,
        array $customerData = [],
        string $returnUrl = null,
        string $notifyUrl = null
    ): array {
        try {
            // Configuration de base du paiement
            $this->cinetpay->setTransId($transactionId)
                ->setDesignation($description)
                ->setTransDate(date('Y-m-d H:i:s'))
                ->setAmount($amount)
                ->setCurrency($this->currency);

            // Configuration des URLs de retour et de notification
            if ($returnUrl) {
                $this->cinetpay->setReturnUrl($returnUrl);
            }

            if ($notifyUrl) {
                $this->cinetpay->setNotifyUrl($notifyUrl);
            }

            // Configuration des informations client
            if (!empty($customerData)) {
                $this->cinetpay->setCustomerName($customerData['name'] ?? '');
                $this->cinetpay->setCustomerEmail($customerData['email'] ?? '');
                $this->cinetpay->setCustomerPhone($customerData['phone'] ?? '');
                $this->cinetpay->setCustomerAddress($customerData['address'] ?? '');
                $this->cinetpay->setCustomerCity($customerData['city'] ?? '');
                $this->cinetpay->setCustomerCountry($customerData['country'] ?? '');
                $this->cinetpay->setCustomerState($customerData['state'] ?? '');
                $this->cinetpay->setCustomerZipCode($customerData['zip_code'] ?? '');
            }

            // Création du paiement
            $result = $this->cinetpay->createPayment();

            if ($result['code'] === '201' && !empty($result['data']['payment_url'])) {
                return [
                    'success' => true,
                    'payment_url' => $result['data']['payment_url'],
                    'transaction_id' => $transactionId,
                ];
            }

            $errorMessage = $result['description'] ?? 'Erreur inconnue lors de la création du paiement';
            Log::error('Erreur CinetPay: ' . $errorMessage, $result);
            
            return [
                'success' => false,
                'message' => $errorMessage,
            ];
        } catch (Exception $e) {
            Log::error('Exception CinetPay: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
            
            return [
                'success' => false,
                'message' => 'Une erreur est survenue lors du traitement de votre paiement.',
            ];
        }
    }

    /**
     * Vérifie le statut d'une transaction
     *
     * @param string $transactionId Identifiant de la transaction
     * @return array
     */
    public function checkTransactionStatus(string $transactionId): array
    {
        try {
            $result = $this->cinetpay->getTransactionStatus($transactionId);
            
            if ($result['code'] === '00') {
                return [
                    'success' => true,
                    'status' => $result['data']['status'],
                    'data' => $result['data'],
                ];
            }
            
            return [
                'success' => false,
                'message' => $result['description'] ?? 'Erreur lors de la vérification du statut',
            ];
        } catch (Exception $e) {
            Log::error('Erreur lors de la vérification du statut CinetPay: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Erreur lors de la vérification du statut du paiement',
            ];
        }
    }

    /**
     * Traite la notification de paiement
     *
     * @param array $data Données de la notification
     * @return array
     */
    public function handlePaymentNotification(array $data): array
    {
        try {
            // Vérification de la signature
            if (!$this->verifySignature($data)) {
                Log::warning('Signature CinetPay invalide', $data);
                return [
                    'success' => false,
                    'message' => 'Signature invalide',
                ];
            }

            $transactionId = $data['cpm_trans_id'] ?? null;
            $amount = $data['cpm_amount'] ?? null;
            $status = $data['cpm_result'] ?? null;

            if (!$transactionId || !$amount || !$status) {
                Log::warning('Données de notification CinetPay incomplètes', $data);
                return [
                    'success' => false,
                    'message' => 'Données de notification incomplètes',
                ];
            }

            // Vérification du statut du paiement
            if ($status === '00') {
                return [
                    'success' => true,
                    'transaction_id' => $transactionId,
                    'status' => 'completed',
                    'amount' => $amount / 100, // Conversion en unité standard
                    'data' => $data,
                ];
            }

            return [
                'success' => false,
                'transaction_id' => $transactionId,
                'status' => 'failed',
                'message' => $data['cpm_error_message'] ?? 'Paiement échoué',
                'data' => $data,
            ];
        } catch (Exception $e) {
            Log::error('Erreur lors du traitement de la notification CinetPay: ' . $e->getMessage());
            
            return [
                'success' => false,
                'message' => 'Erreur lors du traitement de la notification de paiement',
            ];
        }
    }

    /**
     * Vérifie la signature de la notification
     *
     * @param array $data Données de la notification
     * @return bool
     */
    protected function verifySignature(array $data): bool
    {
        $signature = $data['signature'] ?? null;
        
        if (!$signature) {
            return false;
        }

        // Récupération des paramètres nécessaires pour la vérification
        $params = [
            'cpm_site_id' => $data['cpm_site_id'] ?? '',
            'cpm_trans_id' => $data['cpm_trans_id'] ?? '',
            'cpm_trans_date' => $data['cpm_trans_date'] ?? '',
            'cpm_amount' => $data['cpm_amount'] ?? '',
            'cpm_currency' => $data['cpm_currency'] ?? '',
            'signature' => $this->apiKey,
        ];

        // Génération de la signature
        $generatedSignature = md5(implode('', $params));
        
        return hash_equals($generatedSignature, $signature);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Le service de paiement
     *
     * @var PaymentService
     */
    protected $paymentService;

    /**
     * Crée une nouvelle instance du contrôleur
     *
     * @param PaymentService $paymentService
     */
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Affiche le formulaire de paiement
     *
     * @param Reservation $booking
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create(Reservation $booking)
    {
        $this->authorize('pay', $booking);
        
        // Vérifier si le paiement a déjà été effectué
        if ($booking->isPaid()) {
            return redirect()->route('bookings.show', $booking)
                ->with('success', 'Cette réservation a déjà été payée.');
        }

        // Récupérer les passerelles de paiement disponibles
        $availableGateways = $this->paymentService->getAvailableGateways();
        
        if (empty($availableGateways)) {
            return redirect()->back()
                ->with('error', 'Aucune passerelle de paiement n\'est disponible pour le moment.');
        }

        // Préparer les données pour la vue
        $gateways = [];
        foreach ($availableGateways as $key => $gateway) {
            $gateways[$key] = [
                'name' => $this->getGatewayDisplayName($key),
                'icon' => $this->getGatewayIcon($key),
                'description' => $this->getGatewayDescription($key),
            ];
        }

        return view('payment', [
            'booking' => $booking,
            'availableGateways' => $gateways,
        ]);
    }

    /**
     * Traite le paiement
     *
     * @param Request $request
     * @param Reservation $booking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Reservation $booking)
    {
        $this->authorize('pay', $booking);

        // Valider la requête
        $validated = $request->validate([
            'gateway' => 'required|string|in:' . implode(',', array_keys($this->paymentService->getAvailableGateways())),
        ]);

        try {
            // Initialiser le paiement avec la passerelle sélectionnée
            $result = $this->paymentService->initializePayment(
                $booking,
                $validated['gateway']
            );

            if ($result['success']) {
                // Rediriger vers la page de paiement de la passerelle
                return redirect()->away($result['payment_url']);
            }

            return back()
                ->with('error', $result['message'] ?? 'Erreur lors de l\'initialisation du paiement')
                ->withInput();
            
        } catch (\Exception $e) {
            Log::error('Erreur lors du traitement du paiement: ' . $e->getMessage());
            
            return back()
                ->with('error', 'Une erreur est survenue lors du traitement de votre paiement : ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Traite le retour après un paiement
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleReturn(Request $request)
    {
        $transactionId = $request->input('transaction_id') 
            ?? $request->input('cpm_trans_id')
            ?? $request->input('reference');
        
        if (!$transactionId) {
            return redirect()->route('bookings.index')
                ->with('error', 'Transaction introuvable.');
        }

        // Récupérer le paiement
        $payment = Payment::where('transaction_id', $transactionId)->firstOrFail();
        $this->authorize('view', $payment);

        // Vérifier le statut du paiement via le service de paiement
        $result = $this->paymentService->checkPaymentStatus($payment);

        if ($result['success'] && $result['status'] === 'completed') {
            // Paiement réussi
            return redirect()
                ->route('bookings.show', $payment->reservation)
                ->with('success', 'Paiement effectué avec succès !');
        }
        
        // Paiement échoué ou en attente
        $errorMessage = $result['message'] ?? 'Le paiement est en attente ou a échoué';
        
        return redirect()
            ->route('bookings.show', $payment->reservation)
            ->with('error', $errorMessage);
    }

    /**
     * Traite la notification de paiement (webhook)
     *
     * @param Request $request
     * @param string $gateway Nom de la passerelle (ex: cinetpay, stripe, etc.)
     * @return \Illuminate\Http\Response
     */
    public function handleNotification(Request $request, string $gateway = 'cinetpay')
    {
        try {
            // Valider la requête
            $validator = Validator::make($request->all(), [
                'transaction_id' => 'required|string',
                'status' => 'required|string',
            ]);

            if ($validator->fails()) {
                Log::error('Notification de paiement invalide', [
                    'errors' => $validator->errors(),
                    'data' => $request->all(),
                ]);
                return response('Données invalides', 400);
            }

            // Récupérer le paiement
            $payment = Payment::where('transaction_id', $request->input('transaction_id'))->first();
            
            if (!$payment) {
                Log::error('Paiement non trouvé pour la notification', [
                    'transaction_id' => $request->input('transaction_id'),
                    'gateway' => $gateway,
                ]);
                return response('Paiement non trouvé', 404);
            }

            // Traiter la notification dans une transaction
            DB::beginTransaction();
            
            try {
                // Mettre à jour le statut du paiement
                $status = $request->input('status');
                
                if (in_array($status, ['completed', 'accepted', 'success'])) {
                    $payment->update([
                        'status' => 'completed',
                        'paid_at' => now(),
                        'payment_details' => array_merge(
                            $payment->payment_details ?? [],
                            ['notification_data' => $request->all()]
                        ),
                    ]);
                    
                    // Mettre à jour le statut de la réservation
                    if ($payment->reservation) {
                        $payment->reservation->update(['status' => 'confirmed']);
                    }
                } else {
                    $payment->update([
                        'status' => 'failed',
                        'payment_details' => array_merge(
                            $payment->payment_details ?? [],
                            [
                                'notification_data' => $request->all(),
                                'failure_reason' => $request->input('message', 'Échec du paiement'),
                            ]
                        ),
                    ]);
                }
                
                DB::commit();
                return response('OK', 200);
                
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Erreur lors du traitement de la notification de paiement: ' . $e->getMessage(), [
                    'payment_id' => $payment->id,
                    'gateway' => $gateway,
                    'exception' => $e,
                ]);
                return response('Erreur de traitement', 500);
            }
            
        } catch (\Exception $e) {
            Log::error('Erreur inattendue lors du traitement de la notification: ' . $e->getMessage(), [
                'gateway' => $gateway,
                'exception' => $e,
            ]);
            return response('Erreur de traitement', 500);
        }
    }

    /**
     * Affiche les détails d'un paiement
     *
     * @param Payment $payment
     * @return \Illuminate\View\View
     */
    public function show(Payment $payment)
    {
        $this->authorize('view', $payment);
        return view('payments.show', compact('payment'));
    }

    /**
     * Traite une demande de remboursement
     *
     * @param Request $request
     * @param Payment $payment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function refund(Request $request, Payment $payment)
    {
        $this->authorize('refund', $payment);
        
        $validated = $request->validate([
            'amount' => 'nullable|numeric|min:0.01|max:' . $payment->getRefundableAmount(),
            'reason' => 'required|string|max:1000',
        ]);
        
        $amount = $validated['amount'] ?? $payment->amount;
        $reason = $validated['reason'];
        
        try {
            // Vérifier si le paiement peut être remboursé
            if (!$payment->canBeRefunded()) {
                throw new \Exception('Ce paiement ne peut pas être remboursé.');
            }
            
            // Effectuer le remboursement via le service de paiement
            $result = $this->paymentService->refundPayment($payment, $amount);
            
            if ($result['success']) {
                // Enregistrer la raison du remboursement
                $payment->update([
                    'refund_reason' => $reason,
                    'refunded_by' => auth()->id(),
                ]);
                
                return redirect()
                    ->route('payments.show', $payment)
                    ->with('success', 'Votre demande de remboursement a été traitée avec succès.');
            }
            
            throw new \Exception($result['message'] ?? 'Le remboursement a échoué.');
                
        } catch (\Exception $e) {
            Log::error('Erreur lors du remboursement: ' . $e->getMessage(), [
                'payment_id' => $payment->id,
                'amount' => $amount,
                'error' => $e->getTraceAsString(),
            ]);
            
            return back()
                ->with('error', 'Une erreur est survenue : ' . $e->getMessage())
                ->withInput();
        }
    }
    
    /**
     * Annule un paiement
     *
     * @param Payment $payment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Payment $payment)
    {
        $this->authorize('cancel', $payment);
        
        try {
            $payment->update(['status' => Payment::STATUS_CANCELLED]);
            
            return redirect()
                ->route('payments.show', $payment)
                ->with('success', 'Le paiement a été annulé avec succès.');
                
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Une erreur est survenue lors de l\'annulation du paiement.');
        }
    }
    
    /**
     * Télécharge le reçu de paiement au format PDF
     *
     * @param Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function downloadReceipt(Payment $payment)
    {
        $this->authorize('view', $payment);
        
        if (!$payment->isPaid() && !$payment->isRefunded()) {
            return back()
                ->with('error', 'Le reçu n\'est disponible que pour les paiements validés ou remboursés.');
        }
        
        try {
            return $payment->generateReceipt();
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Une erreur est survenue lors de la génération du reçu : ' . $e->getMessage());
        }
    }
    
    /**
     * Récupère le nom d'affichage d'une passerelle
     *
     * @param string $gateway
     * @return string
     */
    protected function getGatewayDisplayName(string $gateway): string
    {
        $names = [
            'cinetpay' => 'CinetPay',
            'stripe' => 'Stripe',
            'paypal' => 'PayPal',
        ];
        
        return $names[$gateway] ?? ucfirst($gateway);
    }
    
    /**
     * Récupère l'icône d'une passerelle
     *
     * @param string $gateway
     * @return string
     */
    protected function getGatewayIcon(string $gateway): string
    {
        $icons = [
            'cinetpay' => 'fa-mobile-alt',
            'stripe' => 'fa-credit-card',
            'paypal' => 'fa-cc-paypal',
        ];
        
        return $icons[$gateway] ?? 'fa-credit-card';
    }
    
    /**
     * Récupère la description d'une passerelle
     *
     * @param string $gateway
     * @return string
     */
    protected function getGatewayDescription(string $gateway): string
    {
        $descriptions = [
            'cinetpay' => 'Paiement sécurisé par mobile money et cartes bancaires',
            'stripe' => 'Paiement sécurisé par carte bancaire',
            'paypal' => 'Paiement sécurisé avec votre compte PayPal',
        ];
        
        return $descriptions[$gateway] ?? 'Paiement sécurisé';
    }
}

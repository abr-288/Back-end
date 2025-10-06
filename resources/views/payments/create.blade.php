@extends('layouts.app')

@section('title', 'Paiement sécurisé')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .payment-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .payment-logo {
        height: 30px;
        width: auto;
        max-width: 150px;
    }

    .payment-icon img {
        transition: transform 0.3s ease;
        max-height: 80px;
    }

    .accepted-cards {
        margin: 20px 0;
    }

    .card-icon {
        height: 30px;
        margin: 0 5px;
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .card-icon:hover {
        opacity: 1;
        transform: translateY(-3px);
    }

    .security-badge {
        display: inline-flex;
        align-items: center;
        background: #e9f7ef;
        color: #28a745;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }
    
    .payment-method {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .payment-method:hover {
        border-color: #4e73df;
        background-color: #f8f9fa;
    }
    
    .payment-method.active {
        border-color: #4e73df;
        background-color: #f0f4ff;
    }
    
    .payment-method input[type="radio"] {
        margin-right: 10px;
    }
    
    .payment-method-label {
        display: flex;
        align-items: center;
        margin: 0;
        cursor: pointer;
        width: 100%;
    }
    
    .payment-method-logo {
        height: 30px;
        margin-right: 15px;
    }
    
    .btn-pay {
        font-size: 1.1rem;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 8px;
    }
    
    .order-summary {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
    }
    
    .payment-gateway-logo {
        max-height: 40px;
        max-width: 120px;
        margin: 0 auto;
        display: block;
    }
    
    .reservation-details {
        border-left: 3px solid #4e73df;
        padding-left: 15px;
        margin-bottom: 20px;
    }
    
    .reservation-details h5 {
        color: #4e73df;
        margin-bottom: 10px;
    }
    
    .reservation-details p {
        margin-bottom: 5px;
    }
    
    .payment-steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        position: relative;
    }
    
    .payment-steps::before {
        content: '';
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
        height: 2px;
        background-color: #e0e0e0;
        z-index: 1;
    }
    
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 2;
    }
    
    .step-number {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #e0e0e0;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    .step.active .step-number {
        background-color: #4e73df;
    }
    
    .step.completed .step-number {
        background-color: #1cc88a;
    }
    
    .step-label {
        font-size: 0.85rem;
        color: #6c757d;
        text-align: center;
    }
    
    .step.active .step-label {
        color: #4e73df;
        font-weight: 600;
    }
    
    .step.completed .step-label {
        color: #1cc88a;
    }
    
    @media (max-width: 768px) {
        .payment-steps {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .step {
            flex-direction: row;
            margin-bottom: 15px;
            width: 100%;
        }
        
        .step-number {
            margin-right: 10px;
            margin-bottom: 0;
        }
        
        .step-label {
            text-align: left;
        }
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex align-items-center mb-4">
                <h1 class="h3 mb-0">Paiement sécurisé</h1>
                <div class="ms-auto">
                    <span class="badge bg-success">
                        <i class="fas fa-lock me-1"></i> Sécurisé
                    </span>
                </div>
            </div>
            
            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <!-- Étapes du paiement -->
            <div class="payment-steps mb-5">
                <div class="step active">
                    <div class="step-number">1</div>
                    <div class="step-label">Méthode de paiement</div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-label">Vérification</div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-label">Confirmation</div>
                </div>
            </div>
            
            <div class="row">
                <!-- Formulaire de paiement -->
                <div class="col-lg-8">
                    <div class="card payment-card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Méthode de paiement</h4>
                        </div>
                        <div class="card-body">
                            @if(count($availableGateways) === 0)
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    Aucune méthode de paiement n'est disponible pour le moment. Veuillez réessayer ultérieurement.
                                </div>
                            @else
                                <form id="paymentForm" method="POST" action="{{ route('payments.store', $reservation) }}">
                                    @csrf
                                    
                                    <div class="mb-4">
                                        <h5 class="mb-3">Sélectionnez votre moyen de paiement</h5>
                                        
                                        @foreach($availableGateways as $gateway => $gatewayName)
                                            <div class="payment-method mb-3 {{ $loop->first ? 'active' : '' }}">
                                                <label class="payment-method-label">
                                                    <input type="radio" 
                                                           name="gateway" 
                                                           value="{{ $gateway }}" 
                                                           class="form-check-input" 
                                                           {{ $loop->first ? 'checked' : '' }}>
                                                    
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('images/payment/' . $gateway . '.png') }}" 
                                                             alt="{{ $gatewayName }}" 
                                                             class="payment-gateway-logo me-3"
                                                             onerror="this.src='{{ asset('images/payment/default.png') }}'">
                                                        <span class="fw-medium">{{ $gatewayName }}</span>
                                                    </div>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-lg btn-pay">
                                            <i class="fas fa-credit-card me-2"></i>
                                            Payer maintenant {{ number_format($reservation->total_amount, 0, ',', ' ') }} FCFA
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Sécurité des paiements -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt text-primary fs-1 me-3"></i>
                                <div>
                                    <h5 class="mb-1">Paiement sécurisé</h5>
                                    <p class="text-muted mb-0">Toutes vos informations sont cryptées et sécurisées.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Récapitulatif de la commande -->
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Récapitulatif de la commande</h5>
                        </div>
                        <div class="card-body">
                            <div class="reservation-details mb-4">
                                <h5>Détails de la réservation</h5>
                                <p class="mb-1"><strong>Référence :</strong> #{{ $reservation->reference ?? $reservation->id }}</p>
                                <p class="mb-1"><strong>Date :</strong> {{ $reservation->created_at->format('d/m/Y') }}</p>
                                <p class="mb-0"><strong>Statut :</strong> 
                                    <span class="badge bg-{{ $reservation->status === 'confirmed' ? 'success' : 'warning' }}">
                                        {{ ucfirst($reservation->status) }}
                                    </span>
                                </p>
                            </div>
                            
                            <h6 class="mb-3">Détails du séjour</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Arrivée</td>
                                            <td class="text-end">{{ $reservation->check_in->format('d/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Départ</td>
                                            <td class="text-end">{{ $reservation->check_out->format('d/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Durée</td>
                                            <td class="text-end">{{ $reservation->check_out->diffInDays($reservation->check_in) }} nuits</td>
                                        </tr>
                                        <tr>
                                            <td>Chambres</td>
                                            <td class="text-end">{{ $reservation->rooms_count ?? 1 }}</td>
                                        </tr>
                                        <tr class="table-light">
                                            <td><strong>Total à payer</strong></td>
                                            <td class="text-end"><strong>{{ number_format($reservation->total_amount, 0, ',', ' ') }} FCFA</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="alert alert-info mt-3">
                                <i class="fas fa-info-circle me-2"></i>
                                Le montant total inclut toutes les taxes et frais applicables.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Moyens de paiement acceptés -->
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="text-muted mb-3">Moyens de paiement acceptés :</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <img src="{{ asset('images/payment/visa.png') }}" alt="Visa" class="img-fluid" style="height: 24px;" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                                <img src="{{ asset('images/payment/mastercard.png') }}" alt="Mastercard" class="img-fluid" style="height: 24px;" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                                <img src="{{ asset('images/payment/orange-money.png') }}" alt="Orange Money" class="img-fluid" style="height: 24px;" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                                <img src="{{ asset('images/payment/mtn-momo.png') }}" alt="MTN Mobile Money" class="img-fluid" style="height: 24px;" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                                <img src="{{ asset('images/payment/wave.png') }}" alt="Wave" class="img-fluid" style="height: 24px;" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                            </div>
                            
                            <div class="security-badge mt-4">
                                <i class="fas fa-lock me-2"></i>
                                Paiement 100% sécurisé - Vos données sont cryptées
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion du chargement lors de la soumission du formulaire
        const paymentForm = document.getElementById('paymentForm');
        if (paymentForm) {
            paymentForm.addEventListener('submit', function() {
                const submitButton = this.querySelector('button[type="submit"]');
                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = `
                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                        Traitement en cours...
                    `;
                }
            });
        }
        
        // Gestion de la sélection de la méthode de paiement
        const paymentMethods = document.querySelectorAll('.payment-method');
        paymentMethods.forEach(method => {
            const radio = method.querySelector('input[type="radio"]');
            
            // Clic sur toute la zone de la méthode de paiement
            method.addEventListener('click', function() {
                if (radio) {
                    radio.checked = true;
                    paymentMethods.forEach(m => m.classList.remove('active'));
                    this.classList.add('active');
                }
            });
            
            // Clic sur le label ou l'input radio
            if (radio) {
                radio.addEventListener('click', function(e) {
                    e.stopPropagation();
                    paymentMethods.forEach(m => m.classList.remove('active'));
                    method.classList.add('active');
                });
            }
        });
    });
</script>
@endpush

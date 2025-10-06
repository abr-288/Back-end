1@extends('layouts.app')

@section('title', 'Paiement')

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de la sélection de la méthode de paiement
        const paymentMethods = document.querySelectorAll('.payment-method');
        const selectedGatewayInput = document.getElementById('selectedGateway');
        
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                // Retirer la classe active de toutes les méthodes
                paymentMethods.forEach(m => m.classList.remove('active'));
                
                // Ajouter la classe active à la méthode sélectionnée
                this.classList.add('active');
                
                // Mettre à jour le champ caché avec la passerelle sélectionnée
                const gateway = this.getAttribute('data-gateway');
                selectedGatewayInput.value = gateway;
                
                // Vous pouvez ajouter des mises à jour d'interface spécifiques à la passerelle ici
                console.log('Passerelle sélectionnée :', gateway);
            });
        });
        
        // Gestion de la soumission du formulaire
        const paymentForm = document.getElementById('paymentForm');
        if (paymentForm) {
            paymentForm.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Traitement en cours...';
                }
            });
        }
    });
</script>
@endpush

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
    
    .order-summary h5 {
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    
    .order-summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    
    .order-total {
        font-size: 1.2rem;
        font-weight: 600;
        color: #4e73df;
        border-top: 1px solid #e0e0e0;
        padding-top: 10px;
        margin-top: 15px;
    }

    .payment-details {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        margin: 15px 0;
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
        margin: 15px 0;
    }

    .btn-pay-now {
        background: linear-gradient(45deg, #4e54c8, #8f94fb);
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }

    .btn-pay-now:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .payment-methods {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 15px;
        margin: 15px 0;
    }

    .payment-method {
        display: flex;
        align-items: center;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .payment-method:hover {
        background-color: #f8f9fa;
    }

    .payment-method.active {
        border: 2px solid #4e54c8;
        background-color: #f0f2ff;
    }

    .payment-method i {
        font-size: 24px;
        margin-right: 15px;
        color: #4e54c8;
    }
</style>
@endpush

@section('content')	
@component('components.breadcrumb')
    @slot('title')
        Paiement sécurisé
    @endslot
    @slot('item1')
        Accueil
    @endslot
    @slot('item2')
        Paiement
    @endslot
@endcomponent

<div class="content">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="card user-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header">
                        <div class="profile-content rounded-pill">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ auth()->user()->profile_photo_url ?? URL::asset('build/img/users/user-01.jpg') }}" alt="image" class="img-fluid avatar avatar-lg rounded-circle flex-shrink-0 me-1">
                                    <div>
                                        <h6 class="fs-16">{{ auth()->user()->name ?? 'Utilisateur' }}</h6>
                                        <span class="fs-14 text-gray-6">Membre depuis {{ auth()->user()->created_at?->format('M Y') ?? '2025' }}</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{url('profile-settings')}}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li>
                                <span class="fs-14 text-gray-3 fw-medium mb-2">Menu principal</span>
                            </li>
                            <li>
                                <a href="{{url('dashboard')}}" class="d-flex align-items-center">
                                    <i class="fas fa-tachometer-alt me-2"></i> Tableau de bord
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="d-block"><i class="isax isax-calendar-tick5"></i><span>My Bookings</span><span class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="{{url('customer-flight-booking')}}" class="fs-14 d-inline-flex align-items-center">Flights</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-hotel-booking')}}" class="fs-14 d-inline-flex align-items-center">Hotels</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-car-booking')}}" class="fs-14 d-inline-flex align-items-center">Cars</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-cruise-booking')}}" class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-tour-booking')}}" class="fs-14 d-inline-flex align-items-center">Tour</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{url('review')}}" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5"></i> My Reviews
                                </a>
                            </li>
                            <li>
                                <div class="message-content">
                                    <a href="{{url('chat')}}" class="d-flex align-items-center">
                                        <i class="isax isax-message-square5"></i> Messages
                                    </a>
                                    <span class="msg-count rounded-circle">02</span>
                                </div>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('wishlist')}}" class="d-flex align-items-center">
                                    <i class="isax isax-heart5"></i> Wishlist
                                </a>
                            </li>
                            <li>
                                <span class="fs-14 text-gray-3 fw-medium mb-2">Finance</span>
                            </li>
                            <li>
                                <a href="{{url('wallet')}}" class="d-flex align-items-center">
                                    <i class="isax isax-wallet-add-15"></i> Wallet
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('payment')}}" class="d-flex align-items-center active">
                                    <i class="isax isax-money-recive5"></i> Payments
                                </a>
                            </li>
                            <li>
                                <span class="fs-14 text-gray-3 fw-medium mb-2">Account</span>
                            </li>
                            <li>
                                <a href="{{url('my-profile')}}" class="d-flex align-items-center">
                                    <i class="isax isax-profile-tick5"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <div class="message-content">
                                    <a href="{{url('notification')}}" class="d-flex align-items-center">
                                        <i class="isax isax-notification-bing5"></i> Notifications
                                    </a>
                                    <span class="msg-count bg-purple rounded-circle">05</span>
                                </div>
                            </li>
                            <li>
                                <a href="{{url('profile-settings')}}" class="d-flex align-items-center">
                                    <i class="isax isax-setting-25"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="d-flex align-items-center pb-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt me-2"></i> Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- Paiement -->
            <div class="col-xl-9 col-lg-8">
                <div class="card payment-card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Paiement sécurisé</h4>
                        @if(!empty($availableGateways))
                            <div class="d-flex align-items-center">
                                @foreach($availableGateways as $gateway => $name)
                                    <img src="{{ asset('images/payment/' . strtolower($gateway) . '-logo.png') }}" 
                                         alt="{{ $name }}" 
                                         class="gateway-logo ms-2" 
                                         style="height: 30px;"
                                         onerror="this.src='https://via.placeholder.com/120x40?text='+encodeURIComponent('{{ $name }}')">
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="card-body text-center py-4">
                        @if(empty($availableGateways))
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Aucune passerelle de paiement n'est actuellement disponible. Veuillez réessayer ultérieurement ou contacter le support.
                            </div>
                        @endif
                        
                        <div class="payment-loading">
                            <div class="payment-icon mb-3">
                                <img src="{{ asset('images/payment/credit-card.png') }}" alt="Paiement" class="img-fluid" onerror="this.src='https://cdn-icons-png.flaticon.com/512/196/196578.png';">
                            </div>
                            
                            <h4>Finalisez votre paiement</h4>
                            <p class="text-muted">Sélectionnez votre méthode de paiement préférée</p>
                            
                            <div class="security-badge">
                                <i class="fas fa-lock me-2"></i>Paiement 100% sécurisé
                            </div>

                            <!-- Détails de la commande -->
                            <div class="payment-details text-start">
                                <h6 class="mb-3">Résumé de la commande</h6>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Référence :</span>
                                    <strong>#{{ $booking->id ?? 'N/A' }}</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Date :</span>
                                    <strong>{{ now()->format('d/m/Y') }}</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Montant total :</span>
                                    <strong class="text-primary">{{ number_format($booking->total_amount ?? 0, 0, ',', ' ') }} FCFA</strong>
                                </div>
                            </div>

                            <!-- Méthodes de paiement -->
                            @if(!empty($availableGateways))
                            <div class="payment-methods">
                                <h6 class="mb-3">Méthode de paiement</h6>
                                
                                @foreach($availableGateways as $gateway => $name)
                                <div class="payment-method {{ $loop.first ? 'active' : '' }}" data-gateway="{{ strtolower($gateway) }}">
                                    <i class="fas fa-{{ strtolower($gateway) === 'cinetpay' ? 'mobile-alt' : 'credit-card' }}"></i>
                                    <div>
                                        <h6 class="mb-0">{{ $name }}</h6>
                                        <small class="text-muted">
                                            {{ strtolower($gateway) === 'cinetpay' ? 'Mobile Money et Cartes' : 'Paiement sécurisé' }}
                                        </small>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif

                            <!-- Bouton de paiement -->
                            <form id="paymentForm" action="{{ route('payments.initiate', $booking->id ?? 0) }}" method="POST" class="mt-4">
                                @csrf
                                <input type="hidden" name="gateway" id="selectedGateway" value="{{ array_key_first($availableGateways ?? []) }}">
                                <button type="submit" class="btn btn-primary btn-pay-now" {{ empty($availableGateways) ? 'disabled' : '' }}>
                                    <i class="fas fa-lock me-2"></i>Payer maintenant ({{ $booking->total_amount ?? 0 }} FCFA)
                                </button>
                            </form>

                            <!-- Moyens de paiement acceptés -->
                            <div class="accepted-cards">
                                <small class="d-block text-muted mb-2">Moyens de paiement acceptés :</small>
                                <img src="https://cdn-icons-png.flaticon.com/512/196/196566.png" alt="Visa" class="card-icon" title="Visa">
                                <img src="https://cdn-icons-png.flaticon.com/512/196/196578.png" alt="Mastercard" class="card-icon" title="Mastercard">
                                <img src="https://cdn-icons-png.flaticon.com/512/888/888870.png" alt="Orange Money" class="card-icon" title="Orange Money">
                                <img src="https://cdn-icons-png.flaticon.com/512/888/888873.png" alt="MTN Mobile Money" class="card-icon" title="MTN Mobile Money">
                            </div>

                            <div class="mt-3">
                                <small class="text-muted">En cliquant sur "Payer maintenant", vous acceptez nos <a href="#" class="text-primary">conditions générales</a></small>
                            </div>
                        </div>
                    </div>
                                    <span class="icon-addon">
                                        <i class="isax isax-search-normal-1 fs-14"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-icon-end position-relative">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-calendar-edit"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Payment</th>
                                        <th>Service</th>
                                        <th>Payment Type</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-1245</a></td>
                                        <td class="text-gray-9 fw-medium">Hotel Atheena Plaza</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>15 May 2025, 10:00 AM</td>
                                        <td>$11,569</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3215</a></td>
                                        <td class="text-gray-9 fw-medium">Antonov-12</td>
                                        <td>Flight</td>
                                        <td>Paypal</td>
                                        <td>20 May 2025, 10:00 AM</td>
                                        <td>$12,543</td>
                                        <td>
                                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4581</a></td>
                                        <td class="text-gray-9 fw-medium">The Queen of Ocean</td>
                                        <td>Cruise</td>
                                        <td>Stripe</td>
                                        <td>27 May 2025, 10:00 AM</td>
                                        <td>$14,697</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6545</a></td>
                                        <td class="text-gray-9 fw-medium">Ford Mustang</td>
                                        <td>Car</td>
                                        <td>Card</td>
                                        <td>12 Jun 2025, 10:00 AM</td>
                                        <td>$10,528</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-5769</a></td>
                                        <td class="text-gray-9 fw-medium">PlayPalooza Part</td>
                                        <td>Tour</td>
                                        <td>Stripe</td>
                                        <td>18 Jun 2025, 10:00 AM</td>
                                        <td>$12,297</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4742</a></td>
                                        <td class="text-gray-9 fw-medium">The Urban Retreat</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>22 Jun 2025, 10:00 AM</td>
                                        <td>$18,349</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-9364</a></td>
                                        <td class="text-gray-9 fw-medium">Foodie Fiesta</td>
                                        <td>Tour</td>
                                        <td>Stripe</td>
                                        <td>16 Jul 2025, 10:00 AM</td>
                                        <td>$17,875</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6184</a></td>
                                        <td class="text-gray-9 fw-medium">Nimbus 345</td>
                                        <td>Flight</td>
                                        <td>Paypal</td>
                                        <td>25 Jul 2025, 10:00 AM</td>
                                        <td>$15,175</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-8207</a></td>
                                        <td class="text-gray-9 fw-medium">The Grand Horizon</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>14 Jul 2025, 10:00 AM</td>
                                        <td>$12,766</td>
                                        <td>
                                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3854</a></td>
                                        <td class="text-gray-9 fw-medium"> Mercedes-benz </td>
                                        <td>Car</td>
                                        <td>Paypal</td>
                                        <td>28 Aug 2025, 10:00 AM</td>
                                        <td>$13,496</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <div class="value d-flex align-items-center">
                        <span>Show</span>
                        <select class="">
                            <option>5</option>
                            <option selected>10</option>
                            <option>20</option>
                        </select>
                        <span>of 40 Results</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                        <nav aria-label="Page navigation">
                            <ul class="paginations d-flex justify-content-center align-items-center">
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">1</a></li>
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">2</a></li>
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">3</a></li>
                                <li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">5</a></li>
                            </ul>
                        </nav>
                        <a href="javascript:void(0);"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- /Payments -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@component('components.modal-popup')
@endcomponent
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Confirmation de réservation #{{ $reservation->id }}</h4>
                        <span class="badge bg-{{ 
                            $reservation->status === 'confirmed' ? 'success' : 
                            ($reservation->status === 'cancelled' ? 'danger' : 'warning') 
                        }} text-uppercase">
                            {{ $reservation->status === 'confirmed' ? 'Confirmée' : 
                              ($reservation->status === 'cancelled' ? 'Annulée' : 'En attente') }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-success">
                        <h5 class="alert-heading">Merci pour votre réservation !</h5>
                        <p class="mb-0">Votre réservation a été enregistrée avec succès. Un email de confirmation a été envoyé à <strong>{{ auth()->user()->email }}</strong>.</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="border-bottom pb-2 mb-3">Détails de la réservation</h5>
                            <p class="mb-1"><strong>Référence :</strong> {{ $reservation->reference ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Date de réservation :</strong> {{ $reservation->created_at->format('d/m/Y H:i') }}</p>
                            <p class="mb-1"><strong>Dates de séjour :</strong> 
                                {{ $reservation->check_in->format('d/m/Y') }} - {{ $reservation->check_out->format('d/m/Y') }}
                                ({{ $reservation->check_in->diffInDays($reservation->check_out) }} nuits)
                            </p>
                            <p class="mb-1"><strong>Voyageurs :</strong> 
                                {{ $reservation->adults }} {{ Str::plural('adulte', $reservation->adults) }}
                                @if($reservation->children > 0)
                                    , {{ $reservation->children }} {{ Str::plural('enfant', $reservation->children) }}
                                @endif
                            </p>
                            @if($reservation->special_requests)
                                <p class="mb-0"><strong>Demandes spéciales :</strong> {{ $reservation->special_requests }}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h5 class="border-bottom pb-2 mb-3">Détails de l'hébergement</h5>
                            <h6>{{ $reservation->reservable->name }}</h6>
                            <p class="text-muted mb-1">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                {{ $reservation->reservable->address }}, {{ $reservation->reservable->city }}, {{ $reservation->reservable->country }}
                            </p>
                            <p class="mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $reservation->reservable->star_rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </p>
                            <p class="mb-1"><i class="far fa-calendar-check me-2"></i> Arrivée : {{ $reservation->check_in->format('d/m/Y') }} à partir de 14h00</p>
                            <p class="mb-0"><i class="far fa-calendar-times me-2"></i> Départ : {{ $reservation->check_out->format('d/m/Y') }} avant 12h00</p>
                        </div>
                    </div>

                    @if($reservation->rooms->count() > 0)
                        <h5 class="border-bottom pb-2 mb-3">Chambres réservées</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Type de chambre</th>
                                        <th class="text-end">Prix par nuit</th>
                                        <th class="text-center">Nuits</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservation->rooms as $room)
                                        <tr>
                                            <td>
                                                <strong>{{ $room->roomType->name }}</strong><br>
                                                <small class="text-muted">
                                                    {{ $room->max_occupancy }} {{ Str::plural('personne', $room->max_occupancy) }}, 
                                                    {{ $room->bed_type }}
                                                </small>
                                            </td>
                                            <td class="text-end">{{ number_format($room->pivot->price_per_night, 0, ',', ' ') }} FCFA</td>
                                            <td class="text-center">{{ $reservation->check_in->diffInDays($reservation->check_out) }}</td>
                                            <td class="text-end">
                                                {{ number_format($room->pivot->price_per_night * $reservation->check_in->diffInDays($reservation->check_out), 0, ',', ' ') }} FCFA
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th colspan="3" class="text-end">Total séjour :</th>
                                        <th class="text-end">{{ number_format($reservation->total_amount, 0, ',', ' ') }} FCFA</th>
                                    </tr>
                                    @if($reservation->payments->isNotEmpty())
                                        @php
                                            $totalPaid = $reservation->payments->sum('amount');
                                            $remaining = $reservation->total_amount - $totalPaid;
                                        @endphp
                                        <tr>
                                            <th colspan="3" class="text-end">Montant payé :</th>
                                            <th class="text-end text-success">- {{ number_format($totalPaid, 0, ',', ' ') }} FCFA</th>
                                        </tr>
                                        @if($remaining > 0)
                                            <tr>
                                                <th colspan="3" class="text-end">Reste à payer :</th>
                                                <th class="text-end text-danger">{{ number_format($remaining, 0, ',', ' ') }} FCFA</th>
                                            </tr>
                                        @endif
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                    @endif

                    @if($reservation->payments->isNotEmpty())
                        <h5 class="mt-4 border-bottom pb-2 mb-3">Paiements</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Référence</th>
                                        <th>Méthode</th>
                                        <th class="text-end">Montant</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservation->payments as $payment)
                                        <tr>
                                            <td>{{ $payment->created_at->format('d/m/Y H:i') }}</td>
                                            <td>{{ $payment->transaction_id }}</td>
                                            <td>{{ $payment->payment_method_label }}</td>
                                            <td class="text-end">{{ number_format($payment->amount, 0, ',', ' ') }} FCFA</td>
                                            <td>
                                                <span class="badge bg-{{ 
                                                    $payment->status === 'completed' ? 'success' : 
                                                    ($payment->status === 'failed' ? 'danger' : 'warning') 
                                                }}">
                                                    {{ $payment->status_label }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                        </a>
                        
                        @if($reservation->status === 'pending' || $reservation->status === 'confirmed')
                            @if($reservation->canBeCancelled())
                                <form action="{{ route('reservations.cancel', $reservation) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" 
                                            onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">
                                        <i class="fas fa-times me-2"></i>Annuler la réservation
                                    </button>
                                </form>
                            @endif
                            
                            @if($reservation->payments->isEmpty() || $reservation->payments->sum('amount') < $reservation->total_amount)
                                <a href="{{ route('payments.create', $reservation) }}" class="btn btn-primary">
                                    <i class="fas fa-credit-card me-2"></i>Payer maintenant
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Informations importantes</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <h6><i class="fas fa-info-circle me-2"></i>Votre réservation est confirmée</h6>
                        <p class="mb-0">
                            Nous avons bien reçu votre réservation. Vous recevrez un email de confirmation avec tous les détails de votre séjour.
                            N'hésitez pas à nous contacter si vous avez des questions ou des demandes particulières.
                        </p>
                    </div>
                    
                    <h6 class="mt-4">Modalités d'annulation :</h6>
                    <ul class="small">
                        <li>Annulation gratuite jusqu'à 48h avant la date d'arrivée</li>
                        <li>En cas d'annulation tardive ou de non-présentation, la première nuit vous sera facturée</li>
                        <li>Les demandes d'annulation doivent être effectuées par écrit</li>
                    </ul>
                    
                    <div class="mt-3">
                        <h6>Besoin d'aide ?</h6>
                        <p class="mb-1">
                            <i class="fas fa-phone-alt me-2"></i>+225 XX XX XX XX
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-envelope me-2"></i>contact@monvoyage.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

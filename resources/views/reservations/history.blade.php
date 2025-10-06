@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Mes réservations</h4>
                        <a href="{{ route('home') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-left me-1"></i> Retour
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($reservations->isEmpty())
                        <div class="text-center py-5">
                            <div class="mb-4">
                                <i class="fas fa-calendar-times fa-4x text-muted"></i>
                            </div>
                            <h5 class="text-muted">Aucune réservation trouvée</h5>
                            <p class="text-muted">Vous n'avez pas encore effectué de réservation.</p>
                            <a href="{{ route('hotels.index') }}" class="btn btn-primary mt-3">
                                <i class="fas fa-hotel me-2"></i>Voir nos hôtels
                            </a>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Référence</th>
                                        <th>Hébergement</th>
                                        <th>Dates</th>
                                        <th class="text-end">Montant</th>
                                        <th>Statut</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td>
                                                <strong>#{{ $reservation->reference ?? $reservation->id }}</strong>
                                                <div class="small text-muted">
                                                    {{ $reservation->created_at->format('d/m/Y') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @if($reservation->reservable->images->isNotEmpty())
                                                        <img src="{{ Storage::url($reservation->reservable->images->first()->path) }}" 
                                                             alt="{{ $reservation->reservable->name }}" 
                                                             class="img-thumbnail me-3" style="width: 80px; height: 60px; object-fit: cover;">
                                                    @endif
                                                    <div>
                                                        <h6 class="mb-1">{{ $reservation->reservable->name }}</h6>
                                                        <p class="small text-muted mb-0">
                                                            <i class="fas fa-map-marker-alt me-1"></i>
                                                            {{ $reservation->reservable->city }}, {{ $reservation->reservable->country }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span>{{ $reservation->check_in->format('d/m/Y') }}</span>
                                                    <span class="small text-muted">au</span>
                                                    <span>{{ $reservation->check_out->format('d/m/Y') }}</span>
                                                    <span class="badge bg-light text-dark mt-1">
                                                        {{ $reservation->check_in->diffInDays($reservation->check_out) }} nuits
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <strong>{{ number_format($reservation->total_amount, 0, ',', ' ') }} FCFA</strong>
                                                @php
                                                    $totalPaid = $reservation->payments->sum('amount');
                                                    $remaining = $reservation->total_amount - $totalPaid;
                                                @endphp
                                                @if($remaining > 0)
                                                    <div class="small text-danger">
                                                        Reste: {{ number_format($remaining, 0, ',', ' ') }} FCFA
                                                    </div>
                                                @else
                                                    <div class="small text-success">
                                                        Payé
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ 
                                                    $reservation->status === 'confirmed' ? 'success' : 
                                                    ($reservation->status === 'cancelled' ? 'danger' : 'warning') 
                                                }}">
                                                    {{ $reservation->status === 'confirmed' ? 'Confirmée' : 
                                                      ($reservation->status === 'cancelled' ? 'Annulée' : 'En attente') }}
                                                </span>
                                                @if($reservation->status === 'completed')
                                                    <div class="small text-muted mt-1">Séjour terminé</div>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ route('reservations.show', $reservation) }}" 
                                                       class="btn btn-outline-primary" 
                                                       title="Voir les détails">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    @if($reservation->canBeCancelled())
                                                        <button type="button" 
                                                                class="btn btn-outline-danger" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#cancelModal{{ $reservation->id }}"
                                                                title="Annuler la réservation">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    @endif
                                                    
                                                    @if(($reservation->status === 'pending' || $reservation->status === 'confirmed') && 
                                                        ($reservation->payments->isEmpty() || $remaining > 0))
                                                        <a href="{{ route('payments.create', $reservation) }}" 
                                                           class="btn btn-primary"
                                                           title="Payer">
                                                            <i class="fas fa-credit-card me-1"></i> Payer
                                                        </a>
                                                    @endif
                                                </div>
                                                
                                                <!-- Modal d'annulation -->
                                                <div class="modal fade" id="cancelModal{{ $reservation->id }}" tabindex="-1" 
                                                     aria-labelledby="cancelModalLabel{{ $reservation->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="cancelModalLabel{{ $reservation->id }}">
                                                                    Annuler la réservation #{{ $reservation->reference ?? $reservation->id }}
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('reservations.cancel', $reservation) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-body">
                                                                    <p>Êtes-vous sûr de vouloir annuler cette réservation ?</p>
                                                                    <div class="mb-3
                                                                    <label for="cancellation_reason" class="form-label">Raison de l'annulation (optionnel) :</label>
                                                                    <textarea class="form-control" id="cancellation_reason" name="cancellation_reason" rows="3"></textarea>
                                                                </div>
                                                                <div class="alert alert-warning">
                                                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                                                    @if($reservation->check_in->diffInDays(now()) <= 2)
                                                                        Une annulation à moins de 48h de la date d'arrivée peut entraîner des frais d'annulation.
                                                                    @else
                                                                        Vous pouvez annuler gratuitement jusqu'à 48h avant la date d'arrivée.
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-danger">Confirmer l'annulation</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        {{ $reservations->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
    
    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }
    
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.2rem;
    }
</style>
@endpush

@push('scripts')
<script>
    // Activer les tooltips Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endpush
@endsection

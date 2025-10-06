@extends('layouts.app')

@section('title', 'Détails du paiement')

@section('content')
@push('styles')
<style>
    .payment-details {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .payment-status {
        display: inline-block;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
    }
    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }
    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }
    .status-failed {
        background-color: #f8d7da;
        color: #721c24;
    }
    .payment-info {
        margin-top: 30px;
    }
    .info-item {
        display: flex;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    .info-label {
        font-weight: 600;
        width: 200px;
        color: #555;
    }
    .info-value {
        flex: 1;
    }
    .back-btn {
        margin-top: 20px;
    }
</style>
@endpush
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="payment-details">
                <h2 class="mb-4">Détails du paiement</h2>
                
                @php
                    $statusClass = [
                        'pending' => 'status-pending',
                        'completed' => 'status-completed',
                        'failed' => 'status-failed',
                        'refunded' => 'status-pending',
                        'cancelled' => 'status-failed',
                    ][$payment->status] ?? 'status-pending';
                @endphp
                
                <div class="payment-status {{ $statusClass }}">
                    {{ $payment->getStatuses()[$payment->status] ?? $payment->status }}
                </div>
                
                <div class="payment-info">
                    <div class="info-item">
                        <div class="info-label">Référence :</div>
                        <div class="info-value">
                            {{ $payment->transaction_id }}
                            @if(isset($payment->payment_details['payment_token']))
                                <small class="text-muted d-block">Token: {{ $payment->payment_details['payment_token'] }}</small>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Date :</div>
                        <div class="info-value">{{ $payment->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Montant :</div>
                        <div class="info-value font-weight-bold">{{ number_format($payment->amount, 0, ',', ' ') }} FCFA</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Méthode de paiement :</div>
                        <div class="info-value">
                            @if(isset($payment->payment_details['gateway']))
                                {{ ucfirst($payment->payment_details['gateway']) }} ({{ $payment->payment_method }})
                            @else
                                {{ $payment->payment_method }}
                            @endif
                        </div>
                    </div>
                    
                    @if($payment->paid_at)
                    <div class="info-item">
                        <div class="info-label">Date de paiement :</div>
                        <div class="info-value">{{ $payment->paid_at->format('d/m/Y H:i') }}</div>
                    </div>
                    @endif
                    
                    @if($payment->failure_reason)
                    <div class="info-item">
                        <div class="info-label">Raison de l'échec :</div>
                        <div class="info-value text-danger">{{ $payment->failure_reason }}</div>
                    </div>
                    @endif
                </div>
                
                <div class="mt-5">
                    <h5>Détails de la réservation</h5>
                    <div class="info-item">
                        <div class="info-label">Référence :</div>
                        <div class="info-value">#{{ $payment->reservation->id }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Date de début :</div>
                        <div class="info-value">{{ $payment->reservation->start_date->format('d/m/Y') }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Date de fin :</div>
                        <div class="info-value">{{ $payment->reservation->end_date->format('d/m/Y') }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Statut :</div>
                        <div class="info-value">{{ $payment->reservation->formatted_status }}</div>
                    </div>
                </div>
                
                @if($payment->status === 'refunded' || $payment->status === 'partially_refunded')
                <div class="mt-4">
                    <h5>Détails du remboursement</h5>
                    <div class="info-item">
                        <div class="info-label">Montant total remboursé :</div>
                        <div class="info-value font-weight-bold">{{ number_format($payment->getRefundedAmount(), 0, ',', ' ') }} FCFA</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Montant restant remboursable :</div>
                        <div class="info-value">{{ number_format($payment->getRefundableAmount(), 0, ',', ' ') }} FCFA</div>
                    </div>
                    @if($payment->refunded_at)
                    <div class="info-item">
                        <div class="info-label">Dernier remboursement :</div>
                        <div class="info-value">{{ $payment->refunded_at->format('d/m/Y H:i') }}</div>
                    </div>
                    @endif
                    
                    @php $refundHistory = $payment->getRefundHistory(); @endphp
                    @if(!empty($refundHistory))
                    <div class="mt-4">
                        <h6>Historique des remboursements</h6>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Référence</th>
                                        <th>Raison</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($refundHistory as $refund)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($refund['processed_at'] ?? '')->format('d/m/Y H:i') }}</td>
                                        <td class="text-end">{{ number_format($refund['refunded_amount'] ?? 0, 0, ',', ' ') }} FCFA</td>
                                        <td>{{ $refund['refund_id'] ?? 'N/A' }}</td>
                                        <td>{{ $refund['reason'] ?? 'Non spécifiée' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                </div>
                @endif

                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <a href="{{ route('bookings.show', $payment->reservation) }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i> Retour à la réservation
                    </a>

                    <div class="btn-group">
                        @if($payment->status === 'completed' || $payment->status === 'refunded' || $payment->status === 'partially_refunded')
                        <a href="{{ route('payments.receipt', $payment) }}" class="btn btn-outline-primary" target="_blank">
                            <i class="fas fa-file-pdf me-2"></i> Télécharger le reçu
                        </a>
                        @endif
                        
                        @if($payment->status === 'completed')
                        <button type="button" class="btn btn-outline-warning ms-2" data-bs-toggle="modal" data-bs-target="#refundModal">
                            <i class="fas fa-undo me-2"></i> Demander un remboursement
                        </button>
                        @endif

                        @if(in_array($payment->status, ['pending', 'initiated']))
                        <form action="{{ route('payments.cancel', $payment) }}" method="POST" class="ms-2">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir annuler ce paiement ?')">
                                <i class="fas fa-times me-2"></i> Annuler le paiement
                            </button>
                        </form>
                        @endif
                    </div>
                </div>

                <!-- Modal de remboursement -->
                @can('refund', $payment)
                <div class="modal fade" id="refundModal" tabindex="-1" aria-labelledby="refundModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="refundModalLabel">Demander un remboursement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('payments.refund', $payment) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Montant à rembourser (FCFA)</label>
                                        <input type="number" step="0.01" min="0.01" max="{{ number_format($payment->getRefundableAmount(), 2, '.', '') }}" 
                                               class="form-control" id="amount" name="amount" 
                                               value="{{ number_format($payment->getRefundableAmount(), 2, '.', '') }}">
                                        <div class="form-text">Montant maximum remboursable : {{ number_format($payment->getRefundableAmount(), 0, ',', ' ') }} FCFA</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reason" class="form-label">Raison du remboursement</label>
                                        <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-warning">Confirmer le remboursement</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection

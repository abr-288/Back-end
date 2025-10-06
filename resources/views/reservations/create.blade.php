@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Réserver une chambre - {{ $hotel->name }}</h4>
                </div>
                <div class="card-body">
                    @if($room)
                        <div class="alert alert-info">
                            <h5>Chambre sélectionnée : {{ $room->roomType->name }}</h5>
                            <p class="mb-1">{{ $room->description }}</p>
                            <p class="mb-0">Prix par nuit : {{ number_format($room->price_per_night, 0, ',', ' ') }} FCFA</p>
                        </div>
                    @endif

                    <form action="{{ route('reservations.store', $hotel) }}" method="POST">
                        @csrf
                        
                        @if(!$room)
                            <div class="mb-3">
                                <label for="room_id" class="form-label">Type de chambre</label>
                                <select name="room_id" id="room_id" class="form-select @error('room_id') is-invalid @enderror" required>
                                    <option value="">Sélectionnez un type de chambre</option>
                                    @foreach($hotel->rooms as $roomOption)
                                        <option value="{{ $roomOption->id }}" {{ old('room_id') == $roomOption->id ? 'selected' : '' }}>
                                            {{ $roomOption->roomType->name }} - {{ number_format($roomOption->price_per_night, 0, ',', ' ') }} FCFA/nuit
                                        </option>
                                    @endforeach
                                </select>
                                @error('room_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @else
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                        @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="check_in" class="form-label">Date d'arrivée</label>
                                <input type="date" class="form-control @error('check_in') is-invalid @enderror" 
                                       id="check_in" name="check_in" 
                                       value="{{ old('check_in') }}" 
                                       min="{{ date('Y-m-d') }}" 
                                       required>
                                @error('check_in')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="check_out" class="form-label">Date de départ</label>
                                <input type="date" class="form-control @error('check_out') is-invalid @enderror" 
                                       id="check_out" name="check_out" 
                                       value="{{ old('check_out') }}" 
                                       min="{{ date('Y-m-d', strtotime('+1 day')) }}" 
                                       required>
                                @error('check_out')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="adults" class="form-label">Adultes</label>
                                <select name="adults" id="adults" class="form-select @error('adults') is-invalid @enderror" required>
                                    @for($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ old('adults', 2) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('adults')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="children" class="form-label">Enfants (0-12 ans)</label>
                                <select name="children" id="children" class="form-select @error('children') is-invalid @enderror">
                                    @for($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ old('children', 0) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('children')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="special_requests" class="form-label">Demandes spéciales (optionnel)</label>
                            <textarea class="form-control @error('special_requests') is-invalid @enderror" 
                                      id="special_requests" 
                                      name="special_requests" 
                                      rows="3">{{ old('special_requests') }}</textarea>
                            @error('special_requests')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary me-md-2">Annuler</a>
                            <button type="submit" class="btn btn-primary">Confirmer la réservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Détails de l'hôtel</h5>
                </div>
                <div class="card-body">
                    <h6>{{ $hotel->name }}</h6>
                    <p class="text-muted">
                        <i class="fas fa-map-marker-alt me-2"></i>{{ $hotel->address }}, {{ $hotel->city }}, {{ $hotel->country }}
                    </p>
                    <p class="mb-0">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $hotel->star_rating)
                                <i class="fas fa-star text-warning"></i>
                            @else
                                <i class="far fa-star text-warning"></i>
                            @endif
                        @endfor
                    </p>
                    <hr>
                    <h6>Équipements principaux :</h6>
                    <ul class="list-unstyled">
                        @if($hotel->has_wifi)
                            <li><i class="fas fa-wifi text-primary me-2"></i>Wi-Fi gratuit</li>
                        @endif
                        @if($hotel->has_parking)
                            <li><i class="fas fa-parking text-primary me-2"></i>Parking</li>
                        @endif
                        @if($hotel->has_restaurant)
                            <li><i class="fas fa-utensils text-primary me-2"></i>Restaurant</li>
                        @endif
                        @if($hotel->has_pool)
                            <li><i class="fas fa-swimming-pool text-primary me-2"></i>Piscine</li>
                        @endif
                    </ul>
                </div>
            </div>
            
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Conditions de réservation</h5>
                </div>
                <div class="card-body">
                    <ul class="small text-muted">
                        <li>Paiement sécurisé via notre plateforme</li>
                        <li>Annulation gratuite jusqu'à 48h avant l'arrivée</li>
                        <li>Check-in à partir de 14h00</li>
                        <li>Check-out avant 12h00</li>
                        <li>Prix TTC, taxes et frais de séjour inclus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkInInput = document.getElementById('check_in');
        const checkOutInput = document.getElementById('check_out');
        
        // Définir la date minimale pour le check-out (jour suivant le check-in)
        checkInInput.addEventListener('change', function() {
            const checkInDate = new Date(this.value);
            const nextDay = new Date(checkInDate);
            nextDay.setDate(checkInDate.getDate() + 1);
            
            // Mettre à jour la date minimale pour le check-out
            checkOutInput.min = nextDay.toISOString().split('T')[0];
            
            // Si la date de check-out est antérieure à la nouvelle date minimale, la réinitialiser
            if (checkOutInput.value && new Date(checkOutInput.value) <= checkInDate) {
                checkOutInput.value = nextDay.toISOString().split('T')[0];
            }
        });
    });
</script>
@endpush
@endsection

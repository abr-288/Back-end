<?php $page="flight-search";?>
@extends('layout.mainlayout')

@push('styles')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS for Flight Search -->
    <link rel="stylesheet" href="{{ asset('css/flight-search.css') }}">
@endpush

@section('content')
@component('components.breadcrumb')
    @slot('title')
        Recherche de vols
    @endslot
    @slot('item1')
        Accueil
    @endslot
    @slot('item3')
        Vols
    @endslot
    @slot('item2')
        Recherche
    @endslot
@endcomponent

<!-- Page Wrapper -->
<div class="content">
    <div class="container">
        <!-- Flight Search -->
        <div class="card">
            <div class="card-body">
                <div class="banner-form">
                    <form action="{{ route('flight.search') }}" method="GET">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                            <div class="d-flex align-items-center">
                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                    <input class="form-check-input mt-0" type="radio" name="trip_type" id="oneway" value="oneway" checked>
                                    <label class="form-check-label fs-14 ms-2" for="oneway">
                                        Aller simple
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                    <input class="form-check-input mt-0" type="radio" name="trip_type" id="roundtrip" value="roundtrip">
                                    <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                        Aller-retour
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="normal-trip">
                            <div class="d-flex form-info">
                                <!-- Ville de départ -->
                                <div class="form-item dropdown flex-fill me-2">
                                    <label class="form-label fs-14 text-default mb-1">Ville de départ</label>
                                    <select class="form-select" name="from" required>
                                        <option value="">Sélectionnez une ville</option>
                                        <option value="PAR">Paris (CDG)</option>
                                        <option value="LYS">Lyon (LYS)</option>
                                        <option value="MRS">Marseille (MRS)</option>
                                        <option value="NCE">Nice (NCE)</option>
                                        <option value="TLS">Toulouse (TLS)</option>
                                    </select>
                                </div>

                                <!-- Bouton d'inversion -->
                                <div class="d-flex align-items-end mb-3">
                                    <button type="button" class="btn btn-outline-secondary btn-sm swap-btn" id="swapCities">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                </div>

                                <!-- Ville d'arrivée -->
                                <div class="form-item dropdown flex-fill ms-2">
                                    <label class="form-label fs-14 text-default mb-1">Ville d'arrivée</label>
                                    <select class="form-select" name="to" required>
                                        <option value="">Sélectionnez une ville</option>
                                        <option value="NCE">Nice (NCE)</option>
                                        <option value="PAR">Paris (CDG)</option>
                                        <option value="LYS">Lyon (LYS)</option>
                                        <option value="MRS">Marseille (MRS)</option>
                                        <option value="TLS">Toulouse (TLS)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex form-info mt-3">
                                <!-- Date d'aller -->
                                <div class="form-item flex-fill me-2">
                                    <label class="form-label fs-14 text-default mb-1">Date d'aller</label>
                                    <input type="date" class="form-control" name="departure_date" required>
                                </div>

                                <!-- Date de retour (cachée par défaut) -->
                                <div class="form-item flex-fill ms-2" id="returnDateContainer" style="display: none;">
                                    <label class="form-label fs-14 text-default mb-1">Date de retour</label>
                                    <input type="date" class="form-control" name="return_date">
                                </div>
                            </div>

                            <!-- Passagers et classe -->
                            <div class="form-item dropdown mt-3">
                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                    <label class="form-label fs-14 text-default mb-1">Voyageurs et classe</label>
                                    <div class="form-control d-flex justify-content-between align-items-center">
                                        <span id="passengerSummary">1 Adulte, Économique</span>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 300px;">
                                    <h6 class="mb-3">Voyageurs et classe</h6>
                                    
                                    <!-- Adultes -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Adultes (12+ ans)</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="decrementAdults">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="adultCount" name="adults" value="1" min="1" max="9" readonly>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="incrementAdults">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enfants -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Enfants (2-11 ans)</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="decrementChildren">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="childrenCount" name="children" value="0" min="0" max="8" readonly>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="incrementChildren">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bébés -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Bébés (-2 ans)</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="decrementInfants">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="infantCount" name="infants" value="0" min="0" max="8" readonly>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" id="incrementInfants">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Classe -->
                                    <div class="mb-3">
                                        <label class="form-label">Classe</label>
                                        <select class="form-select" name="cabin_class">
                                            <option value="economy">Économique</option>
                                            <option value="premium_economy">Premium Économique</option>
                                            <option value="business">Affaires</option>
                                            <option value="first">Première Classe</option>
                                        </select>
                                    </div>

                                    <button type="button" class="btn btn-primary w-100" id="applyPassengers">Appliquer</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="directFlights" name="direct_flights">
                                    <label class="form-check-label" for="directFlights">
                                        Vols directs uniquement
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fas fa-search me-2"></i>Rechercher
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Flight Search -->

        <!-- Résultats de recherche (sera rempli dynamiquement) -->
        <div id="searchResults" class="mt-4">
            <!-- Les résultats de la recherche seront affichés ici -->
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@push('scripts')
<!-- Core JS -->
<script src="{{ url('build/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ url('build/js/popper.min.js') }}"></script>
<script src="{{ url('build/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('build/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ url('build/plugins/moment/moment.js') }}"></script>

<!-- Custom JS for Flight Search -->
<script>
    // S'assurer que le DOM est complètement chargé
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM chargé, initialisation du script flight-search.js');
        
        // Vérifier si le fichier JS est chargé
        if (typeof initFlightSearch === 'function') {
            console.log('La fonction initFlightSearch est disponible');
            initFlightSearch();
        } else {
            console.error('La fonction initFlightSearch n\'est pas disponible');
        }
    });
</script>

<!-- Chargement du fichier JS personnalisé -->
<script src="{{ asset('js/flight-search.js') }}" defer></script>
@endpush
@endsection

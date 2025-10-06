<?php $page="hotel-search";?>
@extends('layout.mainlayout')

@push('styles')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS for Hotel Search -->
    <link rel="stylesheet" href="{{ asset('css/hotel-search.css') }}">
@endpush

@section('content')
@component('components.breadcrumb')
    @slot('title')
        Recherche d'hôtels
    @endslot
    @slot('item1')
        Accueil
    @endslot
    @slot('item3')
        Hôtels
    @endslot
    @slot('item2')
        Recherche
    @endslot
@endcomponent

<!-- Page Wrapper -->
<div class="content">
    <div class="container">
        <!-- Hotel Search -->
        <div class="card hotel-search-card">
            <div class="card-body">
                <div class="banner-form">
                    <form action="{{ route('hotel.search') }}" method="GET" class="hotel-search-form">
                        <!-- Destination -->
                        <div class="form-item">
                            <label class="form-label">Destination</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control" name="destination" placeholder="Ville, région ou hôtel" required>
                            </div>
                        </div>

                        <!-- Dates de séjour -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-item">
                                    <label class="form-label">Arrivée</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        <input type="date" class="form-control" name="check_in" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-item">
                                    <label class="form-label">Départ</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        <input type="date" class="form-control" name="check_out" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Voyageurs et chambres -->
                        <div class="form-item">
                            <label class="form-label">Voyageurs et chambres</label>
                            <div class="dropdown">
                                <button class="form-control text-start d-flex justify-content-between align-items-center" 
                                        type="button" 
                                        id="passengerDropdown" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false">
                                    <span id="passengerSummary">1 Chambre • 2 Adultes</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 300px;">
                                    <h6 class="mb-3">Voyageurs et chambres</h6>
                                    
                                    <!-- Nombre de chambres -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Chambres</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="counter-btn" data-target="roomCount" data-action="decrement">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="roomCount" value="1" min="1" max="10" readonly>
                                                <button type="button" class="counter-btn" data-target="roomCount" data-action="increment">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nombre d'adultes -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Adultes</label>
                                                <p class="text-muted small mb-0">12+ ans</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="counter-btn" data-target="adultCount" data-action="decrement">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="adultCount" value="2" min="1" max="20" readonly>
                                                <button type="button" class="counter-btn" data-target="adultCount" data-action="increment">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nombre d'enfants -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <label class="form-label mb-0">Enfants</label>
                                                <p class="text-muted small mb-0">0-11 ans</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="counter-btn" data-target="childCount" data-action="decrement">-</button>
                                                <input type="number" class="form-control mx-2 text-center" id="childCount" value="0" min="0" max="10" readonly>
                                                <button type="button" class="counter-btn" data-target="childCount" data-action="increment">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary w-100" data-bs-dismiss="dropdown">Appliquer</button>
                                </div>
                            </div>
                        </div>

                        <!-- Bouton de recherche -->
                        <button type="submit" class="btn btn-primary search-btn">
                            <i class="fas fa-search me-2"></i>Rechercher un hôtel
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Hotel Search -->

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

<!-- Custom JS for Hotel Search -->
<script>
    // S'assurer que le DOM est complètement chargé
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM chargé, initialisation du script hotel-search.js');
        
        // Vérifier si le fichier JS est chargé
        if (typeof initHotelSearch === 'function') {
            console.log('La fonction initHotelSearch est disponible');
            initHotelSearch();
        } else {
            console.error('La fonction initHotelSearch n\'est pas disponible');
        }
    });
</script>

<!-- Chargement du fichier JS personnalisé -->
<script src="{{ asset('js/hotel-search.js') }}" defer></script>
@endpush
@endsection

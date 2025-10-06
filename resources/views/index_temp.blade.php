<?php $page = "index"; ?>
@extends('layout.mainlayout')

@section('content')
    <!-- Hero Section -->
    <x-search.sections.hero />

    <div class="search-container">
        <div class="container">
            <div class="search-box">
                <ul class="nav nav-tabs" id="searchTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="flight-tab" data-bs-toggle="tab" 
                                data-bs-target="#flight" type="button" role="tab" 
                                aria-controls="flight" aria-selected="true">
                            <i class="fas fa-plane" aria-hidden="true"></i> Vols
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hotel-tab" data-bs-toggle="tab" 
                                data-bs-target="#hotel" type="button" role="tab" 
                                aria-controls="hotel" aria-selected="false"
                                tabindex="-1">
                            <i class="fas fa-hotel" aria-hidden="true"></i> Hôtels
                        </button>
                    </li>
                </ul>
                
                <div class="tab-content py-4" id="searchTabsContent">
                    <!-- Vols Tab -->
                    <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                        <x-search.forms.flight />
                    </div>
                    
                    <!-- Hôtels Tab -->
                    <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                        <x-search.forms.hotel />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Destinations -->
    <section class="featured-destinations py-5">
        <div class="container">
            <h2 class="text-center mb-5">Destinations populaires</h2>
            <div class="row g-4">
                @foreach($featuredDestinations as $destination)
                    <div class="col-md-4">
                        <div class="destination-card">
                            <img src="{{ asset($destination['image']) }}" 
                                 alt="{{ $destination['name'] }}" 
                                 class="img-fluid"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                            <div class="destination-overlay">
                                <h3>{{ $destination['name'] }}</h3>
                                <p>À partir de {{ $destination['price'] }} €</p>
                                <a href="{{ $destination['url'] }}" class="btn btn-outline-light">Voir les offres</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/search-forms.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/search-forms.js') }}" defer></script>
@endpush

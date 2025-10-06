<?php $page = "index"; ?>
@extends('layout.mainlayout')
@section('content')   
<link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
<!-- Hero Section -->
<section class="hero-section">
    <div class="banner-slider banner-sec owl-carousel">
        <div class="slider-img">
            <img src="{{ asset('build/img/banner/banner-01.jpg') }}" alt="Voyagez avec confort" loading="lazy">
            <div class="slider-overlay">
                <div class="container">
                    <div class="slider-content">
                        <h2>Découvrez des destinations exceptionnelles</h2>
                        <p>Voyagez en toute sérénité avec nos offres exclusives</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-img">
            <img src="{{ asset('build/img/banner/banner-02.jpg') }}" alt="Séjours inoubliables" loading="lazy">
            <div class="slider-overlay">
                <div class="container">
                    <div class="slider-content">
                        <h2>Séjours inoubliables</h2>
                        <p>Des expériences uniques pour des souvenirs mémorables</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-container">
        <div class="container">
            <div class="search-box">
                <ul class="nav nav-tabs" id="searchTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="flight-tab" data-bs-toggle="tab" 
                                data-bs-target="#flight" type="button" role="tab" 
                                aria-controls="flight" aria-selected="true">
                            <i class="fas fa-plane"></i> Vols
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hotel-tab" data-bs-toggle="tab" 
                                data-bs-target="#hotel" type="button" role="tab" 
                                aria-controls="hotel" aria-selected="false">
                            <i class="fas fa-hotel"></i> Hôtels
                        </button>
                    </li>
                </ul>
                
                <div class="tab-content" id="searchTabsContent">
                    <!-- Vols Tab -->
                    <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                        <form action="{{ route('flight.search') }}" method="GET">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ville de départ</label>
                                        <input type="text" class="form-control" name="from" placeholder="D'où partez-vous ?" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Destination</label>
                                        <input type="text" class="form-control" name="to" placeholder="Où allez-vous ?" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Date de départ</label>
                                        <input type="date" class="form-control" name="departure_date" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Passagers</label>
                                        <select class="form-select" name="passengers">
                                            <option value="1">1 Voyageur</option>
                                            <option value="2">2 Voyageurs</option>
                                            <option value="3">3 Voyageurs</option>
                                            <option value="4">4 Voyageurs</option>
                                            <option value="5">5 Voyageurs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-search me-2"></i>Rechercher
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Hôtels Tab -->
                    <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                        <form action="{{ route('hotel.search') }}" method="GET">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Destination</label>
                                        <input type="text" class="form-control" name="destination" placeholder="Où souhaitez-vous séjourner ?" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Arrivée</label>
                                        <input type="date" class="form-control" name="check_in" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Départ</label>
                                        <input type="date" class="form-control" name="check_out" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Voyageurs</label>
                                        <select class="form-select" name="guests">
                                            <option value="1">1 Adulte</option>
                                            <option value="2">2 Adultes</option>
                                            <option value="3">3 Adultes</option>
                                            <option value="4">4 Adultes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-search me-2"></i>Rechercher
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Destinations -->
<section class="featured-destinations py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Destinations populaires</h2>
            <p>Découvrez nos destinations les plus prisées</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('build/img/destinations/paris.jpg') }}" alt="Paris" class="img-fluid" loading="lazy">
                    <div class="destination-overlay">
                        <h3>Paris, France</h3>
                        <p>À partir de 450€</p>
                        <a href="#" class="btn btn-outline-light">Voir les offres</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('build/img/destinations/bali.jpg') }}" alt="Bali" class="img-fluid" loading="lazy">
                    <div class="destination-overlay">
                        <h3>Bali, Indonésie</h3>
                        <p>À partir de 850€</p>
                        <a href="#" class="btn btn-outline-light">Voir les offres</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('build/img/destinations/new-york.jpg') }}" alt="New York" class="img-fluid" loading="lazy">
                    <div class="destination-overlay">
                        <h3>New York, USA</h3>
                        <p>À partir de 650€</p>
                        <a href="#" class="btn btn-outline-light">Voir les offres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Pourquoi nous choisir ?</h2>
            <p>Des services exceptionnels pour votre confort</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Paiement sécurisé</h4>
                    <p>Transactions 100% sécurisées avec cryptage SSL</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-headset fa-3x text-primary"></i>
                    </div>
                    <h4>Support 24/7</h4>
                    <p>Une équipe disponible à tout moment pour vous aider</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-tag fa-3x text-primary"></i>
                    </div>
                    <h4>Meilleur prix garanti</h4>
                    <p>Les meilleurs tarifs du marché garantis</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Initialisation du carousel
    $(document).ready(function(){
        $('.banner-slider').owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
    });
</script>
@endpush

<style>
    /* Styles pour la section hero */
    .hero-section {
        position: relative;
        margin-bottom: 50px;
    }
    
    .slider-img {
        position: relative;
        height: 80vh;
        min-height: 600px;
        overflow: hidden;
    }
    
    .slider-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .slider-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
    }
    
    .slider-content h2 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .slider-content p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
    }
    
    /* Styles pour la zone de recherche */
    .search-container {
        position: relative;
        margin-top: -100px;
        z-index: 10;
    }
    
    .search-box {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    
    .nav-tabs {
        border: none;
        margin-bottom: 20px;
    }
    
    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 600;
        padding: 10px 20px;
        margin-right: 10px;
        border-radius: 5px;
    }
    
    .nav-tabs .nav-link.active {
        background: #0d6efd;
        color: #fff;
    }
    
    .form-group {
        margin-bottom: 1rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    /* Styles pour les cartes de destination */
    .destination-card {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .destination-card:hover {
        transform: translateY(-10px);
    }
    
    .destination-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    
    .destination-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        color: #fff;
        padding: 20px;
    }
    
    .destination-overlay h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    /* Styles pour la section Pourquoi nous choisir */
    .feature-box {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }
    
    .feature-box:hover {
        transform: translateY(-5px);
    }
    
    .feature-icon {
        color: #0d6efd;
    }
    
    /* Styles responsifs */
    @media (max-width: 768px) {
        .slider-content h2 {
            font-size: 2rem;
        }
        
        .slider-content p {
            font-size: 1rem;
        }
        
        .search-container {
            margin-top: 20px;
        }
        
        .search-box {
            padding: 15px;
        }
    }
</style>
@endsection

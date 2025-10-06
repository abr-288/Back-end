@extends('layout.mainlayout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">Détails de la destination : {{ $title }}</h1>
                <p class="lead">Page en construction - Plus d'informations à venir bientôt !</p>
                <a href="{{ route('index') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-arrow-left me-2"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
@endsection

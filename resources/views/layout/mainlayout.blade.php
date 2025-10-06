<!DOCTYPE html>
@if(!Route::is(['index-rtl']))
<html lang="en">
@endif
@if(Route::is(['index-rtl']))
<html lang="en" dir="rtl">
@endif
<head>
    <!-- CSS Libraries -->
    <link href="{{ asset('build/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/plugins/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/plugins/owl.carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    @vite([
        'resources/css/app.css',
        'resources/css/style.css',
        'resources/css/meanmenu.css',
        'resources/css/bootstrap-datetimepicker.min.css',
        'resources/css/components/loader.css',
        'resources/css/components/image-fallback.css'
    ])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bossiz - Travel and Tour Booking</title>

    <meta name="description" content="DreamsTour - A premium Bootstrap 5 template crafted for travel and tour booking. Tailored for travel agencies and booking platforms, it features flight, hotel, and tour reservations, and holiday packages.">
    <meta name="keywords" content="travel booking template, tour booking, Bootstrap 5 travel template, DreamsTour, hotel booking, flights booking, holiday packages, tour agency website, travel agency template, travel HTML template, booking system, responsive travel template, Bootstrap travel website">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('build/img/apple-touch-icon.png')}}">

@include('layout.partials.head')
</head>

@if(!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon']))
<body>
@endif

@if(Route::is(['index','index-2','index-3','index-4','index-5','index-6']))
 <!-- Loader -->
 <div id="loader-wrapper">        	
    <div id="loader">
        <span class="loader-line"></span>
    </div>
</div>
<!-- /Loader -->
@endif	

@if(Route::is(['login','register','forgot-password','change-password']))
<body class="bg-light-200">
@endif
@if(Route::is(['error-404','error-500','under-maintenance','coming-soon']))
<body class="bg-primary-transparent">
@endif   
@if(Route::is(['coming-soon']))
<body class="coming-soon-bg">
@endif  
@if(!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon']))
@include('layout.partials.header')
@endif
@yield('content')
@if(!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon']))
    @include('layout.partials.footer')
    
    <!-- JavaScript Libraries -->
    <script src="{{ asset('build/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('build/js/select2.min.js') }}"></script>
    <script src="{{ asset('build/js/moment.min.js') }}"></script>
    <script src="{{ asset('build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    
    <!-- Custom JavaScript -->
    @vite(['resources/js/app.js'])
    
    @include('layout.partials.footer-scripts')
@endif
<div class="back-to-top">
<a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
</div>
@include('layout.partials.footer-scripts')
</body>
</html>
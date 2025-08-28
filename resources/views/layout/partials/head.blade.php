
    <!-- Favicon -->
    <link rel="icon" href="{{ url('build/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('build/img/favicon.png')}}" type="image/x-icon">

    @if(!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon']))
    <!-- Theme Settings Js -->
	<script src="{{ url('build/js/theme-script.js')}}"></script>
    @endif

    <link rel="stylesheet" href="{{ url('build/css/animate.css')}}">
    @if(!Route::is(['index-rtl']))
    <link rel="stylesheet" href="{{ url('build/css/bootstrap.min.css')}}">
    @endif
    @if(Route::is(['index-rtl']))
    <link rel="stylesheet" href="{{ url('build/css/bootstrap.rtl.min.css')}}">
    @endif
    <!-- Main.css -->
    <link rel="stylesheet" href="{{ url('build/css/meanmenu.css')}}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/tabler-icons/tabler-icons.css')}}">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/all.min.css')}}">

    @if (Route::is(['index-2','car-details','cruise-details','flight-details','tour-details']))
	<!-- Slick CSS -->
	<link rel="stylesheet" href="{{ url('build/plugins/slick/slick.css')}}">
     @endif
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/fancybox/jquery.fancybox.min.css')}}">

    @if (Route::is(['flight-grid','flight',
    'about-us',
    'become-an-expert',
    'blog-details',
    'blog-grid',
    'blog-list',
    'booking-confirmation',
    'car-booking-confirmation',
    'car-booking',
    'car-grid',
    'car-list',
    'car-map',
    'change-password',
    'coming-soon',
    'contact-us',
    'cruise-booking-confirmation',
    'cruise-booking',
    'cruise-grid',
    'cruise-list',
    'cruise-map',
    'error-404',
    'error-500',
    'faq',
    'flight-booking-confirmation',
    'flight-booking',
    'flight-grid',
    'flight-list',
    'forgot-password',
    'gallery',
    'hotel-booking',
    'hotel-grid',
    'hotel-list',
    'hotel-map',
    'invoices',
    'login',
    'pricing-plan',
    'privacy-policy',
    'register',
    'terms-conditions',
    'testimonial',
    'tour-booking',
    'tour-grid',
    'tour-list',
    'tour-map'

    ]))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{ url('build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
    @endif
    <!-- Summernote JS -->
    <link rel="stylesheet" href="{{ url('build/plugins/summernote/summernote-lite.min.css')}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/select2/css/select2.min.css')}}">

    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/owlcarousel/owl.carousel.min.css')}}">

    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="{{ url('build/css/iconsax.css')}}">

     <!-- Daterangepikcer CSS -->
     <link rel="stylesheet" href="{{ url('build/plugins/daterangepicker/daterangepicker.css')}}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('build/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('build/css/style.css')}}">

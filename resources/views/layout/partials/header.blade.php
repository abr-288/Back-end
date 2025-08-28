<?php error_reporting(0); ?>
@if (!Route::is(['index','index-2','index-3','index-4','index-5','index-6']))
<div class="main-header">
    <!-- Header Topbar-->
    <div class="header-topbar text-center bg-transparent">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call5 me-2"></i>Toll Free : +1 56565 56594</p>
                <div class="d-flex align-items-center">
                    <p class="mb-2 me-3 d-flex align-items-center fw-medium fs-14"><i class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                    <div class="dropdown flag-dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="fav-dropdown mb-2">
                        <a href="{{url('wishlist')}}" class="position-relative">
                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Header Topbar-->

    <!-- Header -->
    <header>
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <a href="{{url('add-hotel')}}" class="btn btn-primary w-100">Add Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','/','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index','/') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}" ><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}" ><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}" ><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}" ><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}" ><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu  {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu  {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu  {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}"><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}"><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
                            'agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}"><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="me-3">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>
                        <div class="dropdown profile-dropdown">
                            <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                <span class="avatar avatar-md">
                                    <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="Img" class="img-fluid rounded-circle border border-white border-4">
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{url('dashboard')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{url('customer-hotel-booking')}}">My Booking</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{url('my-profile')}}">My Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider my-2">
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{url('profile-settings')}}">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{url('login')}}">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{url('add-hotel')}}" class="btn btn-primary me-0">Add Listing</a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index-2']))
<div class="main-header main-header-four">
    <!-- Header -->
    <header class="header-four">
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-dark w-100 mb-3"><a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a> / <a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}" ><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','add-flight','') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">        
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}" ><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}"><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}"><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings',
                            'agent-dashboard','agent-listings','agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}"><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="dropdown flag-dropdown me-3">
                            <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" alt="flag">
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <div class="me-3">
                            <a href="{{url('dashboard')}}">
                                <i class="isax isax-user"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>
                        <div class="fav-dropdown me-3">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                        <a href="{{url('become-an-expert')}}" class="btn btn-primary">Become Expert</a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index-3']))
<div class="main-header">
    <!-- Header -->
    <header class="header-three wow fadeInDown" data-wow-delay="0.3">
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div><a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu  {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}" ><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}" ><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
                            'agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}" ><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="cart-dropdown me-3">
                            <a href="{{url('dashboard')}}" class="position-relative">
                                <i class="isax isax-user"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>
                        <div class="fav-dropdown me-3">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                        <div><a href="javascript:void(0);" class="text-white fs-13 btn btn-dark btn-md" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index-4']))
<div class="main-header main-header-four">
    <!-- Header Topbar-->
    <div class="header-topbar topbar-four text-center bg-transparent">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center flex-wrap">
                    <p class="d-flex align-items-center fs-14 mb-2 me-3 "><i class="isax isax-call5 me-2"></i>Toll Free : +1 56565 56594</p>
                    <p class="mb-2 d-flex align-items-center fs-14"><i class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown flag-dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Header Topbar-->

    <!-- Header -->
    <header class="header-four">
        <div class="container-fluid">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-dark w-100 mb-3"><a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a> / <a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','/','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid') ? 'active' : '' }}" ><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}" ><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}" ><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}" ><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}" ><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}" ><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}"><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}"><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
                            'agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}"><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="me-3">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>
                        <div class="fav-dropdown me-3">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                        <a href="{{url('add-flight')}}" class="btn btn-dark d-inline-flex align-items-center me-3"><i class="isax isax-lock me-2"></i>Add Your Listing</a>
                        <a href="{{url('register')}}" class="btn btn-dark d-inline-flex align-items-center me-0"><i class="isax isax-lock me-2"></i>Sign Up</a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index-5']))
<div class="main-header">
    <!-- Header -->
    <header class="header-five wow fadeInDown" data-wow-delay="0.3">
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div><a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-2" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','/','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }} ">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li> 
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}" ><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}" ><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}" ><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}" ><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}" ><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}" ><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu  {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}"><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}"><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
                            'agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}" ><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}"><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="cart-dropdown me-3">
                            <a href="{{url('dashboard')}}" class="position-relative">
                                <i class="isax isax-user"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>
                        <div class="fav-dropdown me-3">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="text-white btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index-6']))
<div class="main-header main-header-four">
    <!-- Header Topbar-->
    <div class="header-topbar header-top-six text-center bg-transparent">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center flex-wrap">
                    <p class="d-flex align-items-center fs-14 mb-2 me-3 "><i class="isax isax-call5 me-2"></i>Toll Free : +1 56565 56594</p>
                    <p class="mb-2 d-flex align-items-center fs-14"><i class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                </div>
                <div class="navbar-logo mb-2">
                    <a class="logo-dark header-logo" href="{{url('index')}}">
                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                    </a>
                    <a class="logo-white header-logo" href="{{url('index')}}">
                        <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="me-3 mb-2">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                            <i class="isax isax-moon"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                            <i class="isax isax-sun-1"></i>
                        </a>
                    </div>
                    <div class="fav-dropdown mb-2 me-3">
                        <a href="{{url('wishlist')}}" class="position-relative">
                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-2" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Header Topbar-->

    <!-- Header -->
    <header class="header-six">
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{url('index')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('index')}}" class="white-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{url('wishlist')}}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div><a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Request::is('index','/','index-2','index-3','index-4','index-5','index-6') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Home<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                <h6 class="mb-3">Home Pages</h6>
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                            </div>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">All Bookings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Hotels</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Cars</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Flight</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-5')}}">Cruise</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-6')}}">Tours</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','flight-list','flight-details','flight-booking-confirmation','add-flight') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Tour Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('tour-grid') ? 'active' : '' }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                        <li class="{{ Request::is('tour-list') ? 'active' : '' }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                        <li class="{{ Request::is('tour-map') ? 'active' : '' }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                        <li class="{{ Request::is('tour-details') ? 'active' : '' }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                        <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : '' }}"><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                        <li class="{{ Request::is('add-tour') ? 'active' : '' }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('about-us','gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us',
                            'booking-confirmation','destination','terms-conditions','privacy-policy','login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <h6>Pages</h6>
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                        <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                        <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                                        <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Teams</a></li>
                                                        <li class="{{ Request::is('invoices') ? 'active' : '' }}"><a href="{{url('invoices')}}">Invoice</a></li>
                                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                        <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                        <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('booking-confirmation') ? 'active' : '' }}"><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li class="{{ Request::is('destination') ? 'active' : '' }}"><a href="{{url('destination')}}">Destination</a></li>
                                                        <li class="{{ Request::is('terms-conditions') ? 'active' : '' }}"><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                        <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                        <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}">Change Password</a></li>
                                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                                        <li class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                        <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                        <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Request::is('dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
                            'agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-settings') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row g-lg-4">
                                                <div class="col-lg-6">
                                                    <h6>User Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('customer-flight-booking') ? 'active' : '' }}"><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                        <li class="{{ Request::is('review') ? 'active' : '' }}"><a href="{{url('review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{url('chat')}}">Message</a></li>
                                                        <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                        <li class="{{ Request::is('wallet') ? 'active' : '' }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                        <li class="{{ Request::is('payment') ? 'active' : '' }}"><a href="{{url('payment')}}">Payments</a></li>
                                                        <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                        <li class="{{ Request::is('notification-settings') ? 'active' : '' }}"><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                        <li class="{{ Request::is('my-profile') ? 'active' : '' }}"><a href="{{url('my-profile')}}">My Profile</a></li>
                                                        <li class="{{ Request::is('security-settings') ? 'active' : '' }}"><a href="{{url('security-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6>Agent Dashboard</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('agent-dashboard') ? 'active' : '' }}"><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                        <li class="{{ Request::is('agent-listings') ? 'active' : '' }}"><a href="{{url('agent-listings')}}">Listings</a></li>
                                                        <li class="{{ Request::is('agent-hotel-booking') ? 'active' : '' }}"><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                        <li class="{{ Request::is('agent-enquirers') ? 'active' : '' }}"><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                        <li class="{{ Request::is('agent-earnings') ? 'active' : '' }}"><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                        <li class="{{ Request::is('agent-review') ? 'active' : '' }}"><a href="{{url('agent-review')}}">Reviews</a></li>
                                                        <li class="{{ Request::is('agent-settings') ? 'active' : '' }}"><a href="{{url('agent-settings')}}">Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn align-items-center">
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <div class="me-3">
                            <a href="{{url('dashboard')}}">
                                <i class="isax isax-user"></i>
                            </a>
                        </div>
                        <div class="fav-dropdown  me-3">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-2" data-bs-toggle="modal" data-bs-target="#register-modal">Sign In</a>
                        </div>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar-menu">
                            <i class="isax isax-menu5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
@endif

@if (Route::is(['index']))
    <div class="main-header">
        <!-- Header Topbar-->
        <div class="header-topbar text-center bg-transparent">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call5 me-2"></i>Toll Free : +1 56565 56594</p>
                    <div class="d-flex align-items-center">
                        <p class="mb-2 me-3 d-flex align-items-center fw-medium fs-14"><i class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                        <div class="dropdown flag-dropdown mb-2 me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2 me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								USD
							</a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <div class="fav-dropdown mb-2">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header Topbar-->

        <!-- Header -->
        <header>
            <div class="container">
                <div class="offcanvas-info">
                    <div class="offcanvas-wrap">
                        <div class="offcanvas-detail">
                            <div class="offcanvas-head">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{url('index')}}" class="black-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                    </a>
                                    <a href="{{url('index')}}" class="white-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                    </a>
                                    <div class="offcanvas-close">
                                        <i class="ti ti-x"></i>
                                    </div>
                                </div>
                                <div class="wishlist-info d-flex justify-content-between align-items-center">
                                    <h6 class="fs-16 fw-medium">Wishlist</h6>
                                    <div class="d-flex align-items-center">
                                        <div class="fav-dropdown">
                                            <a href="{{url('wishlist')}}" class="position-relative">
                                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu fix mb-3"></div>
                            <div class="offcanvas__contact">
                                <div class="mt-4">
                                    <div class="header-dropdown d-flex flex-fill">
                                        <div class="w-100">
                                            <div class="dropdown flag-dropdown mb-2">
                                                <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                </a>
                                                <ul class="dropdown-menu p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
													USD
												</a>
                                                <ul class="dropdown-menu p-2">
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                                    <a href="{{url('become-an-expert')}}" class="btn btn-primary w-100">Become Expert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-overlay"></div>
                <div class="header-nav">
                    <div class="main-menu-wrapper">
                        <div class="navbar-logo">
                            <a class="logo-white header-logo" href="{{url('index')}}">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                            </a>
                            <a class="logo-dark header-logo" href="{{url('index')}}">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                            </a>
                        </div>
                        <nav id="mobile-menu">
                            <ul class="main-nav">
                                <li class="has-submenu megamenu active">
                                    <a href="javascript:void(0);">Home<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                    <h6 class="mb-3">Home Pages</h6>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                                </div>
                                                <div class="row g-lg-4">
                                                    <div class="col-lg-2">
                                                        <div class="single-demo active">
                                                            <div class="demo-img">
                                                                <a href="{{url('index')}}"><img src="{{URL::asset('build/img/menu/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index')}}">All Bookings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="single-demo">
                                                            <div class="demo-img">
                                                                <a href="{{url('index-2')}}"><img src="{{URL::asset('build/img/menu/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index-2')}}">Hotels</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="single-demo">
                                                            <div class="demo-img">
                                                                <a href="{{url('index-3')}}"><img src="{{URL::asset('build/img/menu/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index-3')}}">Cars</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="single-demo">
                                                            <div class="demo-img">
                                                                <a href="{{url('index-4')}}"><img src="{{URL::asset('build/img/menu/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index-4')}}">Flight</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="single-demo">
                                                            <div class="demo-img">
                                                                <a href="{{url('index-5')}}"><img src="{{URL::asset('build/img/menu/home-05.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index-5')}}">Cruise</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="single-demo">
                                                            <div class="demo-img">
                                                                <a href="{{url('index-6')}}"><img src="{{URL::asset('build/img/menu/home-06.jpg')}}" class="img-fluid" alt="img"></a>
                                                            </div>
                                                            <div class="demo-info">
                                                                <a href="{{url('index-6')}}">Tours</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Flight<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Flight Bookings</h6>
                                                        <ul>
                                                            <li><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                            <li><a href="{{url('flight-list')}}">Flight List</a></li>
                                                            <li><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                            <li><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                            <li><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Hotel<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Hotel Bookings</h6>
                                                        <ul>
                                                            <li><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                            <li><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                            <li><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                            <li><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                            <li><a href="{{url('booking-confirmation')}}">Hotel Booking</a></li>
                                                            <li><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Car<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Car Bookings</h6>
                                                        <ul>
                                                            <li><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                            <li><a href="{{url('car-list')}}">Car List</a></li>
                                                            <li><a href="{{url('car-map')}}">Car Map</a></li>
                                                            <li><a href="{{url('car-details')}}">Car Details</a></li>
                                                            <li><a href="{{url('car-booking-confirmation')}}">Car Booking</a></li>
                                                            <li><a href="{{url('add-car')}}">Add Car</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Cruise<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Cruise Bookings</h6>
                                                        <ul>
                                                            <li><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                            <li><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                            <li><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                            <li><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                            <li><a href="{{url('cruise-booking-confirmation')}}">Cruise Booking</a></li>
                                                            <li><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Tour<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Tour Bookings</h6>
                                                        <ul>
                                                            <li><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                            <li><a href="{{url('tour-list')}}">Tour List</a></li>
                                                            <li><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                            <li><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                            <li><a href="{{url('tour-booking-confirmation')}}">Tour Booking</a></li>
                                                            <li><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Pages<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <h6>Pages</h6>
                                                <div class="row g-lg-4">
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li><a href="{{url('about-us')}}">About</a></li>
                                                            <li><a href="{{url('gallery')}}">Gallery</a></li>
                                                            <li><a href="{{url('testimonial')}}">Testimonials</a></li>
                                                            <li><a href="{{url('faq')}}">Faq</a></li>
                                                            <li><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                                            <li><a href="{{url('team')}}">Teams</a></li>
                                                            <li><a href="{{url('invoices')}}">Invoice</a></li>
                                                            <li><a href="{{url('blog-grid')}}">Blogs Grid</a></li>
                                                            <li><a href="{{url('blog-list')}}">Blogs List</a></li>
                                                            <li><a href="{{url('blog-details')}}">Blogs Details</a></li>
                                                            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                            <li><a href="{{url('booking-confirmation')}}">Booking Confirmation</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li><a href="{{url('destination')}}">Destination</a></li>
                                                            <li><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                                                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                                            <li><a href="{{url('login')}}">Login</a></li>
                                                            <li><a href="{{url('register')}}">Register</a></li>
                                                            <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                                            <li><a href="{{url('change-password')}}">Change Password</a></li>
                                                            <li><a href="{{url('error-404')}}">404 Error</a></li>
                                                            <li><a href="{{url('error-500')}}">500 Error</a></li>
                                                            <li><a href="{{url('under-maintenance')}}">Under Maintenance</a></li>
                                                            <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                                            <li><a href="{{url('index-rtl')}}">RTL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu">
                                    <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row g-lg-4">
                                                    <div class="col-lg-6">
                                                        <h6>User Dashboard</h6>
                                                        <ul>
                                                            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                            <li><a href="{{url('customer-flight-booking')}}">My Bookings</a></li>
                                                            <li><a href="{{url('review')}}">Reviews</a></li>
                                                            <li><a href="{{url('chat')}}">Message</a></li>
                                                            <li><a href="{{url('wishlist')}}">Wishlist</a></li>
                                                            <li><a href="{{url('wallet')}}">Wallet</a></li>
                                                            <li><a href="{{url('payment')}}">Payments</a></li>
                                                            <li><a href="{{url('profile-settings')}}">Profile Settings</a></li>
                                                            <li><a href="{{url('notification-settings')}}">Notifications</a></li>
                                                            <li><a href="{{url('my-profile')}}">My Profile</a></li>
                                                            <li><a href="{{url('security-settings')}}">Settings</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6>Agent Dashboard</h6>
                                                        <ul>
                                                            <li><a href="{{url('agent-dashboard')}}">Dashboard</a></li>
                                                            <li><a href="{{url('agent-listings')}}">Listings</a></li>
                                                            <li><a href="{{url('agent-hotel-booking')}}">Bookings</a></li>
                                                            <li><a href="{{url('agent-enquirers')}}">Enquiries</a></li>
                                                            <li><a href="{{url('agent-earnings')}}">Earnings</a></li>
                                                            <li><a href="{{url('agent-review')}}">Reviews</a></li>
                                                            <li><a href="{{url('agent-settings')}}">Settings</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-btn d-flex align-items-center">
                            <div class="me-3">
                                <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-moon"></i>
                                </a>
                                <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-sun-1"></i>
                                </a>
                            </div>
                            <div><a href="javascript:void(0);" class="btn btn-white me-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                            <a href="{{url('become-an-expert')}}" class="btn btn-primary me-0">Become Expert</a>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar-menu">
                                    <i class="isax isax-menu5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
    </div>
@endif

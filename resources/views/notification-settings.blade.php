<?php $page="notification-settings";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Settings
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Notifications
        @endslot
       @endcomponent

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">

            <div class="row">

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card user-sidebar mb-4 mb-lg-0">
                        <div class="card-header user-sidebar-header">
                            <div class="profile-content rounded-pill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image" class="img-fluid avatar avatar-lg rounded-circle me-1">
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <span class="fs-14 text-gray-6">Since 10 May 2025</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{url('profile-settings')}}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"><i class="isax isax-edit-2 fs-14"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body user-sidebar-body">
                            <ul>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Main</span>
                                </li>
                                <li>
                                    <a href="{{url('dashboard')}}" class="d-flex align-items-center">
                                        <i class="isax isax-grid-55"></i> Dashboard
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="d-block"><i class="isax isax-calendar-tick5"></i><span>My Bookings</span><span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('customer-flight-booking')}}" class="fs-14 d-inline-flex align-items-center">Flights</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-hotel-booking')}}" class="fs-14 d-inline-flex align-items-center">Hotels</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-car-booking')}}" class="fs-14 d-inline-flex align-items-center">Cars</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-cruise-booking')}}" class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-tour-booking')}}" class="fs-14 d-inline-flex align-items-center">Tour</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('review')}}" class="d-flex align-items-center">
                                        <i class="isax isax-magic-star5"></i> My Reviews
                                    </a>
                                </li>
                                <li>
                                    <div class="message-content">
                                        <a href="{{url('chat')}}" class="d-flex align-items-center">
                                            <i class="isax isax-message-square5"></i> Messages
                                        </a>
                                        <span class="msg-count rounded-circle">02</span>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('wishlist')}}" class="d-flex align-items-center">
                                        <i class="isax isax-heart5"></i> Wishlist
                                    </a>
                                </li>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Finance</span>
                                </li>
                                <li>
                                    <a href="{{url('wallet')}}" class="d-flex align-items-center">
                                        <i class="isax isax-wallet-add-15"></i> Wallet
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('payment')}}" class="d-flex align-items-center">
                                        <i class="isax isax-money-recive5"></i> Payments
                                    </a>
                                </li>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Account</span>
                                </li>
                                <li>
                                    <a href="{{url('my-profile')}}" class="d-flex align-items-center">
                                        <i class="isax isax-profile-tick5"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <div class="{{url('message-content">
                                        <a href="notification')}}" class="d-flex align-items-center">
                                            <i class="isax isax-notification-bing5"></i> Notifications
                                        </a>
                                        <span class="msg-count bg-purple rounded-circle">05</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{url('profile-settings')}}" class="d-flex align-items-center active">
                                        <i class="isax isax-setting-25"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('index')}}" class="d-flex align-items-center pb-0">
                                        <i class="isax isax-logout-15"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body pb-1">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                <a href="{{url('profile-settings')}}"><i class="isax isax-user-octagon me-2"></i>Profile Settings</a>
                                <a href="{{url('security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                                <a href="{{url('notification-settings')}}" class="active ps-3"><i class="isax isax-notification me-2"></i>Notifications</a>
                                <a href="{{url('integration-settings')}}" class="pe-3"><i class="isax isax-hierarchy me-2"></i>Integrations</a>
                            </div>

                            <!-- Security Content -->
                            <div class="row gy-2">
                                <div class="col-xl-6 d-flex">
                                    <div class="notification-content mb-0 flex-fill">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <h6 class="fs-14 mb-1">Booking Confirmations</h6>
                                                <p class="fs-14 fw-normal">Instant notifications for flight, hotel, or activity bookings</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Push</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check1">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">SMS</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check2" checked>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Email</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check3" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 d-flex">
                                    <div class="notification-content flex-fill">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <h6 class="fs-14 mb-1">Trip Reminders</h6>
                                                <p class="fs-14 fw-normal">Alerts for upcoming trips (1 day, 1 week before).</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Push</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check4">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">SMS</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check5" checked>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Email</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check6" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 d-flex">
                                    <div class="notification-content flex-fill border-0">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <h6 class="fs-14 mb-1">Price Alerts</h6>
                                                <p class="fs-14 fw-normal">Notify users of price drops for flights or accommodations.</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Push</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check7" checked>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">SMS</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check8" checked>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Email</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check9">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="notification-content border-0">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <h6 class="fs-14 mb-1">Special Offers</h6>
                                                <p class="fs-14 fw-normal">Optional notifications for discounts or promotions.</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Push</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check10" checked>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">SMS</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check11">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="fs-14 mb-1">Email</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="check12" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /Security Content-->
                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


@component('components.modal-popup')
@endcomponent
@endsection
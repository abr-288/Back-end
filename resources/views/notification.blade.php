<?php $page="notification";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
Notifications
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
                            <div class="d-flex align-items-center justify-content-between ">
                                <div class=" d-flex align-items-center justify-content-center ">
                                    <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image" class="img-fluid avatar avatar-lg rounded-circle flex-shrink-0 me-1">
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
                                <div class="message-content">
                                    <a href="{{url('notification')}}" class="d-flex align-items-center active">
                                        <i class="isax isax-notification-bing5"></i> Notifications
                                    </a>
                                    <span class="msg-count bg-purple rounded-circle">05</span>
                                </div>
                            </li>
                            <li>
                                <a href="{{url('profile-settings')}}" class="d-flex align-items-center">
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

            <!-- Notifications -->
            <div class="col-xl-9 col-lg-8">
                <div class="card shadow-none mb-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                            <h6>Notifications</h6>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="btn btn-light btn-sm d-flex align-items-center me-2"><i class="isax isax-tick-square me-2"></i>Mark all as Read</a>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card notification-card">
                            <div class="card-body d-sm-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-teal flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-calendar-edit5"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">Booking Confirmation</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        Your booking for the <span class="text-gray-9 fw-medium mx-1"> Super Aquamarine</span> is confirmed! Departure on <span class="text-gray-9 fw-medium mx-1"> 03 Oct 2024</span> from
                                        <span class="text-gray-9 fw-medium ms-1"> Barcelona</span> . <i class="ti ti-point-filled text-primary"></i>
                                    </p>
                                    <p class="text-gray-9">2 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card notification-card">
                            <div class="card-body d-sm-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-pink flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-note-26"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">Thank You Post-Trip</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class="mb-1">Thank you for traveling with Dream Tour! We hope you enjoyed your trip.</p>
                                    <p class="text-gray-9">10 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card notification-card">
                            <div class="card-body d-sm-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-purple flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-calendar-remove5"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">Rescheduling Notification</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        Your Hotel booking of <span class="text-gray-9 fw-medium mx-1"> Suite Room</span> on <span class="text-gray-9 fw-medium mx-1"> 15 Jan 2025</span> has been rescheduled to
                                        <span class="text-gray-9 fw-medium ms-1"> 20 May 2025</span>
                                    </p>
                                    <p class="text-gray-9">1 day ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card notification-card mb-0">
                            <div class="card-body d-sm-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-primary flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-info-circle5"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">Pre-Tour Information</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        Your<span class="text-gray-9 fw-medium mx-1">Mountain Valley</span> is on <span class="text-gray-9 fw-medium mx-1">15 May 2024.</span> Please arrive at los Angeles
                                    </p>
                                    <p class="text-gray-9">2 mins ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Notifications -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->
@endsection
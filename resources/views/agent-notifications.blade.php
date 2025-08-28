<?php $page="agent-notifications";?>
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
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <img src="{{URL::asset('build/img/users/user-43.jpg')}}" alt="image" class="img-fluid rounded-circle">
                            <a href="{{url('agent-settings')}}" class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i class="isax isax-edit-2 fs-14"></i></a>
                        </div>
                        <h6 class="fs-16">Chris Foxy</h6>
                        <p class="fs-14 mb-2">Member Since 10 May 2025</p>
                        <div class="d-flex align-items-center justify-content-center notify-item">
                            <a href="{{url('agent-notifications')}}" class="rounded-circle btn btn-primary text-white d-flex align-items-center justify-content-center p-0 me-2 position-relative">
                                <i class="isax isax-notification-bing5 fs-20"></i>
                                <span class="position-absolute p-1 bg-secondary rounded-circle"></span>
                            </a>
                            <a href="{{url('agent-chat')}}" class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 position-relative">
                                <i class="isax isax-message-square5 fs-20"></i>
                                <span class="position-absolute p-1 bg-danger rounded-circle"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li>
                                <a href="{{url('agent-dashboard')}}" class="d-flex align-items-center">
                                    <i class="isax isax-grid-55 me-2"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{url('agent-listings')}}" class="d-flex align-items-center">
                                    <i class="isax isax-menu-14 me-2"></i>Listings
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="d-block"><i class="isax isax-calendar-tick5 me-2"></i><span>Bookings</span><span class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="{{url('agent-hotel-booking')}}" class="fs-14 d-inline-flex align-items-center">Hotels</a>
                                    </li>
                                    <li>
                                        <a href="{{url('agent-car-booking')}}" class="fs-14 d-inline-flex align-items-center">Cars</a>
                                    </li>
                                    <li>
                                        <a href="{{url('agent-cruise-booking')}}" class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="{{url('agent-tour-booking')}}" class="fs-14 d-inline-flex align-items-center">Tour</a>
                                    </li>
                                    <li>
                                        <a href="{{url('agent-flight-booking')}}" class="fs-14 d-inline-flex align-items-center">Flights</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('agent-enquirers')}}" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5 me-2"></i>Enquiries
                                </a>
                            </li>
                            <li>
                                <a href="{{url('agent-earnings')}}" class="d-flex align-items-center">
                                    <i class="isax isax-wallet-add-15 me-2"></i>Earnings
                                </a>
                            </li>
                            <li>
                                <a href="{{url('agent-review')}}" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5 me-2"></i>Reviews
                                </a>
                            </li>
                            <li>
                                <a href="{{url('agent-settings')}}" class="d-flex align-items-center">
                                    <i class="isax isax-setting-25"></i> Settings
                                </a>
                            </li>
                            <li class="logout-link">
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
                                <span class="avatar avatar-lg rounded-circle bg-purple flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-calendar-edit5"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">New Booking Alert</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        You have a new booking request! Check the details and confirm the reservation.
                                        <i class="ti ti-point-filled text-primary"></i>
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
                                        <h6 class="fs-16">Maintenance Notice</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        Scheduled system maintenance will occur from
                                        <span class="text-gray-9 fw-medium mx-1"> 10:30 PM </span> to 
                                        <span class="text-gray-9 fw-medium mx-1"> 11:30 PM</span> 
                                        Please plan accordingly.
                                    </p>
                                    <p class="text-gray-9">10 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card notification-card">
                            <div class="card-body d-sm-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-danger flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
                                    <i class="isax isax-calendar-remove5"></i>
                                </span>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-16">Booking Cancellation</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        A customer has cancelled their booking for 
                                        <span class="text-gray-9 fw-medium ms-1">LaughFest Carnival</span>
                                        Review the cancellation and update your records.
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
                                        <h6 class="fs-16">Booking Reminder</h6>
                                        <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                    </div>
                                    <p class=" mb-1">
                                        Reminder: You have an upcoming booking for
                                        <span class="text-gray-9 fw-medium ms-1">Shirley Bryant</span> in
                                        <span class="text-gray-9 fw-medium ms-1"> Mountain Valley</span> on
                                        <span class="text-gray-9 fw-medium ms-1"> 15 May 2024</span>
                                        Review the cancellation and update your records.
                                    </p>
                                    <p class="text-gray-9">2 days ago</p>
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





@component('components.modal-popup')
@endcomponent
@endsection
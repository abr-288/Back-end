<?php $page="security-settings";?>
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
		Settings
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
                                <a href="javascript:void(0);" class="d-block"><i
                                        class="isax isax-calendar-tick5"></i><span>My Bookings</span><span
                                        class="menu-arrow"></span></a>
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
                                    <a href="{{url('notification')}}" class="d-flex align-items-center">
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
                            <a href="{{url('security-settings')}}" class="active ps-3"><i class="isax isax-shield-tick me-2"></i>Security</a>
                            <a href="{{url('notification-settings')}}"><i class="isax isax-notification me-2"></i>Notifications</a>
                            <a href="{{url('integration-settings')}}" class="pe-3"><i class="isax isax-hierarchy me-2"></i>Integrations</a>
                        </div>

                        <!-- Security Content -->
                        <div class="row gy-2">
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Google Authenticator</h6>
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input" type="checkbox" role="switch" id="check1" checked>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Google Authenticator provides 6-digit codes for 2FA</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Password</h6>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-1" data-bs-toggle="modal" data-bs-target="#changePassword">Change</a>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Last Changed 15 Oct 2024, 09:00 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Two Factor</h6>
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input" type="checkbox" role="switch" id="check2" checked>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Receive codes via SMS or email every time you login</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Phone Number Verification</h6>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-xs me-2 mb-1">Remove</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#change-phone" class="btn btn-primary btn-xs mb-1">Change</a>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Last Changed 15 Oct 2024, 09:00 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Email Verification</h6>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-xs me-2 mb-1">Remove</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#change-email" class="btn btn-primary btn-xs mb-1">Change</a>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Verified Email : info@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Device Management</h6>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#device-management" class="btn btn-primary btn-xs mb-1">Manage</a>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Last Changed 18 Oct 2024, 11:15 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill border-0">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Account Activity</h6>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#acc-activity" class="btn btn-primary btn-xs mb-1">View</a>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Last Changed 04 Nov 2024, 04:30 PM</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill border-0">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Delete Account</h6>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-account" class="btn btn-primary btn-xs mb-1">Delete</a>
                                        </div>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Refers to permanently deleting a user's account and data</p>
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
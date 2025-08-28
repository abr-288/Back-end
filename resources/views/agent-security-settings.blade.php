<?php $page="agent-security-settings";?>
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
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <img src="{{URL::asset('build/img/users/user-43.jpg')}}" alt="image" class="img-fluid rounded-circle">
                            <a href="{{url('agent-settings')}}" class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i class="isax isax-edit-2 fs-14"></i></a>
                        </div>
                        <h6 class="fs-16">Chris Foxy</h6>
                        <p class="fs-14 mb-2">Member Since 10 May 2025</p>
                        <div class="d-flex align-items-center justify-content-center notify-item">
                            <a href="{{url('agent-notifications')}}" class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 me-2 position-relative">
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
                                <a href="{{url('agent-settings')}}" class="d-flex align-items-center  active">
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

            <!-- Profile Settings -->
            <div class="col-xl-9 col-lg-8">
                <div class="card settings mb-0">
                    <div class="card-header">
                        <h6>Settings</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div class="settings-link d-flex align-items-center flex-wrap">
                            <a href="{{url('agent-settings')}}"><i class="isax isax-user-octagon me-2"></i>Edit Profile</a>
                            <a href="{{url('agent-account-settings')}}"><i class="isax isax-wallet-money me-2"></i>Account Settings</a>
                            <a href="{{url('agent-security-settings')}}" class="active"><i class="isax isax-shield-tick me-2"></i>Security</a>
                            <a href="{{url('agent-plans-settings')}}"><i class="isax isax-star me-2"></i>Plans & Billing</a>
                        </div>

                        <!-- Security Content -->
                        <div class="row gy-2">
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="fs-14 mb-1">Password</h6>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-1" data-bs-toggle="modal" data-bs-target="#changePassword">Change</a>
                                    </div>
                                    <p class="fs-14 text-gray-6 fw-normal">Last Changed 15 Oct 2024, 09:00 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
                                <div class="security-content flex-fill bg-gray-transparent rounded border-0 mb-2">
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
<?php $page="profile-settings";?>
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
		Profile Settings
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
                    <div class="card-body pb-3">
                        <div class="settings-link d-flex align-items-center flex-wrap">
                            <a href="{{url('profile-settings')}}" class="active ps-3"><i class="isax isax-user-octagon me-2"></i>Profile Settings</a>
                            <a href="{{url('security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                            <a href="{{url('notification-settings')}}"><i class="isax isax-notification me-2"></i>Notifications</a>
                            <a href="{{url('integration-settings')}}" class="pe-3"><i class="isax isax-hierarchy me-2"></i>Integrations</a>
                        </div>

                        <!-- Settings Content -->
                        <div class="settings-content mb-3">
                            <h6 class="fs-16 mb-3">Basic Information</h6>
                            <div class="row gy-2">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                        <div>
                                            <p class="fs-14 text-gray-6 fw-normal mb-2">Recommended dimensions are typically 400 x 400 pixels.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <label class="upload-btn" for="fileUpload">Upload</label>
                                                    <input type="file" id="fileUpload" style="display: none;">
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-light btn-md">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">Phone</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="settings-content">
                            <h6 class="fs-16 mb-3">Address Information</h6>
                            <div class="row gy-2">
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">State</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>California</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">City</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>New York</option>
                                            <option>Tokyo </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Content-->

                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                        </div>
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
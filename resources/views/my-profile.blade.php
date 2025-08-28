<?php $page="my-profile";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		My Profile
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		My Profile
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
                                <a href="{{url('my-profile')}}" class="d-flex align-items-center active">
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

            <!-- My Profile -->
            <div class="col-xl-9 col-lg-8">
                <div class="card shadow-none mb-0">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6>My Profile</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{url('profile-settings')}}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"><i class="isax isax-edit-2 fs-14"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="fs-16 mb-3">Basic Information</h6>
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-xl flex-shrink-0 me-3 ">
                                <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="Img" class="img-fluid rounded">
                            </span>
                            <div class="profile-upload">
                                <div class="mb-2">
                                    <p class="fs-12">Recommended image size is 40px x 40px</p>
                                </div>
                                <div class="profile-uploader d-flex align-items-center">
                                    <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                        Upload
                                        <input type="file" class="form-control image-sign" multiple="">
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="row border-bottom pb-2 mb-3">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <h6 class="fs-14">First Name</h6>
                                    <p>Jeffrey </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <h6 class="fs-14">Last Name</h6>
                                    <p>Wilson</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <h6 class="fs-14">Email</h6>
                                    <p>chrfo2356@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <h6 class="fs-14">Phone</h6>
                                    <p>+1 12656 26654</p>
                                </div>
                            </div>
                        </div>
                        <h6 class="fs-16 mb-3">Address Information</h6>
                        <div class="row g-2">
                            <div class="col-md-12">
                                <div>
                                    <h6 class="fs-14">Address</h6>
                                    <p>4530 Clousson Road, Houston </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h6 class="fs-14">Country</h6>
                                    <p>United States Of America</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h6 class="fs-14">State</h6>
                                    <p>California</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h6 class="fs-14">City</h6>
                                    <p>San Francisco</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h6 class="fs-14">Postal Code</h6>
                                    <p>94105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /My Profile -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@component('components.modal-popup')
@endcomponent
@endsection
<?php $page="customer-tour-booking";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
MY Bookings
@endslot
@slot('item1')
index
@endslot
@slot('item2')
Tours
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
                                <a href="javascript:void(0);" class="d-block active subdrop">
                                    <i class="isax isax-calendar-tick5"></i><span>My Bookings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('customer-flight-booking')}}" class="fs-14 d-inline-flex align-items-center">Flights</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-hotel-booking')}}" class="fs-14 d-inline-flex align-items-center ">Hotels</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-car-booking')}}" class="fs-14 d-inline-flex align-items-center ">Cars</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-cruise-booking')}}" class="fs-14 d-inline-flex align-items-center ">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="{{url('tour-booking')}}" class="fs-14 d-inline-flex align-items-center active">Tour</a>
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
                                <a href="{{url('wishlist')}}" class="d-flex align-items-center">
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

            <!-- Hotel Booking -->
            <div class="col-xl-9 col-lg-8">

                <!-- Booking Header -->
                <div class="card booking-header">
                    <div class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                        <div>
                            <h6>Tour</h6>
                            <p class="fs-14 text-gray-6 fw-normal ">No of Booking : 40</p>
                        </div>

                        <div class="d-flex align-items-center flex-wrap">
                            <div class="input-icon-start  me-3 position-relative">
                                <span class="icon-addon">
                                    <i class="isax isax-calendar-edit fs-14"></i>
                                </span>
                                <input type="text" class="form-control date-range bookingrange" placeholder="Select" value="Academic Year : 2024 / 2025">
                            </div>
                            <div class="dropdown ">
                                <a href="javascript:void(0);" class="dropdown-toggle btn border text-gray-6 rounded  fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-file-export me-2 fs-14 text-gray-6"></i>Export
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                                class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Header -->

                <!-- Car-Booking List -->
                <div class="card hotel-list">
                    <div class="card-body p-0">
                        <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                            <h6 class="">Booking List</h6>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="input-icon-start  me-2 position-relative">
                                    <span class="icon-addon">
                                    <i class="isax isax-search-normal-1 fs-14"></i>
                                </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tour Type
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Adventure Tourism</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Escorted Tour</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ground Tour</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Upcoming</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center sort-by">
                                    <span class="fs-14 text-gray-9 fw-medium">Sort By :</span>
                                    <div class="dropdown me-3">
                                        <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                             Recommended
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Hotel List -->
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tour & Type</th>
                                        <th>Travellers</th>
                                        <th>Days</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#TR-1245</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-20.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Joy Jubilee Jamboree</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Adventure tourism</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 1 Child
                                        </td>
                                        <td>4 Days</td>
                                        <td>$11,569</td>
                                        <td>15 May 2025</td>
                                        <td>
                                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upcoming"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#TR-3215</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">LaughFest Carnival</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Escorted tour</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 2 Child
                                        </td>
                                        <td>3 Days</td>
                                        <td>$10,745</td>
                                        <td>20 May 2025</td>
                                        <td>
                                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upcoming"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#TR-4581</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-22.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">PlayPalooza Part</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Ground tour</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 1 Child
                                        </td>
                                        <td>2 Days</td>
                                        <td>$8,160</td>
                                        <td>04 Jun 2025</td>
                                        <td>
                                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pending"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#pending">#TR-6545</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-23.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Romantic Places </a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Sightseeing tours</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            1 Adult, 1 Child
                                        </td>
                                        <td>5 Days</td>
                                        <td>$14,840</td>
                                        <td>17 Jun 2025</td>
                                        <td>
                                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pending"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#cancelled">#TR-3256</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-24.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Whimsy Wonderland</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Sightseeing tours	</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 1 Child
                                        </td>
                                        <td>4 Days</td>
                                        <td>$10,450</td>
                                        <td>25 Jun 2025</td>
                                        <td>
                                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upcoming"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#cancelled">#TR-3654</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-25.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Giggles & Games Gala</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Culinary tourism</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            3 Adults, 2 Child
                                        </td>
                                        <td>3 Days</td>
                                        <td>$12,600</td>
                                        <td>02 Jul 2025</td>
                                        <td>
                                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#completed">#TR-1458</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-26.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Fitness Frenzy</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Domestic tour operators</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 2 Child
                                        </td>
                                        <td>2 Days</td>
                                        <td>$9,380</td>
                                        <td>12 Jul 2025</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#completed"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#completed">#TR-6589</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-27.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Foodie Fiesta</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Newyork</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 1 Child
                                        </td>
                                        <td>5 Days</td>
                                        <td>$10,400</td>
                                        <td>26 Jul 2025</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#completed"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#completed">#TR-2315</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-28.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Dare DevCon</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Agritourism</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            2 Adults, 2 Child
                                        </td>
                                        <td>4 Days</td>
                                        <td>$12,810</td>
                                        <td>10 Aug 2025</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#completed"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#completed">#TR-5414</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('tour-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/tours/tours-29.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('tour-details')}}">Innovation Ignited</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Romantic</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            3 Adults, 1 Child
                                        </td>
                                        <td>3 Days</td>
                                        <td>$15,450</td>
                                        <td>22 Aug 2025</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#completed"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Hotel List -->

                    </div>
                </div>
                <!-- /Car-Booking List -->

                <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <div class="value d-flex align-items-center">
                        <span>Show</span>
                        <select>
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                        <span>entries</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                        <nav aria-label="Page navigation">
                            <ul class="paginations d-flex justify-content-center align-items-center">
                                <li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="javascript:void(0);">1</a></li>
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">2</a></li>
                                <li class="page-item "><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">3</a></li>
                            </ul>
                        </nav>
                        <a href="javascript:void(0);"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- /Hotel Booking -->
        </div>
    </div>
</div>
<!-- /Page Wrapper -->



@endsection
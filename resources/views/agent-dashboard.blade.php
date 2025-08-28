<?php $page="agent-dashboard";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Agent Dashboard
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Agent Dashboard
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
                                <a href="{{url('agent-dashboard')}}" class="d-flex align-items-center active">
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

            <div class="col-xl-9 col-lg-8">                    
                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2">
                                    <i class="isax isax-calendar-15 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Bookings</p>
                                <h5 class="mb-2">456</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14"><i class="isax isax-arrow-up-15 me-1 text-success"></i>20% From Last Month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-orange mb-2">
                                    <i class="isax isax-money-time5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Listings</p>
                                <h5 class="mb-2">23</h5>
                                <a href="{{url('agent-listings')}}" class="fs-14 link-primary text-decoration-underline">View All</a>   
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-info mb-2">
                                    <i class="isax isax-money-send5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Earnings</p>
                                <h5 class="mb-2">$5,6560</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14"><i class="isax isax-arrow-down5 me-1 text-danger"></i>15% From Last Month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-indigo mb-2">
                                    <i class="isax isax-magic-star5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Reviews</p>
                                <h5 class="mb-2">62</h5>
                                <a href="{{url('agent-review')}}" class="fs-14 link-primary text-decoration-underline">View All</a>   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Bookings Statistics -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h6>Bookings Statistics</h6>
                                    <div class="dropdown ">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>2025
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2024
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2023
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <div id="booking-chart"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon teal">Hotels</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">16</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon secondary">Flights</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">12</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon purple">Cars</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">14</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon dark">Cruise</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">16</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <h6 class="border-icon primary">Tour</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">04</span> Bookings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- /Bookings Statistics -->

                    <!-- Earnings -->
                    <div class="col-xl-8 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h6>Earnings</h6>
                                    <div class="dropdown ">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>2025
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2024
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2023
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="mb-2">
                                            <p class="mb-0">Total Earnings this Year</p>
                                            <h3>$20,659</h3>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="fs-14"><span class="badge badge-soft-success badge-md border border-success rounded-pill me-2"><i class="isax isax-arrow-up-3 "></i>12%</span>vs last years</p>
                                        </div>
                                    </div>
                                    <div id="earning-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Earnings -->                        

                </div>

                <div class="row">

                    <!-- Recently Added -->
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <h6 class="mb-4">Recently Added</h6>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('hotel-details')}}" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/hotels/hotel-20.jpg')}}" class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="{{url('hotel-details')}}">The Grand Horizon</a> <span class="badge badge-soft-info badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Hotels</span></h6>
                                            <p class="fs-14">Last Booked : 25 Apr 2025</p>
                                        </div>
                                    </div>
                                    <a href="{{url('agent-hotel-booking')}}" class="btn rebook-btn btn-sm">06 Bookings</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('tour-details')}}" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/tours/tours-28.jpg')}}" class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="{{url('tour-details')}}">Dare DevCon</a> <span class="badge badge-soft-pink badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Tour</span></h6>
                                            <p class="fs-14">Last Booked : 16 May 2025</p>
                                        </div>
                                    </div>
                                    <a href="{{url('agent-tour-booking')}}" class="btn rebook-btn btn-sm">12 Bookings</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('flight-details')}}" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/flight/flight-05.jpg')}}" class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="{{url('flight-details')}}">Altair 333</a> <span class="badge badge-soft-teal badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Flight</span></h6>
                                            <p class="fs-14">Last Booked : 25 May 2025</p>
                                        </div>
                                    </div>
                                    <a href="{{url('agent-flight-booking')}}" class="btn rebook-btn btn-sm">14 Bookings</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('cruise-details')}}" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/cruise/cruise-28.jpg')}}" class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="{{url('cruise-details')}}">Oceania Cruises</a> <span class="badge badge-soft-cyan badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Cruise</span></h6>
                                            <p class="fs-14">Last Booked : 18 Jun 2025</p>
                                        </div>
                                    </div>
                                    <a href="{{url('agent-cruise-booking')}}" class="btn rebook-btn btn-sm">22 Bookings</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('tour-details')}}" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/tours/tours-26.jpg')}}" class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="{{url('tour-details')}}">Fitness Frenzy</a> <span class="badge badge-soft-pink badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Tour</span></h6>
                                            <p class="fs-14">Last Booked : 25 May 2025</p>
                                        </div>
                                    </div>
                                    <a href="{{url('agent-tour-booking')}}" class="btn rebook-btn btn-sm">40 Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Recently Added -->

                    <!-- Recent Invoices -->
                    <div class="col-xxl-7 col-xl-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4 gap-2">
                                    <h6>Latest Invoices</h6>
                                </div>
                                <div class="card shadow-none mb-4">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between align-items-center flex-fill">
                                            <div>
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="{{url('invoices')}}" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12565</a>
                                                    <p class="fs-14">Date: 15 May 2024</p>
                                                </div>
                                                <h6 class="fs-16 fw-medium"><a href="{{url('flight-details')}}">Cloudrider 789</a></h6>
                                            </div>
                                            <div class="text-end">
                                                <p class="fs-14 mb-1">Amount</p>
                                                <h6 class="fw-medium">$569</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none mb-4">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between align-items-center flex-fill">
                                            <div>
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="{{url('invoices')}}" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12564</a>
                                                    <p class="fs-14">Date: 13 May 2024</p>
                                                </div>
                                                <h6 class="fs-16 fw-medium"><a href="{{url('hotel-details')}}">The Luxe Haven</a></h6>
                                            </div>
                                            <div class="text-end">
                                                <p class="fs-14 mb-1">Amount</p>
                                                <h6 class="fw-medium">$430</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none mb-4">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between align-items-center flex-fill">
                                            <div>
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="{{url('invoices')}}" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12563</a>
                                                    <p class="fs-14">Date: 10 May 2024</p>
                                                </div>
                                                <h6 class="fs-16 fw-medium"><a href="{{url('car-details')}}">Ford Mustang 4.0 AT</a></h6>
                                            </div>
                                            <div class="text-end">
                                                <p class="fs-14 mb-1">Amount</p>
                                                <h6 class="fw-medium">$380</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between align-items-center flex-fill">
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1"><a href="{{url('cruise-details')}}">Super Aquamarine</a></h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <a href="{{url('invoices')}}" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12562</a>
                                                    <p class="fs-14">Date: 04 May 2024</p>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <p class="fs-14 mb-1">Amount</p>
                                                <h6 class="fw-medium">$475</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Invoices -->

                </div>
                
                <!-- Add Lists -->
                <div class="row row-cols-1 row-cols-md-3 row-cols-xl-5 justify-content-center">
                    <div class="col">
                        <div class="card bg-success-100 border-0 shadow-none">
                           <div class="card-body">
                                <h6 class="mb-1">4 Hotels</h6>
                                <a href="{{url('add-hotel')}}" class="fs-14 fw-medium link-default text-decoration-underline">Add New Hotels</a>
                           </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-pink-100 border-0 shadow-none">
                           <div class="card-body">
                                <h6 class="mb-1">4 Flights</h6>
                                <a href="{{url('add-flight')}}" class="fs-14 fw-medium link-primary text-decoration-underline">Add New Flight</a>
                           </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-danger-100 border-0 shadow-none">
                           <div class="card-body">
                                <h6 class="mb-1">5 Tours</h6>
                                <a href="{{url('add-tour')}}" class="fs-14 fw-medium link-default text-decoration-underline">Add New Tour</a>
                           </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-purple-100 border-0 shadow-none">
                           <div class="card-body">
                                <h6 class="mb-1">9 Cars</h6>
                                <a href="{{url('add-car')}}" class="fs-14 fw-medium link-default text-decoration-underline">Add New Car</a>
                           </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-cyan-100 border-0 shadow-none">
                           <div class="card-body">
                                <h6 class="mb-1">8 Cruise</h6>
                                <a href="{{url('add-cruise')}}" class="fs-14 fw-medium link-default text-decoration-underline">Add New Cruise</a>
                           </div>
                        </div>
                    </div>

                </div>
                <!-- /Add Lists -->
                
                <!-- Hotel-Booking List -->
                <div class="card hotel-list mb-0">
                    <div class="card-body p-0">
                        <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                            <h6 class="">Recent Bookings</h6>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hotels
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Single Room</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Double Room</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Twin Room</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-icon-start position-relative">
                                    <span class="icon-addon">
                                        <i class="isax isax-search-normal-1 fs-14"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>

                        <!-- Hotel List -->
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Hotel</th>
                                        <th>Room & Guest</th>
                                        <th>Days</th>
                                        <th>Pricing</th>
                                        <th>Booked on</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#HB-1245</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('hotel-details')}}">Hotel Athenee</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Suite Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                        </td>
                                        <td>4 Days, 3 Nights</td>
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
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#HB-3215</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/hotels/hotel-18.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('hotel-details')}}">The Luxe Haven</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">London</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Queen Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 2 Child</span>
                                        </td>
                                        <td>3 Days, 2 Nights</td>
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
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#HB-4581</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/hotels/hotel-19.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('hotel-details')}}">The Urban Retreat</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Edinburgh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Single Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                        </td>
                                        <td>2 Days, 1 Night</td>
                                        <td>$8,160</td>
                                        <td>04 Jun 2025</td>
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
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#cancelled">#HB-3654</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/hotels/hotel-22.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('hotel-details')}}">Hotel Evergreen</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Suite Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                        </td>
                                        <td>4 Days, 3 Nights</td>
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
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#pending">#HB-6545</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img src="{{URL::asset('build/img/hotels/hotel-20.jpg')}}" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a href="{{url('hotel-details')}}">The Grand Horizon</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Manchester</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Balcony View</h6>
                                            <span class="fs-14 fw-normal text-gray-6">3 Adults, 2 Child</span>
                                        </td>
                                        <td>5 Days, 4 Nights</td>
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
                                </tbody>
                            </table>
                        </div>
                        <!-- /Hotel List -->

                    </div>
                </div>
                <!-- /Hotel-Booking List -->

            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@component('components.modal-popup')
@endcomponent
@endsection
<?php $page="agent-earnings";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Earnings
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Earnings
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
                                    <a href="{{url('agent-earnings')}}" class="d-flex align-items-center active">
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
                        <div class="col-xl-3">
                            <div class="card earning-box bg-primary">
                                <div class="card-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md rounded-circle mb-2"><i class="isax isax-graph5 fs-24"></i></span>
                                        <p class="text-white mb-1">Total Earning This Month</p>
                                        <h3 class="text-white mb-1">$2659</h3>
                                        <a href="#" class="text-decoration-underline text-white">View Transactions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="card card-detail shadow-none">
                                <div class="card-body">
                                    <h5 class="mb-3">Card Details</h5>
                                    <div class="row g-4">
                                        <div class="col-xl col-md-3 col-sm-6">
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-1">Bank Name</h6>
                                                <p class="fs-14">Citi Bank Inc</p>
                                            </div>
                                        </div>
                                        <div class="col-xl col-md-3 col-sm-6">
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-1">Branch Name</h6>
                                                <p class="fs-14">London</p>
                                            </div>
                                        </div>
                                        <div class="col-xl col-md-4 col-sm-6">
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-1">Account Number</h6>
                                                <p class="fs-14">5396 5250 1908 XXXX</p>
                                            </div>
                                        </div>
                                        <div class="col-xl col-md-2 col-sm-6">
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-1">Account Name</h6>
                                                <p class="fs-14">Darren</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3 mt-3 border-top">
                                        <div class="d-flex align-items-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_card" class="text-primary text-decoration-underline me-2">Edit Card</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_card" class="text-primary text-decoration-underline">Add New Card</a>
                                        </div>
                                        <div>

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#saved_card" class="text-decoration-underline">View Saved Cards</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5>Payout Details</h5>
                                <p class="fs-14">Expected payout on : 25 Jan 2025</p>
                            </div>
                            <div class="row align-items-center g-4">
                                <div class="col-md-4">
                                    <div>
                                        <p class="mb-1">Amount to be paid</p>
                                        <h5>$2,565.60</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <p class="mb-1">Last With Drawn Payment</p>
                                        <h5>$1,565.60</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-end">
                                        <a href="#withdraw_payment" data-bs-toggle="modal" class="btn btn-primary btn-sm">Withdraw Payment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <p class="mb-0">Total Earnings this Year</p>
                                        <div class="d-flex align-items-center">
                                            <h3>$20,659</h3>
                                            <p class="fs-14 ms-2">
                                                <span class="badge badge-soft-success badge-md border border-success rounded-pill me-2">
                                                    <i class="isax isax-arrow-up-3 "></i>12%
                                                </span>vs last years
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <p class="mb-0">Total Earnings Last Year</p>
                                        <h3>$16,659</h3>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="earning-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-nav listing-nav">
                        <ul class="nav mb-2">
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#earning-list">
                                    Earnings
                                </a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#withdraw-list">
                                    Withdraw
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="earning-list">
                            <!-- Earning List -->
                            <div class="card hotel-list">
                                <div class="card-body p-0">
                                    <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                        <h6 class="">Invoices</h6>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="input-icon-start  me-2 position-relative">
                                                <span class="icon-addon">
                                                <i class="isax isax-search-normal-1 fs-14"></i>
                                            </span>
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <div class="dropdown me-3">
                                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </a>
                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="input-icon-start position-relative">
                                                    <span class="icon-addon">
                                                        <i class="isax isax-calendar-edit fs-14"></i>
                                                    </span>
                                                    <input type="text" class="form-control date-range bookingrange" placeholder="Select" value="Academic Year : 2024 / 2025">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-datatable-filter table-responsive">
                                        <table class="table datatable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Invoice For</th>
                                                    <th>Service</th>
                                                    <th>Payment Type</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-1245</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Hotel Atheena Plaza</p>
                                                    </td>
                                                    <td>
                                                        Hotel
                                                    </td>
                                                    <td>
                                                        Card
                                                    </td>
                                                    <td>15 May 2025, 10:00 AM</td>
                                                    <td>$11,569</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-3215</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Antonov-12</p>
                                                    </td>
                                                    <td>
                                                        Flight
                                                    </td>
                                                    <td>
                                                        Paypal
                                                    </td>
                                                    <td>20 May 2025, 10:00 AM</td>
                                                    <td>$12,543</td>
                                                    <td>
                                                        <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-4581</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">The Queen of Ocean</p>
                                                    </td>
                                                    <td>
                                                        Cruise
                                                    </td>
                                                    <td>
                                                        Stripe
                                                    </td>
                                                    <td>27 May 2025, 10:00 AM</td>
                                                    <td>$14,697</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-6545</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Ford Mustang</p>
                                                    </td>
                                                    <td>
                                                        Car
                                                    </td>
                                                    <td>
                                                        Card
                                                    </td>
                                                    <td>12 Jun 2025, 10:00 AM</td>
                                                    <td>$10,528</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-5769</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">PlayPalooza Part</p>
                                                    </td>
                                                    <td>
                                                        Tour
                                                    </td>
                                                    <td>
                                                        Stripe
                                                    </td>
                                                    <td>18 Jun 2025, 10:00 AM</td>
                                                    <td>$12,297</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-4742</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">The Urban Retreat</p>
                                                    </td>
                                                    <td>
                                                        Hotel
                                                    </td>
                                                    <td>
                                                        Card
                                                    </td>
                                                    <td>22 Jun 2025, 10:00 AM</td>
                                                    <td>$18,349</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-9364</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Foodie Fiesta</p>
                                                    </td>
                                                    <td>
                                                        Tour
                                                    </td>
                                                    <td>
                                                        Stripe
                                                    </td>
                                                    <td>16 Jul 2025, 10:00 AM</td>
                                                    <td>$17,875</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-6184</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Nimbus 345</p>
                                                    </td>
                                                    <td>
                                                        Flight
                                                    </td>
                                                    <td>
                                                        Paypal
                                                    </td>
                                                    <td>25 Jul 2025, 10:00 AM</td>
                                                    <td>$15,175</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-8207</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">The Grand Horizon</p>
                                                    </td>
                                                    <td>
                                                        Hotel
                                                    </td>
                                                    <td>
                                                        Card
                                                    </td>
                                                    <td>14 Jul 2025, 10:00 AM</td>
                                                    <td>$12,766</td>
                                                    <td>
                                                        <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#earning_invoice">#IN-3854</a></td>
                                                    <td>
                                                        <p class="text-dark mb-0 fw-medium fs-14">Mercedes-benz</p>
                                                    </td>
                                                    <td>
                                                        Car
                                                    </td>
                                                    <td>
                                                        Paypal
                                                    </td>
                                                    <td>28 Aug 2025, 10:00 AM</td>
                                                    <td>$13,496</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#earning_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /Earning List -->
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
                        <div class="tab-pane fade" id="withdraw-list">
                             <!-- Withdraw List List -->
                             <div class="card hotel-list">
                                <div class="card-body p-0">
                                    <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                        <h6>Invoices</h6>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="input-icon-start  me-2 position-relative">
                                                <span class="icon-addon">
                                                <i class="isax isax-search-normal-1 fs-14"></i>
                                            </span>
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <div class="dropdown me-3">
                                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </a>
                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="input-icon-start position-relative">
                                                    <span class="icon-addon">
                                                        <i class="isax isax-calendar-edit fs-14"></i>
                                                    </span>
                                                    <input type="text" class="form-control date-range bookingrange" placeholder="Select" value="Academic Year : 2024 / 2025">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-datatable-filter table-responsive">
                                        <table class="table datatable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-1245</a></td>                                                
                                                    <td>15 May 2025, 10:00 AM</td>
                                                    <td>$11,569</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-3215</a></td>
                                                    <td>20 May 2025, 10:00 AM</td>
                                                    <td>$12,543</td>
                                                    <td>
                                                        <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-4581</a></td>
                                                    <td>27 May 2025, 10:00 AM</td>
                                                    <td>$14,697</td>
                                                    <td>
                                                        <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-6545</a></td>
                                                    <td>12 Jun 2025, 10:00 AM</td>
                                                    <td>$10,528</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-5769</a></td>
                                                    <td>18 Jun 2025, 10:00 AM</td>
                                                    <td>$12,297</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-4742</a></td>
                                                    <td>22 Jun 2025, 10:00 AM</td>
                                                    <td>$18,349</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-9364</a></td>
                                                    <td>16 Jul 2025, 10:00 AM</td>
                                                    <td>$17,875</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-6184</a></td>
                                                    <td>25 Jul 2025, 10:00 AM</td>
                                                    <td>$15,175</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-8207</a></td>
                                                    <td>14 Jul 2025, 10:00 AM</td>
                                                    <td>$12,766</td>
                                                    <td>
                                                        <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#withdraw_invoice">#WR-3854</a></td>
                                                    <td>28 Aug 2025, 10:00 AM</td>
                                                    <td>$13,496</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#withdraw_invoice" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /Withdraw List -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


@component('components.modal-popup')
@endcomponent
@endsection
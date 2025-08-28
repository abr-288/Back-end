<?php $page="agent-enquirers";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Enquiries
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Enquiries
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
                                    <a href="{{url('agent-enquirers')}}" class="d-flex align-items-center active">
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
                    <!-- Booking Header -->
                    <div class="card booking-header">
                        <div class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6>Enquiries</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of  Enquiries : 200</p>
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
                    <!-- /Booking Header -->

                    <!-- Hotel-Booking List -->
                    <div class="card hotel-list">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="">Enquiries List</h6>
                                <div class="d-flex align-items-center flex-wrap">
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
                                            <th>Type</th>
                                            <th>Enquiry for</th>
                                            <th>Customer Info</th>
                                            <th>Status</th>
                                            <th>Inquired On</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Hotel</a></td>
                                            <td>
                                               <h6 class="fs-14">Vivanta</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Adrian Markel</p>
                                                <a href="{{url('agent-enquiry-details')}}" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('agent-enquiry-details')}}"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Cars</a></td>
                                            <td>
                                               <h6 class="fs-14">Toyota Camry SE 400</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Timothy Brewer</p>
                                                <a href="{{url('agent-enquiry-details')}}" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('agent-enquiry-details')}}"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Flight</a></td>
                                            <td>
                                               <h6 class="fs-14">SkyBound 102</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Mark Arrington</p>
                                                <a href="{{url('agent-enquiry-details')}}" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('agent-enquiry-details')}}"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Cruise</a></td>
                                            <td>
                                               <h6 class="fs-14">Super Aquamarine</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Kenneth Palmer</p>
                                                <a href="{{url('agent-enquiry-details')}}" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('agent-enquiry-details')}}"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Tours</a></td>
                                            <td>
                                               <h6 class="fs-14">PlayPalooza Part</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Ronald Moultrie</p>
                                                <a href="{{url('agent-enquiry-details')}}" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('agent-enquiry-details')}}"><i class="isax isax-eye"></i></a>
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
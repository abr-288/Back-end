<?php $page="review";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		My Reviews
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		My Reviews
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
                                    <a href="{{url('review')}}" class="d-flex align-items-center active">
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

                <div class="col-xl-9 col-lg-8">

                    <!-- Review Title -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <div>
                                    <h6>My Reviews</h6>
                                    <p class="fs-14">No of Reviews : 60</p>
                                </div>
                                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                    <div class="me-3 ">
                                        <div class="input-icon-end position-relative">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-calendar-edit"></i>
                                            </span>
                                            <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-file-export me-1"></i>Export
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Review Title -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">2 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.0</span>Excellent service!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">It was a good location however the cocoon concept was weird. No tables, chairs etc was difficult as everything went on the floor.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hayat Hotel)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>21</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>50</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>45</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">2 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.2</span>Fantastic Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">Our first cruise was amazing, with great service, food, and excursions. Can’t wait to go again!</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Cuise Booking (Super Aquamarine)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>15</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>40</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>20</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">5 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.4</span>Amazing Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">The tour was well-organized, and the guides were knowledgeable and friendly—an unforgettable experience!</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Tour Booking (Joy Jubilee Jamboree)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>13</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>18</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>22</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">8 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.5</span>Hassle-Free Booking</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">The booking process was quick, and the car was ready on time with no issues and super convenient</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Car Booking (Volkswagen Amarok)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>16</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>28</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>26</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">10 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.7</span>Fast and Reliable</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">Booked a last-minute flight with ease, and everything went smoothly from start to finish</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Flight Booking (AstraFlight 215)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>30</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>40</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>57</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">12 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.6</span>Perfect for Family</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">The hotel was family-friendly, with spacious rooms and activities for the kids—great stay!</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hotel Athenee)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>30</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>19</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>48</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border-bottom mb-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
											<img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="user" class="img-fluid rounded-circle">
										</span>
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">15 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.1</span>Best Cruise Deals</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_review"><i class="isax isax-edit-2 me-1"></i>Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-white btn-sm border" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                    </div>
                                </div>
                                <p class="fs-16 mb-3">I found an amazing deal for my dream cruise, and the booking process was a breeze!</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <p class="fs-14 d-flex align-items-center mb-0"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Cruise Booking (Norwegian Cruise)</p>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-like-1 me-1"></i>13</a>
                                    <a href="javascript:void(0);" class="fs-14 me-3"><i class="isax isax-dislike me-1"></i>40</a>
                                    <a href="javascript:void(0);" class="fs-14 "><i class="isax isax-heart5 text-danger me-1"></i>52</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center justify-content-sm-end ">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Pagination -->
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->



@component('components.modal-popup')
@endcomponent
@endsection
<?php $page="payment";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Payments
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Payments
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
                                <a href="{{url('payment')}}" class="d-flex align-items-center active">
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

            <!-- Payments -->
            <div class="col-xl-9 col-lg-8">
                <div class="card hotel-list">
                    <div class="card-body p-0">
                        <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                            <h6>Payments</h6>
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
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-icon-end position-relative">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-calendar-edit"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Payment</th>
                                        <th>Service</th>
                                        <th>Payment Type</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-1245</a></td>
                                        <td class="text-gray-9 fw-medium">Hotel Atheena Plaza</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>15 May 2025, 10:00 AM</td>
                                        <td>$11,569</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3215</a></td>
                                        <td class="text-gray-9 fw-medium">Antonov-12</td>
                                        <td>Flight</td>
                                        <td>Paypal</td>
                                        <td>20 May 2025, 10:00 AM</td>
                                        <td>$12,543</td>
                                        <td>
                                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4581</a></td>
                                        <td class="text-gray-9 fw-medium">The Queen of Ocean</td>
                                        <td>Cruise</td>
                                        <td>Stripe</td>
                                        <td>27 May 2025, 10:00 AM</td>
                                        <td>$14,697</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6545</a></td>
                                        <td class="text-gray-9 fw-medium">Ford Mustang</td>
                                        <td>Car</td>
                                        <td>Card</td>
                                        <td>12 Jun 2025, 10:00 AM</td>
                                        <td>$10,528</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-5769</a></td>
                                        <td class="text-gray-9 fw-medium">PlayPalooza Part</td>
                                        <td>Tour</td>
                                        <td>Stripe</td>
                                        <td>18 Jun 2025, 10:00 AM</td>
                                        <td>$12,297</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4742</a></td>
                                        <td class="text-gray-9 fw-medium">The Urban Retreat</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>22 Jun 2025, 10:00 AM</td>
                                        <td>$18,349</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-9364</a></td>
                                        <td class="text-gray-9 fw-medium">Foodie Fiesta</td>
                                        <td>Tour</td>
                                        <td>Stripe</td>
                                        <td>16 Jul 2025, 10:00 AM</td>
                                        <td>$17,875</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6184</a></td>
                                        <td class="text-gray-9 fw-medium">Nimbus 345</td>
                                        <td>Flight</td>
                                        <td>Paypal</td>
                                        <td>25 Jul 2025, 10:00 AM</td>
                                        <td>$15,175</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-8207</a></td>
                                        <td class="text-gray-9 fw-medium">The Grand Horizon</td>
                                        <td>Hotel</td>
                                        <td>Card</td>
                                        <td>14 Jul 2025, 10:00 AM</td>
                                        <td>$12,766</td>
                                        <td>
                                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3854</a></td>
                                        <td class="text-gray-9 fw-medium"> Mercedes-benz </td>
                                        <td>Car</td>
                                        <td>Paypal</td>
                                        <td>28 Aug 2025, 10:00 AM</td>
                                        <td>$13,496</td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <div class="value d-flex align-items-center">
                        <span>Show</span>
                        <select class="">
                            <option>5</option>
                            <option selected>10</option>
                            <option>20</option>
                        </select>
                        <span>of 40 Results</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                        <nav aria-label="Page navigation">
                            <ul class="paginations d-flex justify-content-center align-items-center">
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">1</a></li>
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">2</a></li>
                                <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">3</a></li>
                                <li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link-1 d-flex justify-content-center align-items-center " href="javascript:void(0);">5</a></li>
                            </ul>
                        </nav>
                        <a href="javascript:void(0);"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- /Payments -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@component('components.modal-popup')
@endcomponent
@endsection
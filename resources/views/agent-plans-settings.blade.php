<?php $page="agent-plans-settings";?>
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
                    <div class="card-body">
                        <div class="settings-link d-flex align-items-center flex-wrap">
                            <a href="{{url('agent-settings')}}"><i class="isax isax-user-octagon me-2"></i>Edit Profile</a>
                            <a href="{{url('agent-account-settings')}}"><i class="isax isax-wallet-money me-2"></i>Account Settings</a>
                            <a href="{{url('agent-security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                            <a href="{{url('agent-plans-settings')}}" class="active"><i class="isax isax-star me-2"></i>Plans & Billing</a>
                        </div>

                        <div>
                            <div>
                                <h6 class="mb-3">Plans & Billing</h6>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 d-flex">
                                    <div class="card shadow-none bg-gray-transparent flex-fill">
                                        <div class="card-body">
                                            <div class="border-bottom d-flex align-items-center justify-content-between mb-3 pb-3">
                                                <h6 class="fw-medium">Active Plan</h6>
                                                <a href="#" class="btn btn-light btn-sm">Download PDF</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-4 pb-4">
                                                <div>
                                                    <h5 class="mb-1 fs-18">Standard Plan</h5>
                                                    <p class="fs-14">Valid till: May 2025 - Jun 2025</p>
                                                </div>
                                                <div>
                                                    <h4>$199</h4>
                                                    <span class="d-block fs-14">per year</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="#" class="btn btn-light btn-sm me-2">Cancel Subscription</a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#price_plane" class="btn btn-primary btn-sm">Update Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex">
                                    <div class="card shadow-none bg-gray-transparent flex-fill">
                                        <div class="card-body">
                                            <div class="border-bottom d-flex align-items-center justify-content-between mb-3 pb-3">
                                                <h6 class="fw-medium">Saved Cards</h6>
                                                <a href="#" class="btn btn-light btn-sm d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_card"><i class="isax isax-add me-1"></i>Add New Card</a>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-md-6">
                                                    <div class="card mb-0">
                                                        <div class="card-body p-3">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="payment-img d-flex align-items-center justify-content-center flex-shrink-0 rounded border me-2">
                                                                    <img src="{{URL::asset('build/img/icons/visa-3.svg')}}" alt="">
                                                                </span>
                                                                <div>
                                                                    <span class="fs-14 mb-1 d-block">Credit Card</span>
                                                                    <h6 class="fs-14 fw-medium text-truncate">Visa •••• 1568</h6>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <a href="#" class="btn btn-primary btn-sm">Default</a>
                                                                <div class="d-flex align-items-center edit-delete-icon">
                                                                    <a href="#" class="avatar rounded-circle border me-2" data-bs-toggle="modal" data-bs-target="#edit_card">
                                                                        <i class="isax isax-edit fs-14"></i>
                                                                    </a>
                                                                    <a href="#" class="avatar rounded-circle border" data-bs-toggle="modal" data-bs-target="#delete-list">
                                                                        <i class="isax isax-trash fs-14"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card mb-0">
                                                        <div class="card-body p-3">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="payment-img d-flex align-items-center justify-content-center flex-shrink-0 rounded border me-2">
                                                                    <img src="{{URL::asset('build/img/icons/visa-2.svg')}}" alt="">
                                                                </span>
                                                                <div>
                                                                    <span class="fs-14 mb-1 d-block">Debit Card</span>
                                                                    <h6 class="fs-14 fw-medium text-truncate">Mastercard •••• 1279</h6>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <a href="#" class="text-primary text-decoration-underline fs-14">Set as Default</a>
                                                                <div class="d-flex align-items-center edit-delete-icon">
                                                                    <a href="#" class="avatar rounded-circle border me-2" data-bs-toggle="modal" data-bs-target="#edit_card">
                                                                        <i class="isax isax-edit fs-14"></i>
                                                                    </a>
                                                                    <a href="#" class="avatar rounded-circle border" data-bs-toggle="modal" data-bs-target="#delete-list">
                                                                        <i class="isax isax-trash fs-14"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card hotel-list mb-0">
                                <div class="card-body p-0">
                                    <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                        <h6>Transaction History</h6>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="dropdown">
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
                                        </div>
                                    </div>

                                    <div class="custom-datatable-filter table-responsive">
                                        <table class="table datatable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Plan Name</th>
                                                    <th>Payment Method</th>
                                                    <th>Subscribed On</th>
                                                    <th>Last Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-1245</a></td>  
                                                    <td><h6 class="fs-14 fw-medium">Standard Plan</h6></td>                                              
                                                    <td>Credit Card</td>
                                                    <td>15 May 2025</td>
                                                    <td>14 Jun 2025</td>
                                                    <td>$199</td>
                                                    <td>
                                                        <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-3215</a></td>  
                                                    <td><h6 class="fs-14 fw-medium">Basic Plan</h6></td>                                              
                                                    <td>Debit Card</td>
                                                    <td>15 Apr 2025</td>
                                                    <td>14 May 2025</td>
                                                    <td>$99</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-4581</a></td>  
                                                    <td><h6 class="fs-14 fw-medium">Premium Plan</h6></td>                                              
                                                    <td>Paypal</td>
                                                    <td>15 Mar 2025</td>
                                                    <td>14 Apr 2025</td>
                                                    <td>$299</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-6545</a></td>  
                                                    <td><h6 class="fs-14 fw-medium">Basic Plan</h6></td>                                              
                                                    <td>Debit Card</td>
                                                    <td>15 Feb 2025</td>
                                                    <td>14 Mar 2025</td>
                                                    <td>$99</td>
                                                    <td>
                                                        <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-5769</a></td>  
                                                    <td><h6 class="fs-14 fw-medium">Standard Plan</h6></td>                                              
                                                    <td>Stripe</td>
                                                    <td>15 Jan 2025</td>
                                                    <td>14 Feb 2025</td>
                                                    <td>$99</td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                            <a href="#"><i class="isax isax-document-download"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
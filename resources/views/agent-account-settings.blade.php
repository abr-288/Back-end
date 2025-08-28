<?php $page="agent-account-settings";?>
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
                                <a href="{{url('agent-account-settings')}}" class="active"><i class="isax isax-wallet-money me-2"></i>Account Settings</a>
                                <a href="{{url('agent-security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                                <a href="{{url('agent-plans-settings')}}"><i class="isax isax-star me-2"></i>Plans & Billing</a>
                            </div>

                            <div>
                                <div>
                                    <h6 class="mb-3">Two-factor authentication</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card shadow-none bg-gray-transparent">
                                            <div class="card-body">
                                                <div class="border-bottom mb-3 pb-3">
                                                    <h6 class="fw-medium mb-1">Set up using an Email</h6>
                                                    <p class="fs-14">Enter your email which we send you code</p>
                                                </div>
                                                <form action="{{url('agent-account-settings')}}">
                                                    <div class="d-flex align-items-end flex-wrap flex-sm-nowrap row-gap-3">
                                                        <div class="flex-fill">
                                                            <label class="form-label">Email Address</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="ms-2 mb-2">
                                                            <a href="#" class="btn btn-primary btn-sm">Send Code</a>
                                                        </div>
                                                    </div>
                                                    <div class="digit-group">
                                                        <label class="form-label">Enter the code generated by Email</label>
                                                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2">
                                                            <input type="text" class="form-control me-2" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" maxlength="1">
                                                            <input type="text" class="form-control" id="digit-6" name="digit-6" data-next="digit-7" data-previous="digit-5" maxlength="1">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card shadow-none bg-gray-transparent">
                                            <div class="card-body">
                                                <div class="border-bottom mb-3 pb-3">
                                                    <h6 class="fw-medium mb-1">Set up using an SMS</h6>
                                                    <p class="fs-14">Enter your phone number which we send you code</p>
                                                </div>
                                                <form action="{{url('agent-account-settings')}}">
                                                    <div class="d-flex align-items-end flex-wrap flex-sm-nowrap row-gap-3">
                                                        <div class="flex-fill">
                                                            <label class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="ms-2 mb-2">
                                                            <a href="#" class="btn btn-primary btn-sm">Send Code</a>
                                                        </div>
                                                    </div>
                                                    <div class="digit-group">
                                                        <label class="form-label">Enter the code generated by SMS</label>
                                                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2">
                                                            <input type="text" class="form-control me-2" id="digit-7" name="digit-7" data-next="digit-8" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-8" name="digit-8" data-next="digit-9" data-previous="digit-7" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-9" name="digit-9" data-next="digit-10" data-previous="digit-8" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-10" name="digit-10" data-next="digit-11" data-previous="digit-9" maxlength="1">
                                                            <input type="text" class="form-control me-2" id="digit-11" name="digit-11" data-next="digit-12" data-previous="digit-10" maxlength="1">
                                                            <input type="text" class="form-control" id="digit-12" name="digit-12" data-next="digit-13" data-previous="digit-11" maxlength="1">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none bg-gray-transparent">
                                    <div class="card-header">
                                        <h6 class="mb-1 fw-medium">Linked Account</h6>
                                        <p class="fs-14">Effortlessly connect and manage accounts</p>
                                    </div>
                                    <div class="card-body link-account">
                                        <div class="row g-3">
                                            <div class="col-xl-4 col-lg-6 d-flex">
                                                <div class="card integration-card flex-fill mb-0">
                                                    <div class="card-body">
                                                        <div class="integration-content">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="icons me-2"><img src="{{URL::asset('build/img/icons/google.svg')}}" alt="icon" class="img-fluid"></span>
                                                                    <h6 class="fs-14">Google</h6>
                                                                </div>
                                                                <span class="btn bg-light btn-sm">Invoke</span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14">Used to find travel destinations, accommodations & reviews with ease.</p>
                                                            </div>
                                                            <span class="circle-check-top"><i class="isax isax-tick-circle5 fs-24 text-success"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 d-flex">
                                                <div class="card integration-card flex-fill mb-0">
                                                    <div class="card-body">
                                                        <div class="integration-content">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="icons me-2"><img src="{{URL::asset('build/img/icons/google-calender.svg')}}" alt="icon" class="img-fluid"></span>
                                                                    <h6 class="fs-14">Google Calendar</h6>
                                                                </div>
                                                                <span class="btn bg-light btn-sm">Connect</span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14">Receive reminders for upcoming trips, reservations, and itinerary updates</p>
                                                            </div>
                                                            <span class="circle-check-top"><i class="isax isax-tick-circle5 fs-24 text-success"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 d-flex">
                                                <div class="card integration-card flex-fill mb-0">
                                                    <div class="card-body">
                                                        <div class="integration-content">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="icons me-2"><img src="{{URL::asset('build/img/icons/google-map.svg')}}" alt="icon" class="img-fluid"></span>
                                                                    <h6 class="fs-14">Google Maps</h6>
                                                                </div>
                                                                <span class="btn bg-light btn-sm">Connect</span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14">Provides users with precise directions to destinations and nearby attractions.</p>
                                                            </div>
                                                            <span class="circle-check-top"><i class="isax isax-tick-circle5 fs-24 text-success"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none bg-gray-transparent">
                                    <div class="card-header">
                                        <h6 class="mb-1 fw-medium">Social Media Profile</h6>
                                        <p class="fs-14">Effortlessly connect and manage accounts</p>
                                    </div>
                                    <div class="card-body link-account">
                                       <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div>
                                                    <label class="form-label">Facebook</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <label class="form-label">Twitter</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <label class="form-label">Instagram</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <label class="form-label">Youtube</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="#" class="btn btn-light btn-sm me-2">Cancel</a>
                                    <a href="#" class="btn btn-primary btn-sm">Save</a>
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
<?php $page="wishlist";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Wishlist
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Wishlist
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
                                        <img src="{{URL::asset('build/img/users/user-lg-26.jpg')}}" alt="image" class="img-fluid avatar avatar-lg rounded-circle flex-shrink-0 me-1">
                                        <div>
                                            <h6 class="fs-16">Chris Foxy</h6>
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
                                    <a href="{{url('wishlist')}}" class="d-flex align-items-center active">
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
                    <div class="card">
                        <div class="card-body">
                            <h6>My Wishlist</h6>
                            <p class="fs-14">Items in Wishlist : 60</p>
                        </div>
                    </div>

                    <!-- Hotel Grid -->
                    <div class="hotel-list">
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-02.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-03.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Plaza Athenee</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
												<img src="{{URL::asset('build/img/users/user-01.jpg')}}" class="rounded-circle" alt="img">
											</span>
                                            <p class="fs-14 text-truncate">Beth Williams</p>
                                        </a>
                                        <div class="d-flex align-items-center text-nowrap">
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                            <p class="fs-14">(400 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="line-ellipsis fs-14">Experience luxury and comfort at our centrally located hotel, featuring modern amenities, spacious rooms, and exceptional service.</p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                    <h6 class="d-flex align-items-center mb-3">Facillities :<i class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i class="isax isax-scissor me-2 text-primary"></i><i class="isax isax-profile-2user me-2 text-primary"></i><i class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2 mb-3">$500 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Hotel Grid -->

                    <!-- Tours List -->
                    <div class="hotel-list">
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid " alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid " alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                    <div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Rainbow Mountain Valley</a></h5>
                                        <p class="fs-14 d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">
                                            <span class="me-1"><i class="ti ti-receipt text-primary"></i></span> Ecotourism
                                        </p>
                                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                        <p class="fs-14">(105 Reviews)</p>
                                    </div>
                                </div>
                                <p class="fs-14 border-bottom pb-3 mb-3">Journey through majestic peaks and serene valleys, where nature’s beauty surrounds you at every turn.</p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">4 Day, 3 Night</p>
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>14 Guests
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
											Starts From 
											<span class="ms-1 fs-18 fw-semibold text-primary">$500</span>
											<span class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$789</span>
										</h6>
                                        <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                            <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Tours List -->

                    <!-- Car List -->
                    <div class="hotel-list">
                        <div class="place-item">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-3">
                                    <div class="">
                                        <div class="d-flex align-items-center mb-1">
                                            <h5 class="text-truncate border-end pe-2 me-2"><a href="{{url('car-details')}}">Toyota Camry SE 400</a></h5>
                                            <span class="badge badge-secondary badge-sm d-flex align-items-center">Sedan</span>
                                        </div>
                                        <p class="d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                            <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle" alt="img">
                                        </a>
                                        <div class="d-flex align-items-center border-start ps-2 ms-2">
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                            <p class="fs-14">(400 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="fs-14 mb-3">Enjoy modern comfort, cutting-edge technology, and exceptional handling for every journey, from city streets to off-road adventures.</p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div class="p-2 border rounded d-flex align-items-center">
                                        <div class="d-flex flex-wrap border-end pe-2 me-2">
                                            <span class="fs-14 d-flex align-items-center text-gray-6 fw-normal text-nowrap">
													<i class="isax isax-gas-station me-1"></i>
													Fuel : 
												</span>
                                            <p class="fs-14 fw-medium ms-1"> Hybrid</p>
                                        </div>
                                        <div class="d-flex flex-wrap border-end pe-2 me-2">
                                            <span class="fs-14 d-flex align-items-center text-gray-6 fw-normal text-nowrap">
													<i class="isax isax-kanban me-1"></i>
													Gear : 
												</span>
                                            <p class="fs-14 fw-medium ms-1"> Manual</p>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="fs-14 d-flex align-items-center text-gray-6 fw-normal text-nowrap">
													<i class="isax isax-routing-2 me-1"></i>
													Travelled : 
												</span>
                                            <p class="fs-14 fw-medium ms-1">14,000 KM</p>
                                        </div>
                                    </div>
                                    <h5 class="text-primary text-nowrap">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Car List -->

                </div>


            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@component('components.modal-popup')
@endcomponent
@endsection
<?php $page="agent-listing";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Listings
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Listings
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
                                <a href="{{url('agent-listings')}}" class="d-flex align-items-center active">
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
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="place-nav listing-nav">
                        <ul class="nav mb-2">
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Hotels-list">
                                    Hotels
                                </a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars-list">
                                    Cars
                                </a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cruise-list">
                                    Cruise
                                </a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour-list">
                                    Tour
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#flight-list">
                                    Flights
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-4">
                        <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            All Listing
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">

                    <!-- Hotels List -->
                    <div class="tab-pane fade active show" id="Hotels-list">
                        <div class="card border-0">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of  Listings : 200</p>
                                </div>
                               <div>
                                <a href="{{url('add-hotel')}}" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                               </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Plaza Athenee</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$500 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Luxe Haven</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$600 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Urban Retreat</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$500 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Grand Horizon</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$400 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#" class="me-2 d-inline-flex"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="me-2 d-inline-flex"><i class="isax isax-trash"></i></a>
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Evergreen </a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$550 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Stardust Hotel</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$450 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Serene Valley</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$350 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Skyline Vista</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p> 
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$700 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->
    
                            <!-- Hotel Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-12.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-hotel')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Aurora Bliss</a></h5>
                                        <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2">$650 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Hotel Grid -->

                            <div class="col-md-12">
                                <!-- Pagination -->
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
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
                    <!-- /Hotels List -->
    
                    <!-- Cars List -->
                    <div class="tab-pane fade" id="Cars-list">
                        <div class="card border-0">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of  Listings : 200</p>
                                </div>
                               <div>
                                <a href="{{url('add-car')}}" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                               </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota Camry SE 400</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ford Mustang 4.0 AT</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ferrari 458 MM Special</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Mercedes-benz Convertible</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$400 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">BMW 3.0 Gran Turismo</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>                                        
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Infiniti QX60 </a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota 86 Sports</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>                                  
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jeep Wrangler</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->
    
                            <!-- Car Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('car-details')}}">
                                            <img src="{{URL::asset('build/img/cars/car-14.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-car')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jaguar XK</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>                                     
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->

                            <div class="col-md-12">
                                <!-- Pagination -->
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
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
                    <!-- /Cars List -->
    
                    <!-- Cruise List -->
                    <div class="tab-pane fade" id="Cruise-list">
                        <div class="card border-0">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of  Listings : 200</p>
                                </div>
                               <div>
                                <a href="{{url('add-cruise')}}" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                               </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('cruise-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Super Aquamarine</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-12.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Bonnie Yacht</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Coral Cruiser</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="#" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Harbor Haven</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('cruise-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Albert Yacht</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Shelly Yacht</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('cruise-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Sunny Sailor</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('cruise-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Ocean Voyager</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
    
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->
    
                            <!-- Cruise Grid -->
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('cruise-details')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-cruise')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Sailor’s Delight</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->

                            <div class="col-md-12">
                                <!-- Pagination -->
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
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
                    <!-- /Cruise List -->
    
                    <!-- Tour List -->
                    <div class="tab-pane fade" id="Tour-list">
                        <div class="card border-0">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of  Listings : 200</p>
                                </div>
                               <div>
                                <a href="{{url('add-hotel')}}" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                               </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Rainbow Mountain Valley</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystic Falls</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Crystal Lake</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Majestic Peaks</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$400 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Enchanted Forest</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Serene Bay</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-13.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Ancient Ruins</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-14.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystical Caves</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->
    
                            <!-- Tours Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('tour-details')}}">
                                            <img src="{{URL::asset('build/img/tours/tours-15.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-tour')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Frosted Peaks</a></h5>
                                        <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tours Grid -->

                            <div class="col-md-12">
                                <!-- Pagination -->
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
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
                    <!-- /Tour List -->

                    <!-- Flight List -->
                    <div class="tab-pane fade" id="flight-list">
                        <div class="card border-0">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of  Listings : 200</p>
                                </div>
                               <div>
                                <a href="{{url('add-flight')}}" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                               </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Antonov An-32</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Air India</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Texas</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">SkyBound 102</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Indigo</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Nimbus 345</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Indigo</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">AstraFlight 215</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Indigo</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Frankfurt</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-02.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Cloudrider 789</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Air India</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dallas</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-03.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Aether Express 901</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Indigo</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Seoul</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Voyager 658</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Air India</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Sydney</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-04.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Silverwing 505</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Air India</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at London</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
    
                            <!-- Flight Grid -->
                            <div class="col-xxl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{url('flight-details')}}">
                                            <img src="{{URL::asset('build/img/flight/flight-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{url('edit-flight')}}" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Altair 333</a></h5>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                            </span>
                                            <p class="fs-14 mb-0 me-2">Air India</p>
                                            <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Los Angeles</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <div class="d-flex flex-wrap align-items-center me-2">
                                                <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                            </div>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Flight Grid -->
                            
                            <div class="col-md-12">
                                <!-- Pagination -->
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
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
                    <!-- /Flight List -->
    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->


@component('components.modal-popup')
@endcomponent
@endsection
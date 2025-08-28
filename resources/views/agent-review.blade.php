<?php $page="agent-review";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Reviews
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Reviews
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
                                <a href="{{url('agent-review')}}" class="d-flex align-items-center active">
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

                <!-- Review Title -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                            <div>
                                <h6>Reviews</h6>
                                <p class="fs-14">No of Reviews : 60</p>
                            </div>
                            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                <div>
                                    <div class="input-icon-end position-relative">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar-edit"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Review Title -->

                <!-- Reviews -->
                <div class="card shadow-none">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/users/user-22.jpg')}}" alt="user" class="img-fluid rounded-circle">
                                        </span>
                                        <div>
                                            <h6 class="fs-16">Derek Sanchez</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">2 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.7</span>Fast and Reliable</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hayat Hotel)</p>
                                        <p class="fs-16 mb-0">Booked a last-minute flight with ease, and everything went smoothly from start to finish</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                </div>
                            </div>
                            <div class="review-reply border-top mt-3 pt-3">
                                <form action="{{url('agent-review')}}" class="reply-form">
                                    <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Reviews -->

                <!-- Reviews -->
                <div class="card shadow-none">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/users/user-20.jpg')}}" alt="user" class="img-fluid rounded-circle">
                                        </span>
                                        <div>
                                            <h6 class="fs-16">Shirley Bryant</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">3 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.2</span>Fantastic Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Cuise Booking (Super Aquamarine)</p>
                                        <p class="fs-16 mb-0">Our first cruise was amazing, with great service, food, and excursions. Can’t wait to go again!</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                </div>
                            </div>
                            <div class="review-reply border-top mt-3 pt-3">
                                <form action="{{url('agent-review')}}" class="reply-form">
                                    <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Reviews -->

                <!-- Reviews -->
                <div class="card shadow-none">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/users/user-04.jpg')}}" alt="user" class="img-fluid rounded-circle">
                                        </span>
                                        <div>
                                            <h6 class="fs-16">James Hobson</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">05 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.4</span>Amazing Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Tour Booking (Joy Jubilee Jamboree)</p>
                                        <p class="fs-16 mb-0">The tour was well-organized, and the guides were knowledgeable and friendly—an unforgettable experience!</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                </div>
                            </div>
                            <div class="review-reply border-top mt-3 pt-3">
                                <form action="{{url('agent-review')}}" class="reply-form">
                                    <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Reviews -->

                <!-- Reviews -->
                <div class="card shadow-none">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/users/user-28.jpg')}}" alt="user" class="img-fluid rounded-circle">
                                        </span>
                                        <div>
                                            <h6 class="fs-16">Emma Bright</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">08 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.5</span>Hassle-Free Booking</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Car Booking (Volkswagen Amarok)</p>
                                        <p class="fs-16 mb-0">The booking process was quick, and the car was ready on time with no issues and super convenient</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                </div>
                            </div>
                            <div class="review-reply border-top mt-3 pt-3">
                                <form action="{{url('agent-review')}}" class="reply-form">
                                    <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Reviews -->

                <!-- Reviews -->
                <div class="card shadow-none">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                            <img src="{{URL::asset('build/img/users/user-25.jpg')}}" alt="user" class="img-fluid rounded-circle">
                                        </span>
                                        <div>
                                            <h6 class="fs-16">Michael Cornejo</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="fs-14 d-flex align-items-center">10 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.6</span>Perfect for Family</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hotel Athenee)</p>
                                        <p class="fs-16 mb-0">The hotel was family-friendly, with spacious rooms and activities for the kids—great stay!</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                </div>
                            </div>
                            <div class="bg-light rounded p-3 mt-3 ms-5">
                                <p><span class="fw-medium">You Replied : </span> Booked a last-minute flight with ease, and everything went smoothly from start to finish</p>
                            </div>
                            <div class="review-reply border-top mt-3 pt-3">
                                <form action="{{url('agent-review')}}" class="reply-form">
                                    <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                </form>
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
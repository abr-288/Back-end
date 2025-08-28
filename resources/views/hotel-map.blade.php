<?php $page="hotel-map";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
        @slot('title')
		Hotels
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
        Hotels
         @endslot
        @slot('item2')
		Hotel List
        @endslot
       @endcomponent

        <!-- Page Wrapper -->
    <div class="content pb-0">
        <div class="map-content">
            <!-- Hotel Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form class="d-lg-flex">
                            <div class="d-flex  form-info">
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                        <label class="form-label fs-14 text-default mb-1">City, Property name or Location</label>
                                        <input type="text" class="form-control" value="Newyork">
                                        <p class="fs-12 mb-0">USA</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Search for City, Property name or Location">
                                                <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">USA</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Japan</h6>
                                                    <p>3000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Singapore</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Russia</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Germany</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check In</label>
                                    <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                    <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Guests</label>
                                        <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                        <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                        <h5 class="mb-3">Select Travelers &  Class</h5>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
																	  <span><i class="isax isax-minus"></i></span>
                                                                     </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
																		<span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
																	  <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
																		<span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
																	  <span><i class="isax isax-minus"></i></span>
                                                                </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
																		<span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
																	  <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
																		<span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room1" checked>
                                                    <label class="form-check-label" for="room1">
                                                        Single
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room2">
                                                    <label class="form-check-label" for="room2">
                                                        Double
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room3">
                                                    <label class="form-check-label" for="room3">
                                                        Delux
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room4">
                                                    <label class="form-check-label" for="room4">
                                                        Suite
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property" id="property1" checked>
                                                    <label class="form-check-label" for="property1">
                                                        Villa
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property" id="property2">
                                                    <label class="form-check-label" for="property2">
                                                        Condo
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property" id="property3">
                                                    <label class="form-check-label" for="property3">
                                                        Cabin
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="property" id="property4">
                                                    <label class="form-check-label" for="property4">
                                                        Apartments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                            <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Price per Night</label>
                                        <input type="text" class="form-control" value="$1000 - $15000">
                                        <p class="fs-12 mb-0">20 Offers Available</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">$500 - $2000</h6>
                                                    <p>Upto 65% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Upto 65% offers</h6>
                                                    <p>Upto 40% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">$5000 - $8000</h6>
                                                    <p>Upto 35% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">$9000 - $11000</h6>
                                                    <p>Upto 20% offers</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">$11000 - $15000</h6>
                                                    <p>Upto 10% offers</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Hotel Search -->
            <!-- Hotel Types -->
            <div class="mb-2">
                <div class="mb-3">
                    <h5 class="mb-2">Choose type of Hotels you are interested</h5>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-01.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">Condos</a></h6>
                                <p class="fs-14">216 Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-02.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">Apartments</a></h6>
                                <p class="fs-14">569 Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-03.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">Villas</a></h6>
                                <p class="fs-14">129 Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-04.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">5 Star Hotels</a></h6>
                                <p class="fs-14">600 Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-01.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">3 Start Hotels</a></h6>
                                <p class="fs-14">200 Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{ url('hotel-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/hotels/hotel-model-06.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{ url('hotel-grid')}}">2 Start Hotels</a></h6>
                                <p class="fs-14">180 Hotels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Hotel Types -->
            <div class="d-flex align-items-center justify-content-between flex-wrap recommend-wrap mb-2">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="dropdown mb-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-sm border rounded" data-bs-toggle="modal" data-bs-target="#filter_modal">
                            <i class="isax isax-filter-add me-1"></i> Filters
                        </a>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-sm border rounded" data-bs-toggle="dropdown" aria-expanded="false">
							Pricing
						</a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{ url('hotel-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Pricing</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing1" type="checkbox" id="pricing1" checked>
                                    <label class="form-check-label ms-2" for="pricing1">
                                        $50 - $100
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing2" type="checkbox" id="pricing2" checked>
                                    <label class="form-check-label ms-2" for="pricing2">
                                        $100 - $1000
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing3" type="checkbox" id="pricing3" checked>
                                    <label class="form-check-label ms-2" for="pricing3">
                                        $1000 - $5000
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="pricing4" type="checkbox" id="pricing4" checked>
                                    <label class="form-check-label ms-2" for="pricing4">
                                        $10000 - $2000
                                    </label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-sm border rounded" data-bs-toggle="dropdown" aria-expanded="false">
							Guest Ratings
						</a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{ url('hotel-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Ratings</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review01" type="checkbox" id="review01">
                                    <label class="form-check-label ms-2" for="review01">
                                        <span class="rating d-flex align-items-center">
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary"></i>
											<span class="ms-2">5 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review02" type="checkbox" id="review02">
                                    <label class="form-check-label ms-2" for="review02">
                                        <span class="rating d-flex align-items-center">
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary"></i>
											<span class="ms-2">4 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review03" type="checkbox" id="review03">
                                    <label class="form-check-label ms-2" for="review03">
                                        <span class="rating d-flex align-items-center">
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary"></i>
											<span class="ms-2">3 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review04" type="checkbox" id="review04">
                                    <label class="form-check-label ms-2" for="review04">
                                        <span class="rating d-flex align-items-center">
											<i class="fas fa-star filled text-primary me-1"></i>
											<i class="fas fa-star filled text-primary"></i>
											<span class="ms-2">2 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="review05" type="checkbox" id="review05">
                                    <label class="form-check-label ms-2" for="review05">
                                        <span class="rating d-flex align-items-center">
											<i class="fas fa-star filled text-primary"></i>
											<span class="ms-2">1 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-sm border rounded" data-bs-toggle="dropdown" aria-expanded="false">
							Amenities
						</a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{ url('hotel-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Amenities</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities1" type="checkbox" id="amenities1" checked>
                                    <label class="form-check-label ms-2" for="amenities1">Pet friendly</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities2" type="checkbox" id="amenities2">
                                    <label class="form-check-label ms-2" for="amenities2">Airport shuttle included</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities3" type="checkbox" id="amenities3">
                                    <label class="form-check-label ms-2" for="amenities3">Spa</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities4" type="checkbox" id="amenities4">
                                    <label class="form-check-label ms-2" for="amenities4">Hot tub</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities5" type="checkbox" id="amenities5">
                                    <label class="form-check-label ms-2" for="amenities5">Parking</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities6" type="checkbox" id="amenities6">
                                    <label class="form-check-label ms-2" for="amenities6">Kitchen</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities7" type="checkbox" id="amenities7">
                                    <label class="form-check-label ms-2" for="amenities7">Air conditioned</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities8" type="checkbox" id="amenities8" checked>
                                    <label class="form-check-label ms-2" for="amenities8">Cribs</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities9" type="checkbox" id="amenities9" checked>
                                    <label class="form-check-label ms-2" for="amenities9">Gym</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities10" type="checkbox" id="amenities10" checked>
                                    <label class="form-check-label ms-2" for="amenities10">Wifi Included</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="amenities11" type="checkbox" id="amenities11" checked>
                                    <label class="form-check-label ms-2" for="amenities11">Ocean view</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="input-icon mb-3 me-3">
                        <span class="input-icon-addon">
							<i class="isax isax-search-normal"></i>
						</span>
                        <input type="text" class="form-control" placeholder="Search by Hotel Name">
                    </div>
                    <div class="list-item d-flex align-items-center mb-3">
                        <a href="{{ url('hotel-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                        <a href="{{ url('hotel-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                        <a href="{{ url('hotel-map')}}" class="list-icon active  me-2"><i class="isax isax-map-1"></i></a>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                        </a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{ url('hotel-map')}}">
                                <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend1" checked>
                                    <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend2">
                                    <label class="form-check-label ms-2" for="recommend2">Price: low to high</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend3">
                                    <label class="form-check-label ms-2" for="recommend3">Price: high to low</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend4">
                                    <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend5">
                                    <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox" id="recommend6">
                                    <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="map-lists-widget border-top">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="mb-4">1920 Hotels Found on Your Search</h6>
                        <div class="list-item d-flex align-items-center shadow-md bg-white rounded-3 p-2 mb-4">
                            <a href="{{ url('hotel-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                            <a href="{{ url('hotel-list')}}" class="list-icon active"><i class="isax isax-firstline"></i></a>
                        </div>
                    </div>
                    <div class="hotel-list">
                        <div class="row justify-content-center">

                            <div class="col-md-12">

                                <!-- Hotel Grid -->
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                        <div class="img-slider image-slide owl-carousel nav-center">
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-02.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-03.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                            <a href="javascript:void(0);" class="fav-icon selected">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{ url('hotel-details')}}">Hotel Plaza Athenee</a></h5>
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
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                        <a href="{{ url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                            <a href="javascript:void(0);" class="fav-icon selected">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{ url('hotel-details')}}">The Luxe Haven</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                                    <span class="avatar avatar-md flex-shrink-0 me-2">
														<img src="{{URL::asset('build/img/users/user-02.jpg')}}" class="rounded-circle" alt="img">
													</span>
                                                    <p class="fs-14 text-truncate">Tom Andrews</p>
                                                </a>
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                                    <p class="fs-14">(360 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Stay in luxury at our hotel, featuring premium amenities, stunning cityscape views, and an on-site spa for the ultimate relaxation experience</p>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <h6 class="d-flex align-items-center mb-3">Facillities :<i class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i class="isax isax-scissor me-2 text-primary"></i><i class="isax isax-profile-2user me-2 text-primary"></i><i class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                            <h5 class="text-primary text-nowrap me-2 mb-3">$600 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                        <a href="{{ url('hotel-details')}}">
                                            <img src="{{URL::asset('build/img/hotels/hotel-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                            <a href="javascript:void(0);" class="fav-icon selected">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href="{{ url('hotel-details')}}">The Urban Retreat</a></h5>
                                                <p class="d-flex align-items-center text-truncate mb-2"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                                    <span class="avatar avatar-md flex-shrink-0 me-2">
														<img src="{{URL::asset('build/img/users/user-03.jpg')}}" class="rounded-circle" alt="img">
													</span>
                                                    <p class="fs-14 text-truncate">Rober Cowell</p>
                                                </a>
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                                    <p class="fs-14">(500 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Conveniently located near top attractions, our hotel offers modern rooms, free parking, and a complimentary breakfast to start your day right.</p>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <h6 class="d-flex align-items-center mb-3">Facillities :<i class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i class="isax isax-scissor me-2 text-primary"></i><i class="isax isax-profile-2user me-2 text-primary"></i><i class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                            <h5 class="text-primary text-nowrap me-2 mb-3">$300 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                        <div class="img-slider image-slide owl-carousel nav-center">
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-07.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-02.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-03.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                            <a href="javascript:void(0);" class="fav-icon selected">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href="{{ url('hotel-details')}}">The Grand Horizon</a></h5>
                                                <p class="d-flex align-items-center text-truncate mb-2"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                                    <span class="avatar avatar-md flex-shrink-0 me-2">
														<img src="{{URL::asset('build/img/users/user-05.jpg')}}" class="rounded-circle" alt="img">
													</span>
                                                    <p class="fs-14 text-truncate">Timothy Brewer</p>
                                                </a>
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                                    <p class="fs-14">(450 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Discover the perfect balance of luxury and affordability at our hotel, with a 24-hour concierge, free Wi-Fi, and easy access to local hotspots.</p>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <h6 class="d-flex align-items-center mb-3">Facillities :<i class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i class="isax isax-scissor me-2 text-primary"></i><i class="isax isax-profile-2user me-2 text-primary"></i><i class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                            <h5 class="text-primary text-nowrap me-2 mb-3">$400 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                        <div class="img-slider image-slide owl-carousel nav-center">
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-08.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-02.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('hotel-details')}}">
                                                    <img src="{{URL::asset('build/img/hotels/hotel-03.jpg')}}" class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                            <a href="javascript:void(0);" class="fav-icon">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href="{{ url('hotel-details')}}">Hotel Evergreen </a></h5>
                                                <p class="d-flex align-items-center text-truncate mb-2"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                                    <span class="avatar avatar-md flex-shrink-0 me-2">
														<img src="{{URL::asset('build/img/users/user-06.jpg')}}" class="rounded-circle" alt="img">
													</span>
                                                    <p class="fs-14 text-truncate">Timothy Rio</p>
                                                </a>
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                                    <p class="fs-14">(500 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Our hotel offers pet-friendly rooms, complimentary shuttle service, and comfortable accommodations just minutes from key attractions and business centers.</p>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <h6 class="d-flex align-items-center mb-3">Facillities :<i class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i class="isax isax-scissor me-2 text-primary"></i><i class="isax isax-profile-2user me-2 text-primary"></i><i class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                            <h5 class="text-primary text-nowrap me-2 mb-3">$300 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
                            </div>

                        </div>

                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0);" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
            <!-- Map -->
            <div class="col-xl-4 map-right grid-map">
                <div id="map" class="map-listing"></div>
            </div>
            <!-- /Map -->
        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.modal-popup')
    @endcomponent

@endsection
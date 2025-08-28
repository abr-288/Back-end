<?php $page="cruise-map";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Cruise
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
		Cruise 
        @endslot
        @slot('item2')
		cruise list
        @endslot
       @endcomponent
 <!-- Page Wrapper -->
 <div class="content pb-0">
    <div class="map-content">

        <!-- Cruise Search -->
        <div class="card">
            <div class="card-body">
                <div class="banner-form">
                    <form class="d-lg-flex">
                        <div class="d-flex  form-info">
                            <div class="form-item dropdown">
                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                    <label class="form-label fs-14 text-default mb-1">City, Property name or Location
                                    </label>
                                    <input type="text" class="form-control" value="Newyork">
                                    <p class="fs-12 mb-0">USA</p>
                                </div>
                                <div class="dropdown-menu dropdown-md p-0">
                                    <div class="input-search p-3 border-bottom">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
                                            <span class="input-group-text px-2 border-start-0"><i
                                                    class="isax isax-search-normal"></i></span>
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
                                    <h5 class="mb-3">Select Travelers & Class</h5>
                                    <div class="mb-3 border br-10 info-item pb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                                    <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                    <div class="custom-increment">
                                                        <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                                <button type="button"
                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                    data-type="minus" data-field="">
                                                                    <span><i class="isax isax-minus"></i></span>
                                                            </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                                <button type="button"
                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                    data-type="plus" data-field="">
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
                                                                <button type="button"
                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                    data-type="minus" data-field="">
                                                                    <span><i class="isax isax-minus"></i></span>
                                                            </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                                <button type="button"
                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                    data-type="plus" data-field="">
                                                                    <span><i class="isax isax-add"></i></span>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                                    <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">( 2-12 Yrs
                                                            )</span></label>
                                                    <div class="custom-increment">
                                                        <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                                <button type="button"
                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                    data-type="minus" data-field="">
                                                                    <span><i class="isax isax-minus"></i></span>
                                                            </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                                <button type="button"
                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                    data-type="plus" data-field="">
                                                                    <span><i class="isax isax-add"></i></span>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                                    <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs
                                                            )</span></label>
                                                    <div class="custom-increment">
                                                        <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                                <button type="button"
                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                    data-type="minus" data-field="">
                                                                    <span><i class="isax isax-minus"></i></span>
                                                            </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                                <button type="button"
                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                    data-type="plus" data-field="">
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
                        </div>
                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Cruise Search -->

        <!-- Cruise Types -->
        <div class="mb-2">
            <div class="mb-3">
                <h5 class="mb-2">Choose type of Cruise you are interested</h5>
            </div>
            <div class="row">
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-04.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">Luxury Cruise</a></h6>
                            <p class="fs-14">216 Cruises</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-02.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">Adventure Cruise</a></h6>
                            <p class="fs-14">569 Cruises</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-03.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">River Cruise</a></h6>
                            <p class="fs-14">129 Cruises</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-04.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">Family Cruise</a></h6>
                            <p class="fs-14">150 Cruises</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">Sailing Cruises</a></h6>
                            <p class="fs-14">200 Cruises</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('cruise-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cruise/cruise-06.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('cruise-grid')}}">World Cruises</a></h6>
                            <p class="fs-14">320 Cruises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cruise Types -->

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
                        <form action="{{ url('cruise-map')}}">
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
                        Cabin Types
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('cruise-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Cabin type</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review01" type="checkbox" id="review01">
                                <label class="form-check-label ms-2" for="review01">
                                    Inside
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review02" type="checkbox" id="review02">
                                <label class="form-check-label ms-2" for="review02">
                                    Oceanview
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review03" type="checkbox" id="review03">
                                <label class="form-check-label ms-2" for="review03">
                                    Balcony
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review04" type="checkbox" id="review04">
                                <label class="form-check-label ms-2" for="review04">
                                    Suite
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="review05" type="checkbox" id="review05">
                                <label class="form-check-label ms-2" for="review05">
                                    Mini-Suite
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
                        <form action="{{ url('cruise-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Amenities</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities1" type="checkbox" id="amenities1" checked>
                                <label class="form-check-label ms-2" for="amenities1">Free Wifi</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities2" type="checkbox" id="amenities2">
                                <label class="form-check-label ms-2" for="amenities2">Casinos</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities3" type="checkbox" id="amenities3">
                                <label class="form-check-label ms-2" for="amenities3">Pool</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities4" type="checkbox" id="amenities4">
                                <label class="form-check-label ms-2" for="amenities3">Fitness Centers</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities5" type="checkbox" id="amenities5">
                                <label class="form-check-label ms-2" for="amenities5">Theaters</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities6" type="checkbox" id="amenities6">
                                <label class="form-check-label ms-2" for="amenities6">Complimentary meals</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities7" type="checkbox" id="amenities7">
                                <label class="form-check-label ms-2" for="amenities7">Air conditioned</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="amenities8" type="checkbox" id="amenities8" checked>
                                <label class="form-check-label ms-2" for="amenities8">Play Areas</label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="amenities11" type="checkbox" id="amenities11" checked>
                                <label class="form-check-label ms-2" for="amenities11">Wheelchair access</label>
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
                    <input type="text" class="form-control" placeholder="Search by Cruise Name">
                </div>
                <div class="list-item d-flex align-items-center mb-3">
                    <a href="{{ url('cruise-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                    <a href="{{ url('cruise-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                    <a href="{{ url('cruise-map')}}" class="list-icon active  me-2"><i class="isax isax-map-1"></i></a>
                </div>
                <div class="dropdown mb-3">
                    <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('cruise-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Pricing</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="pricing01" type="checkbox" id="pricing01" checked>
                                <label class="form-check-label ms-2" for="pricing01">
                                    $50 - $100
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="pricing02" type="checkbox" id="pricing02" checked>
                                <label class="form-check-label ms-2" for="pricing02">
                                    $100 - $1000
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="pricing03" type="checkbox" id="pricing03" checked>
                                <label class="form-check-label ms-2" for="pricing03">
                                    $1000 - $5000
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="pricing04" type="checkbox" id="pricing04" checked>
                                <label class="form-check-label ms-2" for="pricing04">
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="map-lists-widget border-top">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <h6 class="mb-4">1920 Cruises Found on Your Search</h6>
                    <div class="list-item d-flex align-items-center shadow-md bg-white rounded-3 p-2 mb-4">
                        <a href="{{ url('cruise-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                        <a href="{{ url('cruise-list')}}" class="list-icon active"><i class="isax isax-firstline"></i></a>
                    </div>
                </div>
                <div class="hotel-list">
                    <div class="row justify-content-center">

                        <div class="col-md-12">

                            <!-- Cruise Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-02.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-04.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-03.jpg')}}" class="img-fluid" alt="img">
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
                                        <div>
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('cruise-details')}}">Super Aquamarine</a></h5>
                                            <p class="d-flex align-items-center fs-14"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2 me-2">
                                                <span class="avatar avatar-sm flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle" alt="img">
                                                </span>
                                                <p class="fs-14 text-truncate">Beth Williams</p>
                                            </a>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                            <p class="fs-14 text-truncate">(400 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 line-ellipsis mb-3">Embark on a luxurious cruise where breathtaking destinations meet world-class comfort and entertainment.</p>
                                    <div class="d-flex align-items-center justify-content-between cruise-list-item border-top flex-wrap row-gap-2 pt-3 mb-3">
                                        <p class="fs-14 mb-0"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span class="text-dark fw-medium">2021</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-user me-1"></i>Guests : <span class="text-dark fw-medium">4</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span class="text-dark fw-medium">88.47 m</span></p>
                                        <p class="fs-14"><i class="isax isax-flash-1 me-1"></i>Speed : <span class="text-dark fw-medium">19 Knots</span></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i class="isax isax-home-wifi me-2"></i><i class="isax isax-scissor me-2"></i><i class="isax isax-profile-2user me-2"></i><i class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$500 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->

                            <!-- Cruise Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-03.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-3">
                                        <div>
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('cruise-details')}}">Bonnie Yacht</a></h5>
                                            <p class="d-flex align-items-center fs-14"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2  me-2">
                                                <span class="avatar avatar-sm flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle" alt="img">
                                                </span>
                                                <p class="fs-14 text-truncate">Tom Andrews</p>
                                            </a>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                            <p class="fs-14 text-truncate">(300 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 line-ellipsis mb-3">Embark on a luxurious cruise where breathtaking destinations meet world-class comfort and entertainment.</p>
                                    <div class="d-flex align-items-center justify-content-between cruise-list-item border-top flex-wrap row-gap-2 pt-3 mb-3">
                                        <p class="fs-14 mb-0"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span class="text-dark fw-medium">2020</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-user me-1"></i>Guests : <span class="text-dark fw-medium">3</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span class="text-dark fw-medium">70.63 m</span></p>
                                        <p class="fs-14"><i class="isax isax-flash-1 me-1"></i>Speed : <span class="text-dark fw-medium">17 Knots</span></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i class="isax isax-home-wifi me-2"></i><i class="isax isax-scissor me-2"></i><i class="isax isax-profile-2user me-2"></i><i class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$400 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->

                            <!-- Cruise Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider  owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-01.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-08.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-07.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="javascript:void(0);" class="fav-icon ">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-3">
                                        <div>
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('cruise-details')}}">Coral Cruiser</a></h5>
                                            <p class="d-flex align-items-center fs-14"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2  me-2">
                                                <span class="avatar avatar-sm flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle" alt="img">
                                                </span>
                                                <p class="fs-14 text-truncate">Robert Cogswell</p>
                                            </a>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                            <p class="fs-14 text-truncate">(320 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 line-ellipsis mb-3">Embark on a luxurious cruise where breathtaking destinations meet world-class comfort and entertainment.</p>
                                    <div class="d-flex align-items-center justify-content-between cruise-list-item border-top flex-wrap row-gap-2 pt-3 mb-3">
                                        <p class="fs-14 mb-0"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span class="text-dark fw-medium">2017</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-user me-1"></i>Guests : <span class="text-dark fw-medium">4</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span class="text-dark fw-medium">75.12 m</span></p>
                                        <p class="fs-14"><i class="isax isax-flash-1 me-1"></i>Speed : <span class="text-dark fw-medium">20 Knots</span></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i class="isax isax-home-wifi me-2"></i><i class="isax isax-scissor me-2"></i><i class="isax isax-profile-2user me-2"></i><i class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$550 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->

                            <!-- Cruise Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-04.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="javascript:void(0);" class="fav-icon ">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-3">
                                        <div>
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('cruise-details')}}">Harbor Haven</a></h5>
                                            <p class="d-flex align-items-center fs-14"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-flex align-items-center overflow-hidden border-end pe-2  me-2">
                                                <span class="avatar avatar-sm flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle" alt="img">
                                                </span>
                                                <p class="fs-14 text-truncate">Kenneth Palmer</p>
                                            </a>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.3</span>
                                            <p class="fs-14 text-truncate">(380 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 line-ellipsis mb-3">Embark on a luxurious cruise where breathtaking destinations meet world-class comfort and entertainment.</p>
                                    <div class="d-flex align-items-center justify-content-between cruise-list-item border-top flex-wrap row-gap-2 pt-3 mb-3">
                                        <p class="fs-14 mb-0"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span class="text-dark fw-medium">2016</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-user me-1"></i>Guests : <span class="text-dark fw-medium">6</span></p>
                                        <p class="fs-14 mb-0"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span class="text-dark fw-medium">98.15 m</span></p>
                                        <p class="fs-14"><i class="isax isax-flash-1 me-1"></i>Speed : <span class="text-dark fw-medium">14 Knots</span></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i class="isax isax-home-wifi me-2"></i><i class="isax isax-scissor me-2"></i><i class="isax isax-profile-2user me-2"></i><i class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$450 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cruise Grid -->

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
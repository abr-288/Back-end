<?php $page="tour-map";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
        @slot('title')
		Tours
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
        Tours
         @endslot
        @slot('item2')
		Tours List
        @endslot
       @endcomponent

 <!-- Page Wrapper -->
 <div class="content pb-0">
    <div class="map-content">
        <!-- Tour Search -->
        <div class="card">
            <div class="card-body">
                <div class="banner-form">
                    <form class="d-lg-flex">
                        <div class="d-flex  form-info">
                            <div class="form-item dropdown">
                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                    <label class="form-label fs-14 text-default mb-1">Where would like to go?</label>
                                    <input type="text" class="form-control" value="Newyork">
                                    <p class="fs-12 mb-0">USA</p>
                                </div>
                                <div class="dropdown-menu dropdown-md p-0">
                                    <div class="input-search p-3 border-bottom">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
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
                                <label class="form-label fs-14 text-default mb-1">Dates</label>
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
                                    <label class="form-label fs-14 text-default mb-1">Travellers </label>
                                    <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                    <p class="fs-12 mb-0">2 Adult</p>
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
                        </div>
                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Tour Search -->

        <!-- Tour Types -->
        <div class="mb-2">
            <div class="mb-3">
                <h5 class="mb-2">Choose type of Tours you are interested</h5>
            </div>
            <div class="row">
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-01.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Ecotourism</a></h6>
                            <p class="fs-14">216 Hotels</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-02.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Adventure Tour</a></h6>
                            <p class="fs-14">569 tours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-03.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Group Tours</a></h6>
                            <p class="fs-14">129 tours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-04.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Beach Tours</a></h6>
                            <p class="fs-14">600 tours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-05.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Historical Tours</a></h6>
                            <p class="fs-14">200 tours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('tour-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/tours/tours-06.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('tour-grid')}}">Summer Trip</a></h6>
                            <p class="fs-14">200 tours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Tour Types -->
        
        <!-- Filters -->
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
                        <form action="{{ url('tour-map')}}">
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
                        Tour Types
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('tour-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Ratings</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review01" type="checkbox" id="review01">
                                <label class="form-check-label ms-2" for="review01">
                                    Ecotourism
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review02" type="checkbox" id="review02">
                                <label class="form-check-label ms-2" for="review02">
                                    Adventure Tour
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review03" type="checkbox" id="review03">
                                <label class="form-check-label ms-2" for="review03">
                                    Adventure Tour
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review04" type="checkbox" id="review04">
                                <label class="form-check-label ms-2" for="review04">
                                    Group Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review05" type="checkbox" id="review05">
                                <label class="form-check-label ms-2" for="review05">
                                    Beach Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review06" type="checkbox" id="review06">
                                <label class="form-check-label ms-2" for="review06">
                                    Historical Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="review07" type="checkbox" id="review07">
                                <label class="form-check-label ms-2" for="review07">
                                    Summer Trip
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
            <div class="d-flex align-items-center flex-wrap">
                <div class="input-icon mb-3 me-3">
                    <span class="input-icon-addon">
                        <i class="isax isax-search-normal"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search by Tour Name">
                </div>
                <div class="list-item d-flex align-items-center mb-3">
                    <a href="{{ url('tour-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                    <a href="{{ url('tour-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                    <a href="{{ url('tour-map')}}" class="list-icon active  me-2"><i class="isax isax-map-1"></i></a>
                </div>
                <div class="dropdown mb-3">
                    <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('tour-map')}}">
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
        <!-- /Filters -->

    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="map-lists-widget border-top">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <h6 class="mb-4">1920 Tours Found on Your Search</h6>
                    <div class="list-item d-flex align-items-center shadow-md bg-white rounded-3 p-2 mb-4">
                        <a href="{{ url('tour-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                        <a href="{{ url('tour-list')}}" class="list-icon active"><i class="isax isax-firstline"></i></a>
                    </div>
                </div>
                <div class="hotel-list">
                    <div class="row justify-content-center">

                        <div class="col-md-12">

                            <!-- Tour Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid" alt="img">
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
                                <div class="place-content ">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                        <div>
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('tour-details')}}">Rainbow Mountain Valley</a></h5>
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
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">4 Day,3 Night</p>
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>14 Guests
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h6 class="d-flex align-items-center flex-wrap text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
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
                            <!-- /Tour Grid -->

                            <!-- Tour Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider tour-img tour-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid h-100" alt="img">
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
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('tour-details')}}">Mystic Falls</a></h5>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">
                                                <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>Adventure Tour
                                            </p>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.5</span>
                                            <p class="fs-14">(110 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 border-bottom pb-3 mb-3">
                                        Experience the breathtaking beauty of nature on a tour to majestic waterfalls, where cascading waters meet lush greenery.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">3 Day,2 Night</p>
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>12 Guests
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h6 class="d-flex align-items-center flex-wrap text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
                                                Starts From 
                                                <span class="ms-1 fs-18 fw-semibold text-primary">$600</span>
                                                <span class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$700</span>
                                            </h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour Grid -->

                            <!-- Tour Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider tour-img tour-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid h-100" alt="img">
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
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('tour-details')}}">Crystal Lake</a></h5>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">
                                                <span class="me-1"><i class="ti ti-receipt text-primary"></i></span> Summer Trip
                                            </p>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.9</span>
                                            <p class="fs-14">(180 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 border-bottom pb-3 mb-3">
                                        Enjoy the calm waters and scenic views, making your lake tour a refreshing escape into nature's beauty.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">5 Day,4 Night</p>
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>16 Guests
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h6 class="d-flex align-items-center flex-wrap text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
                                                Starts From 
                                                <span class="ms-1 fs-18 fw-semibold text-primary">$300</span>
                                                <span class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$500</span>
                                            </h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour Grid -->

                            <!-- Tour Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider tour-img tour-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-13.jpg')}}" class="img-fluid h-100" alt="img">
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
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('tour-details')}}">Majestic Peaks</a></h5>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">
                                                <span class="me-1"><i class="ti ti-receipt text-primary"></i></span> Adventure Tour
                                            </p>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                            <p class="fs-14">(300 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 border-bottom pb-3 mb-3">
                                        Conquer towering peaks and enjoy panoramic views on a thrilling mountain tour, perfect for adventure seekers.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">3 Day,2 Night</p>
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>10 Guests
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h6 class="d-flex align-items-center flex-wrap text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
                                                Starts From 
                                                <span class="ms-1 fs-18 fw-semibold text-primary">$400</span>
                                                <span class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$480</span>
                                            </h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour Grid -->

                            <!-- Tour Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider tour-img tour-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-13.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-14.jpg')}}" class="img-fluid h-100" alt="img">
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
                                            <h5 class="mb-1 text-truncate"><a href="{{ url('tour-details')}}">Enchanted Forest</a></h5>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="fs-14 text-gray-9  border-end pe-2 me-2 mb-0">
                                                <span class="me-1"><i class="ti ti-receipt text-primary"></i></span> Group Tours
                                            </p>
                                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.1</span>
                                            <p class="fs-14">(250 Reviews)</p>
                                        </div>
                                    </div>
                                    <p class="fs-14 border-bottom pb-3 mb-3">
                                        Immerse yourself in the enchanting beauty of a forest tour, where towering trees and diverse wildlife create a serene escape.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-2"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9 border-end pe-2 me-2 mb-0">2 Day,1 Night</p>
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>17 Guests
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h6 class="d-flex align-items-center flex-wrap text-gray-6 fs-14 fw-normal border-end pe-2 me-2">
                                                Starts From 
                                                <span class="ms-1 fs-18 fw-semibold text-primary">$550</span>
                                                <span class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$600</span>
                                            </h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                        </div>
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
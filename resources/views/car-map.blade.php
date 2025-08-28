<?php $page="car-map";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Cars
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
		Cars
        @endslot
        @slot('item2')
		Cars List
        @endslot
       @endcomponent
<!-- Page Wrapper -->
<div class="content pb-0">
    <div class="map-content">

        <!-- Car Search -->
        <div class="banner-form card">
            <div class="card-body">
                <form action="#">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="Cars">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="drop" id="same-drop" value="same-drop" checked>
                                        <label class="form-check-label fs-14 ms-2" for="same-drop">
                                            Same drop-off
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="drop" id="different-drop" value="different-drop">
                                        <label class="form-check-label fs-14 ms-2" for="different-drop">
                                            Different Drop off
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="drop" id="airport" value="airport">
                                        <label class="form-check-label fs-14 ms-2" for="airport">
                                            Airport
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="drop" id="hourly-drop" value="hourly-drop">
                                        <label class="form-check-label fs-14 ms-2" for="hourly-drop">
                                            Hourly Package
                                        </label>
                                    </div>
                                </div>
                                <h6 class="fw-medium fs-16 mb-2">Book Car for rental</h6>
                            </div>
                            <div class="d-lg-flex">
                                <div class="d-flex  form-info">
                                    <div class="form-item dropdown from-location">
                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                            <label class="form-label fs-14 text-default mb-1">From</label>
                                            <input type="text" class="form-control" value="Newyork">
                                            <p class="fs-12 mb-0">USA</p>
                                        </div>
                                        <div class="dropdown-menu dropdown-md p-0">
                                            <div class="input-search p-3 border-bottom">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for Cars">
                                                    <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">USA</h6>
                                                        <p>2000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Japan</h6>
                                                        <p>3000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Singapore</h6>
                                                        <p>8000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Russia</h6>
                                                        <p>8000 Cars</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Germany</h6>
                                                        <p>6000 Cars</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-item dropdown pickup-airport">
                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                            <label class="form-label fs-14 text-default mb-1">From</label>
                                            <input type="text" class="form-control" value="Newyork">
                                            <p class="fs-12 mb-0">Ken International Airport</p>
                                        </div>
                                        <div class="dropdown-menu dropdown-md p-0">
                                            <div class="input-search p-3 border-bottom">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for Airport">
                                                    <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Hartsfield-Jackson Atlanta International</h6>
                                                        <p>USA</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Dallas/Fort Worth International</h6>
                                                        <p>USA</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">London Heathrow</h6>
                                                        <p>UK</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Seoul Incheon</h6>
                                                        <p>South Korea</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Singapore Changi International</h6>
                                                        <p>Singapore</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-item dropdown to-location ps-2 ps-sm-3">
                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                            <label class="form-label fs-14 text-default mb-1">To</label>
                                            <input type="text" class="form-control" value="Newyork">
                                            <p class="fs-12 mb-0">USA</p>
                                            <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                            </span>
                                        </div>
                                        <div class="dropdown-menu dropdown-md p-0">
                                            <div class="input-search p-3 border-bottom">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for Cars">
                                                    <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">USA</h6>
                                                        <p>2000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Japan</h6>
                                                        <p>3000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Singapore</h6>
                                                        <p>8000 Cars</p>
                                                    </a>
                                                </li>
                                                <li class="border-bottom">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Russia</h6>
                                                        <p>8000 Cars</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <h6 class="fs-16 fw-medium">Germany</h6>
                                                        <p>6000 Cars</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-item">
                                        <label class="form-label fs-14 text-default mb-1">Departure</label>
                                        <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                        <p class="fs-12 mb-0">Monday</p>
                                    </div>
                                    <div class="form-item return-drop">
                                        <label class="form-label fs-14 text-default mb-1">Return</label>
                                        <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                        <p class="fs-12 mb-0">Wednesday</p>
                                    </div>
                                    <div class="form-item">
                                        <label class="form-label fs-14 text-default mb-1">Pickup Time</label>
                                        <input type="text" class="form-control timepicker" value="11:45 PM">
                                    </div>
                                    <div class="form-item dropoff-time">
                                        <label class="form-label fs-14 text-default mb-1">Dropoff Time</label>
                                        <input type="text" class="form-control timepicker" value="11:45 PM">
                                    </div>
                                    <div class="form-item hourly-time">
                                        <label class="form-label fs-14 text-default mb-1">Hours</label>
                                        <h5>02 Hrs 10 Kms</h5>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Car Search -->

        <!-- Tour Types -->
        <div class="mb-2">
            <div class="mb-3">
                <h5 class="mb-2">Choose type of Cars you are interested</h5>
            </div>
            <div class="row">
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">Sedan</a></h6>
                            <p class="fs-14">216 Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">Sports</a></h6>
                            <p class="fs-14">569 Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-03.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">SUV</a></h6>
                            <p class="fs-14">129 Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-04.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">Convertible</a></h6>
                            <p class="fs-14">600 Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-05.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">Crossover</a></h6>
                            <p class="fs-14">200 Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex align-items-center hotel-type-item mb-3">
                        <a href="{{ url('car-grid')}}" class="avatar avatar-lg">
                            <img src="{{URL::asset('build/img/cars/car-17.jpg')}}" class="rounded-circle" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fs-16 fw-medium"><a href="{{ url('car-grid')}}">EV</a></h6>
                            <p class="fs-14">180 Cars</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Tour Types -->

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
                        <form action="{{ url('car-map')}}">
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
                        Car Types
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('car-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Types</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review1" type="checkbox" id="review1">
                                <label class="form-check-label ms-2" for="review1">
                                    Sedan
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review2" type="checkbox" id="review2">
                                <label class="form-check-label ms-2" for="review2">
                                    EV
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review3" type="checkbox" id="review3">
                                <label class="form-check-label ms-2" for="review3">
                                    Crossover
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review4" type="checkbox" id="review4">
                                <label class="form-check-label ms-2" for="review4">
                                    Sports
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review5" type="checkbox" id="review5">
                                <label class="form-check-label ms-2" for="review5">
                                    Van
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review6" type="checkbox" id="review6">
                                <label class="form-check-label ms-2" for="review6">
                                    Wagon
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="review7" type="checkbox" id="review7">
                                <label class="form-check-label ms-2" for="review7">
                                    SUV
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
                        Car Brands
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('car-map')}}">
                            <h6 class="fw-medium fs-16 mb-3">Car Brands</h6>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review01" type="checkbox" id="review01" checked>
                                <label class="form-check-label ms-2" for="review01">
                                    Toyota
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review02" type="checkbox" id="review02" checked>
                                <label class="form-check-label ms-2" for="review02">
                                    Ford
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review03" type="checkbox" id="review03" checked>
                                <label class="form-check-label ms-2" for="review03">
                                    Honda
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review04" type="checkbox" id="review04" checked>
                                <label class="form-check-label ms-2" for="review04">
                                    BMW
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review05" type="checkbox" id="review05" checked>
                                <label class="form-check-label ms-2" for="review05">
                                    Mercedes-Benz
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                <input class="form-check-input ms-0 mt-0" name="review06" type="checkbox" id="review06">
                                <label class="form-check-label ms-2" for="review06">
                                    Tesla
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                <input class="form-check-input ms-0 mt-0" name="review07" type="checkbox" id="review07">
                                <label class="form-check-label ms-2" for="review07">
                                    Audi
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
                    <input type="text" class="form-control" placeholder="Search by Car Name">
                </div>
                <div class="list-item d-flex align-items-center mb-3">
                    <a href="{{ url('car-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                    <a href="{{ url('car-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                    <a href="{{ url('car-map')}}" class="list-icon active  me-2"><i class="isax isax-map-1"></i></a>
                </div>
                <div class="dropdown mb-3">
                    <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                    </a>
                    <div class="dropdown-menu dropdown-sm">
                        <form action="{{ url('car-map')}}">
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
                    <h6 class="mb-4">1920 Cars Found on Your Search</h6>
                    <div class="list-item d-flex align-items-center shadow-md bg-white rounded-3 p-2 mb-4">
                        <a href="{{ url('car-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                        <a href="{{ url('car-list')}}" class="list-icon active"><i class="isax isax-firstline"></i></a>
                    </div>
                </div>
                <div class="hotel-list">
                    <div class="row justify-content-center">

                        <div class="col-md-12">

                            <!-- car Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider car-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid h-100" alt="img">
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
                                                <h5 class="text-truncate border-end pe-2 me-2"><a href="{{ url('car-details')}}">Toyota Camry SE 400</a></h5>
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
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-9">
                                            <div class="p-2 border rounded d-inline-flex align-items-center">
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-gas-station me-1"></i>
                                                        Fuel : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Hybrid</p>
                                                </div>
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-kanban me-1"></i>
                                                        Gear : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Manual</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-routing-2 me-1"></i>
                                                        Travelled : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">14,000 KM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 class="text-primary d-flex justify-content-start justify-content-lg-end align-items-center flex-wrap">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->

                            <!-- Car Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider car-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid h-100" alt="img">
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
                                                <h5 class="text-truncate border-end pe-2 me-2"><a href="{{ url('car-details')}}">Ford Mustang 4.0 AT</a></h5>
                                                <span class="badge badge-secondary badge-sm d-flex align-items-center">Sedan</span>
                                            </div>
                                            <p class="d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                            <div class="d-flex align-items-center border-start ps-2 ms-2">
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                                <p class="fs-14">(300 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-14 mb-3">A powerful and dynamic vehicle, built for those who crave adventure with a smooth ride and impressive handling.</p>
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-9">
                                            <div class="p-2 border rounded d-inline-flex align-items-center">
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-gas-station me-1"></i>
                                                        Fuel : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Hybrid</p>
                                                </div>
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-kanban me-1"></i>
                                                        Gear : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Auto</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-routing-2 me-1"></i>
                                                        Travelled : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">12,000 KM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 class="text-primary d-flex justify-content-start justify-content-lg-end align-items-center flex-wrap">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->

                            <!-- Car Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider car-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid h-100" alt="img">
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
                                        <div class="">
                                            <div class="d-flex align-items-center mb-1">
                                                <h5 class="text-truncate border-end pe-2 me-2"><a href="{{ url('car-details')}}">Ferrari 458 MM Special</a></h5>
                                                <span class="badge badge-secondary badge-sm d-flex align-items-center">Sedan</span>
                                            </div>
                                            <p class="d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                            <div class="d-flex align-items-center border-start ps-2 ms-2">
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.0</span>
                                                <p class="fs-14">(320 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-14 mb-3">Modern and elegant, this car combines innovative features with a sleek design, offering a premium driving experience.</p>
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-9">
                                            <div class="p-2 border rounded d-inline-flex align-items-center">
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-gas-station me-1"></i>
                                                        Fuel : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Hybrid</p>
                                                </div>
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-kanban me-1"></i>
                                                        Gear : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Manual</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-routing-2 me-1"></i>
                                                        Travelled : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">13,000 KM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 class="text-primary d-flex justify-content-start justify-content-lg-end align-items-center flex-wrap">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->

                            <!-- Car Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider car-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid h-100" alt="img">
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
                                        <div class="">
                                            <div class="d-flex align-items-center mb-1">
                                                <h5 class="text-truncate border-end pe-2 me-2"><a href="{{ url('car-details')}}">Mercedes-benz Convertible</a></h5>
                                                <span class="badge badge-secondary badge-sm d-flex align-items-center">Sedan</span>
                                            </div>
                                            <p class="d-flex align-items-center"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                            <div class="d-flex align-items-center border-start ps-2 ms-2">
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.0</span>
                                                <p class="fs-14">(380 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-14 mb-3">Sleek and stylish, this car offers a blend of performance and luxury, with cutting-edge technology and a comfortable interior</p>
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-9">
                                            <div class="p-2 border rounded d-inline-flex align-items-center">
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-gas-station me-1"></i>
                                                        Fuel : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Petrol</p>
                                                </div>
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-kanban me-1"></i>
                                                        Gear : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Auto</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-routing-2 me-1"></i>
                                                        Travelled : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">10,000 KM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 class="text-primary d-flex justify-content-start justify-content-lg-end align-items-center flex-wrap">$400 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Car Grid -->

                            <!-- Car Grid -->
                            <div class="place-item mb-4">
                                <div class="place-img">
                                    <div class="img-slider car-img owl-carousel nav-center h-100">
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-14.jpg')}}" class="img-fluid h-100" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
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
                                                <h5 class="text-truncate border-end pe-2 me-2"><a href="{{ url('car-details')}}">BMW 3.0 Gran Turismo</a></h5>
                                                <span class="badge badge-secondary badge-sm d-flex align-items-center">Sedan</span>
                                            </div>
                                            <p class="d-flex align-items-center"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle" alt="img">
                                            </a>
                                            <div class="d-flex align-items-center border-start ps-2 ms-2">
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                                <p class="fs-14">(300 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-14 mb-3">Reliable and fuel-efficient, perfect for daily commutes or long drives, this car is designed for both convenience and economy.</p>
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-9">
                                            <div class="p-2 border rounded d-inline-flex align-items-center">
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-gas-station me-1"></i>
                                                        Fuel : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Petrol</p>
                                                </div>
                                                <div class="d-flex flex-wrap border-end pe-2 me-2">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-kanban me-1"></i>
                                                        Gear : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">Manual</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fs-12 d-flex align-items-center text-gray-6 fw-normal text-nowrap me-1">
                                                        <i class="isax isax-routing-2 me-1"></i>
                                                        Travelled : 
                                                    </span>
                                                    <p class="fs-12 fw-medium">12,800 KM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 class="text-primary d-flex justify-content-start justify-content-lg-end align-items-center flex-wrap">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
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

@endsection
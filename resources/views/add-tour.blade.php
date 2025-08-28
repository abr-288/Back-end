<?php $page="add-tour";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
        @slot('title')
		Add Tours
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
		Add Tours
        @endslot
       @endcomponent

  <!-- Page Wrapper -->
  <div class="content">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3 theiaStickySidebar">
                <div class="card border-0 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Add Tour</h5>
                            <ul class="add-tab-list">
                                <li><a href="#basic_info" class="active">Tour Details</a></li>
                                <li><a href="#location">Locations</a></li>
                                <li><a href="#highlights">Highlights</a></li>
                                <li><a href="#room_types">Activities</a></li>
                                <li><a href="#popular_amenities">Includes</a></li>
                                <li><a href="#excludes">Excludes</a></li>
                                <li><a href="#itenary">Itenary</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#description">Description</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- Add Tour -->
            <div class="col-lg-9">
                <form action="{{url('tour-grid')}}">
                    <div class="card shadow-none" id="basic_info">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Tour Details</h5>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tour Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Ecotourism</option>
                                            <option>Adventure Tour</option>
                                            <option>Group Tours</option>
                                            <option>Beach Tours</option>
                                            <option>Historical Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date</label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date</label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Destination</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Duration (Days)</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>4 Days</option>
                                            <option>5 Days</option>
                                            <option>6 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Duration (Nights)</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>3 Nights</option>
                                            <option>4 Nights</option>
                                            <option>5 Nights</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Number Of Peoples Alloted</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pricing (USD)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Offer Price (USD)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Min Age </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="location">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Location</h5>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address 1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="highlights">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Highlights</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row add-highlight-info">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Highlights</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm add-highlight"><i class="isax isax-add-circle me-1"></i>Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="room_types">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Activities</h5>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-1">
                                            <label class="form-check-label ms-2" for="service-1">
                                                Cultural Experiences
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-2">
                                            <label class="form-check-label ms-2" for="service-2">
                                                Culinary Tours
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-3">
                                            <label class="form-check-label ms-2" for="service-3">
                                                Sightseeing
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-4">
                                            <label class="form-check-label ms-2" for="service-4">
                                                Hiking & Nature Walks
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-5">
                                            <label class="form-check-label ms-2" for="service-5">
                                                Water Sports
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-6">
                                            <label class="form-check-label ms-2" for="service-6">
                                                Wildlife Safaris
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-7">
                                            <label class="form-check-label ms-2" for="service-7">
                                                Adventure Sports
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-8">
                                            <label class="form-check-label ms-2" for="service-8">
                                                Wine & Brewery Tours
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-9">
                                            <label class="form-check-label ms-2" for="service-9">
                                                Historical Site Visits
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-10">
                                            <label class="form-check-label ms-2" for="service-10">
                                                Boat Tours
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-11">
                                            <label class="form-check-label ms-2" for="service-11">
                                                Photography
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-12">
                                            <label class="form-check-label ms-2" for="service-12">
                                                Spa & Wellness
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-13">
                                            <label class="form-check-label ms-2" for="service-13">
                                                Cycling
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-14">
                                            <label class="form-check-label ms-2" for="service-14">
                                                Volunteering
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-15">
                                            <label class="form-check-label ms-2" for="service-15">
                                                Historical Site Visits
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-16">
                                            <label class="form-check-label ms-2" for="service-16">
                                                Museum & Art Gallery
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow-none" id="popular_amenities">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Includes</h5>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div>
                                        <div class="mb-3">
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-1">
                                                <label class="form-check-label ms-2" for="amenities-1">
                                                    Exclusive Merchandise
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-2">
                                                <label class="form-check-label ms-2" for="amenities-2">
                                                    Early Venue Access
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-3">
                                                <label class="form-check-label ms-2" for="amenities-3">
                                                    Acoustic Performance
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-4">
                                                <label class="form-check-label ms-2" for="amenities-4">
                                                    Transportation (if applicable)
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-5">
                                                <label class="form-check-label ms-2" for="amenities-5">
                                                    Wildlife Safaris
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-6">
                                                <label class="form-check-label ms-2" for="amenities-6">
                                                    Culinary Tours
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-none" id="excludes">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Excludes</h5>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div>
                                        <div class="mb-3">
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-1">
                                                <label class="form-check-label ms-2" for="amenities-1">
                                                    Travel Expenses
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-2">
                                                <label class="form-check-label ms-2" for="amenities-2">
                                                    Travel Expenses
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-3">
                                                <label class="form-check-label ms-2" for="amenities-3">
                                                    Accommodation
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-4">
                                                <label class="form-check-label ms-2" for="amenities-4">
                                                    Food and Beverage   
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-5">
                                                <label class="form-check-label ms-2" for="amenities-5">
                                                    Parking Fees
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-6">
                                                <label class="form-check-label ms-2" for="amenities-6">
                                                    Personal Expenses
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="itenary">
                        <div class="card-header">
                            <h5 class="fs-18">Itenary</h5>
                        </div>
                        <div class="card-body">
                            <div class="card shadow-none mb-3">
                                <div class="card-body px-3 py-2">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h6><a href="javascript:void(0);">Day 1, Kickoff in Los Angeles</a></h6>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_itenary" class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                <i class="isax isax-edit-2"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="trash-icon d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                <i class="isax isax-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_itenary">
                                    <i class="isax isax-add-circle me-1"></i>Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="faq">
                        <div class="card-header">
                            <h5 class="fs-18">FAQ</h5>
                        </div>
                        <div class="card-body">
                            <div class="card shadow-none mb-3">
                                <div class="card-body px-3 py-2">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h6><a href="javascript:void(0);">Does offer free cancellation for a full refund?</a></h6>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_faq" class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                <i class="isax isax-edit-2"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="trash-icon d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                <i class="isax isax-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none mb-3">
                                <div class="card-body px-3 py-2">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h6><a href="javascript:void(0);">Is there a pool?</a></h6>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_faq" class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                <i class="isax isax-edit-2"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="trash-icon d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                <i class="isax isax-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_faq">
                                    <i class="isax isax-add-circle me-1"></i>Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="gallery">
                        <div class="card-header">
                            <h5 class="fs-18">Gallery</h5>
                        </div>
                        <div class="card-body">
                            <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-2">
                                <span class="upload-img d-block mb-2"><i class="isax isax-document-upload fs-24"></i></span>
                                <h6 class="mb-1">Upload Gallery Images</h6>
                                <p class="mb-0">Upload Feature Image First, Image size should below 5MB</p>
                                <input type="file" accept="video/image">
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="gallery-upload-img me-2">
                                    <img src="{{URL::asset('build/img/uploads/upload-01.jpg')}}" alt="Img">
                                    <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i class="isax isax-trash"></i></span>
                                </a>
                                <a href="javascript:void(0);" class="gallery-upload-img me-2">
                                    <img src="{{URL::asset('build/img/uploads/upload-02.jpg')}}" alt="Img">
                                    <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i class="isax isax-trash"></i></span>
                                </a>
                                <a href="javascript:void(0);" class="gallery-upload-img me-2">
                                    <img src="{{URL::asset('build/img/uploads/upload-03.jpg')}}" alt="Img">
                                    <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i class="isax isax-trash"></i></span>
                                </a>
                                <a href="javascript:void(0);" class="gallery-upload-img me-2">
                                    <img src="{{URL::asset('build/img/uploads/upload-04.jpg')}}" alt="Img">
                                    <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i class="isax isax-trash"></i></span>
                                </a>
                                <a href="javascript:void(0);" class="gallery-upload-img me-2">
                                    <img src="{{URL::asset('build/img/uploads/upload-05.jpg')}}" alt="Img">
                                    <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i class="isax isax-trash"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="description">
                        <div class="card-header">
                            <h5 class="fs-18">Description</h5>
                        </div>
                        <div class="card-body text-editor">
                            <div class="summernote">
                              
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-light me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Add New Tour</button>
                    </div>
                </form>
            </div>
            <!-- /Add Tour -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

       @component('components.modal-popup')
       @endcomponent
   @endsection
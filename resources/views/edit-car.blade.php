<?php $page="edit-car";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
Edit Car
@endslot
@slot('item1')
index
@endslot
@slot('item2')
Edit Car
@endslot
@endcomponent

 <!-- Page Wrapper -->
 <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 theiaStickySidebar">
                <div class="card border-0 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div>
                            <h5 class="mb-3">Edit Car</h5>
                            <ul class="add-tab-list">
                                <li><a href="#basic_info" class="active">Basic Info</a></li>
                                <li><a href="#specifications">Specifications</a></li>
                                <li><a href="#additional_service">Additional Service</a></li>
                                <li><a href="#description">Description</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#location">Locations</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="{{url('car-grid')}}">
                    <div class="card shadow-none" id="basic_info">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fs-18">Basic Info</h6>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Car Title</label>
                                        <input type="text" class="form-control" value="Toyota Camry SE 400">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Make</label>
                                        <input type="text" class="form-control" value="Audi">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Model</label>
                                        <input type="text" class="form-control" value="2024">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Sedan</option>
                                            <option>Sports</option>
                                            <option>SUV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="specifications">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fs-18">Specifications</h6>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Transmission</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Auto</option>
                                            <option>Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Make</label>
                                        <input type="text" class="form-control" value="Audi">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Body</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Sedan</option>
                                            <option>Crossover</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Fuel Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Petrol</option>
                                            <option>Diesel</option>
                                            <option>Hybrid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mileage</label>
                                        <input type="text" class="form-control" value="14,000 KM">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Model Year</label>
                                        <input type="text" class="form-control" value="2024">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">AC</label>
                                        <input type="text" class="form-control" value="Air Conditioned">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Doors</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Steering</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Auto</option>
                                            <option>Manuel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brake</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>ABS</option>
                                            <option>Hydraulic Brakes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Engine (Hp)</label>
                                        <input type="text" class="form-control" value="3,000">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Access</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Remote</option>
                                            <option>Manuel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="additional_service">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Additional Service</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="add-service-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name of the Service</label>
                                            <input type="text" class="form-control" value="GPS Navigation Systems">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <input type="text" class="form-control" value="$50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm add-service"><i class="isax isax-add-circle me-1"></i>Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="description">
                        <div class="card-header">
                            <h5 class="fs-18">Description</h5>
                        </div>
                        <div class="card-body text-editor">
                            <textarea class="summernote"></textarea>
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
                                            <option selected>United States</option>
                                            <option>Canada</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" value="Oxford Street">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" value="London">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" value="654">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" value="Oxford Street, London">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address 1</label>
                                        <input type="text" class="form-control" value="Ciutat Vella, Barcelona">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none" id="features">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Features</h5>
                            </div>
                        </div>
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-1">
                                            <label class="form-check-label ms-2" for="service-1">
                                                Multi-zone A/C
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-2">
                                            <label class="form-check-label ms-2" for="service-2">
                                                Heated front seats
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-3">
                                            <label class="form-check-label ms-2" for="service-3">
                                                Hiking & Nature Walks
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-4">
                                            <label class="form-check-label ms-2" for="service-4">
                                                Andriod Auto
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-7">
                                            <label class="form-check-label ms-2" for="service-7">
                                                Premium sound system
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-8">
                                            <label class="form-check-label ms-2" for="service-8">
                                                Bluetooth
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-9">
                                            <label class="form-check-label ms-2" for="service-9">
                                                Keyles Start
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-10">
                                            <label class="form-check-label ms-2" for="service-10">
                                                Memory seat
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-13">
                                            <label class="form-check-label ms-2" for="service-13">
                                                Memory seat
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-14">
                                            <label class="form-check-label ms-2" for="service-14">
                                                Adaptive Control
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-15">
                                            <label class="form-check-label ms-2" for="service-15">
                                                Intermittent wipers
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-16">
                                            <label class="form-check-label ms-2" for="service-16">
                                                4 power windows
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
                                            <a href="javascript:void(0);" class="trash-icon d-flex align-items-center justify-content-center">
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
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_faq"  class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                <i class="isax isax-edit-2"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="trash-icon d-flex align-items-center justify-content-center">
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

                    <div class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-light me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Add New Car</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@endsection
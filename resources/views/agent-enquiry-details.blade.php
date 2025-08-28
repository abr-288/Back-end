<?php $page="agent-enquiry-details";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
        @slot('title')
       Enquires
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item2')
        Enquires
        @endslot
       @endcomponent

  <!-- Page Wrapper -->
  <div class="content">
    <div class="container">
        <div>
            <div class="mb-3">
                <a href="{{url('agent-enquirers')}}" class="text-primary"><i class="isax isax-arrow-left me-2"></i>Back to Enquiry List</a>
            </div>
            <div class="alert alert-teal alert-dismissible d-flex align-items-center border-0 mb-4 fade show">
                <i class="isax isax-info-circle5 me-2"></i>Reply added
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button>
            </div>
        </div>
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-4 theiaStickySidebar">
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                        <h5 class="mb-3">Form Data</h5>
                        <div class="mb-2">
                            <h6 class="fw-medium mb-1">Name</h6>
                            <p class="fs-14">Ronald Moultrie</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="fw-medium mb-1">Phone Number </h6>
                            <p class="fs-14">+1 43567 67887</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="fw-medium mb-1">Email</h6>
                            <p class="fs-14">roladm45@example.com</p>
                        </div>
                        <div class="mb-4 pb-4 border-bottom">
                            <h6 class="fw-medium mb-1">Description</h6>
                            <p class="fs-14">I’m planning a group of 10 people for a wine-tasting tour. Could you send me pricing information for this?</p>
                        </div>
                        <div class="mb-3">
                            <textarea class="summernote"></textarea>
                        </div>
                        <a href="#" class="btn btn-primary">Add  New Reply</a>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <div class="col-lg-8">      

                <!-- Hotel-Booking List -->
                <div class="card hotel-list mb-0">
                    <div class="card-body p-0">
                        <div class="list-header">
                            <h6>Recent updates</h6>
                        </div>

                        <!-- Hotel List -->
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Reply  Info</th>
                                        <th>Replied On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                           <h6 class="fs-14">Chris Foxy</h6>
                                        </td>
                                        <td>
                                            agent@example.com
                                        </td>
                                        <td>
                                            we will check and get back.
                                        </td>
                                        <td>15 May 2025</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Hotel List -->

                    </div>
                </div>
                <!-- /Hotel-Booking List -->

               
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->




@component('components.modal-popup')
@endcomponent
@endsection
<?php $page="team";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Team
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
		Pages
        @endslot
        @slot('item2')
		Team
        @endslot
       @endcomponent

 <!-- Page Wrapper -->
 <div class="content">
    <div class="container">
        <div class="row justify-content-center row-gap-5">

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-17.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">James Parker</a></h5>
                        <p>Chief Executive Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-18.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Morgan Owen</a></h5>
                        <p class="fs-16">Chief Operations Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-19.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Richard Dolan </a></h5>
                        <p class="fs-16">Chief Marketing Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-20.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Lindsay Brookins</a></h5>
                        <p class="fs-16">Chief Technology Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-lg-29.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Sheila Sanders</a></h5>
                        <p class="fs-16">Chief Financial Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-22.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Douglas Gill</a></h5>
                        <p>Head of Sales</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-lg-28.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Mary Brainerd</a></h5>
                        <p class="fs-16">Content Writer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-23.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Steven Johnson </a></h5>
                        <p class="fs-16">Chief Product Officer</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-lg-25.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Adam Whitlow</a></h5>
                        <p>Marketing Specialist</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-lg-30.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Gabriella Noggle</a></h5>
                        <p class="fs-16">Account Manager</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-24.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">James Holmes</a></h5>
                        <p class="fs-16">Booking Coordinator</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

            <!-- Team Members -->
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card team">
                    <div class="card-body">
                        <a href="{{url('my-profile')}}">
                            <img src="{{URL::asset('build/img/users/user-lg-27.jpg')}}" class="img-fluid" alt="Img">
                        </a>
                    </div>
                    <div class="team-member rounded-pill text-center shadow">
                        <h5><a href="{{url('my-profile')}}">Emma Reedy</a></h5>
                        <p class="fs-16">Sales Representative</p>
                    </div>
                </div>
            </div>
            <!-- Team Members -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->


       @endsection
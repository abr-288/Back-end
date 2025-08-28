<?php $page="gallery";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')
        @slot('title')
		Gallery
        @endslot
        @slot('item1')
       index
        @endslot
        @slot('item3')
		Pages
        @endslot
        @slot('item2')
		Gallery
        @endslot
       @endcomponent
  <!-- Page Wrapper -->
  <div class="content">
    <div class="container">

        <!-- Gallery Details -->
        <div class="row row-gap-4">
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-01.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-01.jpg')}}" title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-02.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-02.jpg')}}" title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-03.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-03.jpg')}}" title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-04.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-04.jpg')}}" title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-05.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-05.jpg')}}" title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-06.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-06.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-07.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-07.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-08.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-08.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-09.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-09.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-10.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-10.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-11.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-11.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-12.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-12.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-13.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-13.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-14.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-14.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-15.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-15.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery-card">
                    <div class="gallery-body">
                        <div class="img-wrap">
                            <img src="{{URL::asset('build/img/gallery/gallery-16.jpg')}}" alt="img">
                            <div class="img-overlay-1">
                                <a class="gallery-img" data-fancybox="gallery-img" href="{{URL::asset('build/img/gallery/gallery-16.jpg')}}  " title="Demo 01"><span class="gallery-eye-icon rounded-circle bg-primary d-flex align-items-center justify-content-center"><i class="ti ti-eye text-white"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Gallery Details -->

    </div>
</div>
<!-- /Page Wrapper -->



       @endsection
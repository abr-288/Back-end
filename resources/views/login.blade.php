<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')	
 <!-- Main Wrapper -->
 <div class="main-wrapper authentication-wrapper">
    <div class="container-fuild">
        <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
            <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                    <div class="p-4 text-center">
                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo" class="img-fluid">
                    </div>
                    <div class="card authentication-card">
                        <div class="card-header">
                            <div class="text-center">
                                <h5 class="mb-1">Sign In</h5>
                                <p>Sign in to Start Manage your DreamsTour Account</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{url('index')}}">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-message"></i>
                                        </span>
                                        <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-lock"></i>
                                        </span>
                                        <input type="password" class="form-control form-control-lg pass-input" placeholder="Enter Password">
                                        <span class="input-icon-addon toggle-password">
                                            <i class="isax isax-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-3 mb-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                        <div class="form-check d-flex align-items-center mb-2">
                                            <input class="form-check-input mt-0" type="checkbox" value="" id="remembers_me">
                                            <label class="form-check-label ms-2 text-gray-9 fs-14" for="remembers_me">
                                                Remember Me
                                            </label>
                                        </div>
                                        <a href="{{url('forgot-password')}}" class="link-primary fw-medium fs-14 mb-2">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Login<i class="isax isax-arrow-right-3 ms-2"></i></button>
                                </div>
                                <div class="login-or mb-3">
                                    <span class="span-or">Or</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-2">
                                        <img src="{{URL::asset('build/img/icons/google-icon.svg')}}" class="me-2" alt="Img">Google
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center">
                                        <img src="{{URL::asset('build/img/icons/fb-icon.svg')}}" class="me-2" alt="Img">Facebook
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="fs-14">Don't you have an account? <a href="{{url('register')}}" class="link-primary fw-medium">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coprright-footer">
        <p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
    </div>
</div>
<!-- /Main Wrapper -->


@endsection
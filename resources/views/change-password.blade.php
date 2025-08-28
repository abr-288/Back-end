<?php $page="change-password";?>
@extends('layout.mainlayout')
@section('content')	

 <!-- Main Wrapper -->
 <div class="main-wrapper authentication-wrapper">
    <div class="container-fuild">
        <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
            <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-11 mx-auto">
                    <div class="p-4 text-center">
                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo" class="img-fluid">
                    </div>
                    <div class="card authentication-card">
                        <div class="card-header">
                            <div class="text-center">
                                <h5 class="mb-1">Change Password</h5>
                                <p>Enter Details to Change Password</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{url('login')}}">
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
                                <div class="mb-4">
                                    <label class="form-label">Confirm Password</label>
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
                                <div class="mb-0">
                                    <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
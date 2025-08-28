@if (Route::is(['index']))
<!-- Login Modal -->
 <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['index-3']))
 <!-- Login Modal -->
 <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['index-4']))
 <!-- Login Modal -->
 <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['index-5']))
 <!-- Login Modal -->
 <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['index-6']))
  <!-- Login Modal -->
  <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['add-flight']))
 <!-- Filter Modal -->
 <div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-flight')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-flight')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Faq Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-flight')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if (Route::is(['flight-details']))
<!-- Review Modal -->
<div class="modal fade" id="add_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Write a Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <form action="{{url('flight-details')}}">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                                <div class="selection-wrap">
                                    <div class="d-inline-block">
                                        <div class="rating-selction">
                                            <input type="radio" name="rating" value="5" id="rating5">
                                            <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="4" id="rating4">
                                            <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="3" id="rating3">
                                            <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="2" id="rating2">
                                            <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="1" id="rating1">
                                            <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="submit" class="btn btn-primary btn-md"><i class="isax isax-edit-2 me-1"></i>Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Review Modal -->
@endif

@if (Route::is(['hotel-grid']))

    <!-- Login Modal -->
    <div class="modal fade" id="login-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
							class="ti ti-x fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="{{url('index')}}">
                        <div class="text-center mb-3">
                            <h5 class="mb-1">Sign In</h5>
                            <p>Sign in to Start Manage your DreamsTour Account</p>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-message"></i>
                                </span>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="mb-2">
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
                                <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                            <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign up</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Login Modal -->

    <!-- Register Modal -->
    <div class="modal fade" id="register-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
							class="ti ti-x fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="{{url('index')}}">
                        <div class="text-center border-bottom mb-3">
                            <h5 class="mb-1">Sign Up</h5>
                            <p class="mb-3">Create your DreamsTour Account</p>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Name</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-user"></i>
                                </span>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-message"></i>
                                </span>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="mb-2">
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
                        <div class="mb-2">
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
                        <div class="mt-3 mb-3">
                            <div class="d-flex">
                                <div class="form-check d-flex align-items-center mb-2">
                                    <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                    <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                        I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                            <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Register Modal -->

    <!-- Change Password -->
    <div class="modal fade" id="change-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
							class="ti ti-x fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#">
                        <div class="text-center border-bottom mb-3">
                            <h5 class="mb-1">Change Password</h5>
                            <p class="mb-3">Enter Details to Change Password</p>
                        </div>
                        <div class="mb-2">
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
                        <div class="mb-3">
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
                            <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Change Password -->

    <!-- Forgot Password -->
    <div class="modal fade" id="forgot-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
							class="ti ti-x fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#">
                        <div class="text-center border-bottom mb-3">
                            <h5 class="mb-1">Forgot Password</h5>
                            <p>Reset Your DreamsTour Password</p>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-message"></i>
                                </span>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Forgot Password -->
@endif
@if (Route::is(['hotel-list']))
  <!-- Login Modal -->
  <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->
@endif

@if (Route::is(['hotel-map']))
  <!-- Filter Modal -->
  <div class="modal fade" id="filter_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h4>Filters</h4>
                <a href="javascript:void(0);" class="text-primary">Clear</a>
            </div>
            <form action="{{url('hotel-map')}}">
                <div class="modal-body">
                    <div class=" mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2"><i class="isax isax-ranking text-primary"></i></span>
                            <h6>Popular</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular1" type="checkbox" id="popular1" checked="">
                                <label class="form-check-label ms-2" for="popular1">
                                    Breakfast Included
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular2" type="checkbox" id="popular2">
                                <label class="form-check-label ms-2" for="popular2">
                                    Budget
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular3" type="checkbox" id="popular3">
                                <label class="form-check-label ms-2" for="popular3">
                                    4 Star Hotels
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular4" type="checkbox" id="popular4">
                                <label class="form-check-label ms-2" for="popular4">
                                    5 Star Hotels
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2 pb-2">
                            <span class="me-2"><i class="isax isax-coin text-primary"></i></span>
                            <h6>Price Per Night</h6>
                        </div>
                        <div class="mt-4">
                            <div class="filter-range">
                                <input type="text" id="range_03">
                            </div>
                            <div class="filter-range-amount">
                                <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 - $5695</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-buildings text-primary"></i></span>
                            <h6>Hotel Types</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-1">
                                <label class="form-check-label ms-2" for="hotel-1">
                                    Hotels
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-2">
                                <label class="form-check-label ms-2" for="hotel-2">
                                    Aparthotel
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-3">
                                <label class="form-check-label ms-2" for="hotel-3">
                                    Villa
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-4">
                                <label class="form-check-label ms-2" for="hotel-4">
                                    Apartment
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-5">
                                <label class="form-check-label ms-2" for="hotel-5">
                                    Private Vacation Home
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-6">
                                <label class="form-check-label ms-2" for="hotel-6">
                                    Guest House
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-7">
                                <label class="form-check-label ms-2" for="hotel-7">
                                    Lodge
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-8">
                                <label class="form-check-label ms-2" for="hotel-8">
                                    Resort
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-candle text-primary"></i></span>
                            <h6>Amenities</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-1">
                                <label class="form-check-label ms-2" for="amenities-1">
                                    Free Wifi
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-2">
                                <label class="form-check-label ms-2" for="amenities-2">
                                    Breakfast Included
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-3">
                                <label class="form-check-label ms-2" for="amenities-3">
                                    Pool
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-4">
                                <label class="form-check-label ms-2" for="amenities-4">
                                    Free Parking
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-maximize text-primary"></i></span>
                            <h6>Distance</h6>
                        </div>
                        <div>
                            <span class="d-block mb-2">25 KM</span>
                            <div class="filter-range">
                                <input type="text" id="range_15">
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-1">
                                <label class="form-check-label ms-2" for="loc-1">
                                    Central Park
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-2">
                                <label class="form-check-label ms-2" for="loc-2">
                                    The Metropolitan Museum of Art
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" class="btn btn-light btn-md me-2" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary btn-md">Apply Filters</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->
@endif
@if (Route::is(['hotel-details']))
  <!-- Review Modal -->
  <div class="modal fade" id="add_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Write a Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <form action="{{url('hotel-details')}}">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                                <div class="selection-wrap">
                                    <div class="d-inline-block">
                                        <div class="rating-selction">
                                            <input type="radio" name="rating" value="5" id="rating5">
                                            <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="4" id="rating4">
                                            <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="3" id="rating3">
                                            <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="2" id="rating2">
                                            <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="1" id="rating1">
                                            <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="submit" class="btn btn-primary btn-md"><i class="isax isax-edit-2 me-1"></i>Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Review Modal -->

<!-- Room Details -->
<div class="modal fade" id="room-details">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Room Details</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <div class="modal-body pb-2">
                <div class="owl-carousel room-slider nav-center mb-4">
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-01.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-02.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-03.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-04.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-05.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                    <div class="service-img">
                        <img src="{{URL::asset('build/img/hotels/hotel-large-06.jpg')}}" class="img-fluid" alt="Slider Img">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
                    <div>
                        <h5 class="mb-1">Executive Suite 1Bedroom</h5>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                            <p class="fs-14">(380 Reviews)</p>
                        </div>
                    </div>
                    <h5 class="text-primary">$500 <span class="text-default text-decoration-line-through">$654</span> <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                </div>
                <div class="mb-4">
                    <h6 class="mb-2">Description</h6>
                    <p>Our Deluxe King Room offers a spacious and elegantly designed retreat, ideal for both relaxation and productivity. This room features a plush king-sized bed adorned with premium linens, ensuring a restful night's sleep. A large flat-screen TV, high-speed Wi-Fi, and a well-appointed work desk make it perfect for business or leisure.</p>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Services</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Free Luggage Deposit</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Laundry and Ironing Service</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Dry Cleaning Service</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Daily Housekeeping</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i> Check-In/Check-Out Assistance</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Wake-Up Call Service</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Accessibility</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Step-Free or Ramped Access</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Visual Alarms in Hallways</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Automatic Doors</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Wheelchair-Accessible Gym</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Wheelchair-Accessible Business Center</p>
                        </div>
                    </div>
                </div>
                <div class="mb-0">
                    <h6 class="mb-2">Amenities</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Free Wi-Fi</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Air Conditioning</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Heater</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Safe Deposit Box</p>
                            <p class="mb-2 d-flex align-items-center"><i class="isax isax-tick-circle5 text-success me-2"></i>Iron/Ironing Board</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Room Details -->

@endif

@if (Route::is(['add-hotel']))
 <!-- Add New FAQ -->
 <div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-hotel')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New FAQ -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-hotel')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Faq Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-hotel')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is(['car-details']))
 <!-- Review Modal -->
 <div class="modal fade" id="add_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Write a Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <form action="{{url('car-details')}}">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                                <div class="selection-wrap">
                                    <div class="d-inline-block">
                                        <div class="rating-selction">
                                            <input type="radio" name="rating" value="5" id="rating5">
                                            <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="4" id="rating4">
                                            <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="3" id="rating3">
                                            <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="2" id="rating2">
                                            <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="1" id="rating1">
                                            <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="submit" class="btn btn-primary btn-md"><i class="isax isax-edit-2 me-1"></i>Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Review Modal -->

@endif
@if(Route::is(['add-car']))
 <!-- Iternary Modal -->
 <div class="modal fade" id="add_iternary" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Itenary <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Iternary Modal -->

<!-- Faq Modal -->
<div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-car')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is(['crusie-map']))
  <!-- Filter Modal -->
  <div class="modal fade" id="filter_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h4>Filters</h4>
                <a href="javascript:void(0);" class="text-primary">Clear</a>
            </div>
            <form action="{{url('cruise-map')}}">
                <div class="modal-body">
                    <div class=" mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2"><i class="isax isax-ranking text-primary"></i></span>
                            <h6>Popular</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular1" type="checkbox" id="popular1" checked="">
                                <label class="form-check-label ms-2" for="popular1">
                                    Wi-Fi
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular2" type="checkbox" id="popular2">
                                <label class="form-check-label ms-2" for="popular2">
                                    Beverage Packages
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular3" type="checkbox" id="popular3">
                                <label class="form-check-label ms-2" for="popular3">
                                    Adventure
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular4" type="checkbox" id="popular4">
                                <label class="form-check-label ms-2" for="popular4">
                                    Spa & Wellness
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2 pb-2">
                            <span class="me-2"><i class="isax isax-coin text-primary"></i></span>
                            <h6>Price Per Day</h6>
                        </div>
                        <div class="mt-4">
                            <div class="filter-range">
                                <input type="text" id="range_03">
                            </div>
                            <div class="filter-range-amount">
                                <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 - $5695</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-home text-primary"></i></span>
                            <h6>Cabin Types</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-1" checked>
                                <label class="form-check-label ms-2" for="hotel-1">
                                    Inside
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-2" checked>
                                <label class="form-check-label ms-2" for="hotel-2">
                                    Oceanview
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-3">
                                <label class="form-check-label ms-2" for="hotel-3">
                                    Balcony
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-4" checked>
                                <label class="form-check-label ms-2" for="hotel-4">
                                    Suite
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-5">
                                <label class="form-check-label ms-2" for="hotel-5">
                                    Mini-Suite
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-6">
                                <label class="form-check-label ms-2" for="hotel-6">
                                    Family Cabin
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-7">
                                <label class="form-check-label ms-2" for="hotel-7">
                                    Penthouse Suite
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-candle text-primary"></i></span>
                            <h6>Amenities</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-1">
                                <label class="form-check-label ms-2" for="amenities-1">
                                    Free Wifi
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-2">
                                <label class="form-check-label ms-2" for="amenities-2">
                                    Casinos
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-3">
                                <label class="form-check-label ms-2" for="amenities-3">
                                    Pool
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-4">
                                <label class="form-check-label ms-2" for="amenities-4">
                                    Fitness Centers
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-5">
                                <label class="form-check-label ms-2" for="amenities-5">
                                    Theaters
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-6">
                                <label class="form-check-label ms-2" for="amenities-6">
                                    Live Shows
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-7">
                                <label class="form-check-label ms-2" for="amenities-7">
                                    Buffet Restaurants
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-8">
                                <label class="form-check-label ms-2" for="amenities-8">
                                    Room Service
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-timer text-primary"></i></span>
                            <h6>Days</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="fuel-1">
                                <label class="form-check-label ms-2" for="fuel-1">
                                    1 - 2 days
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="fuel-2">
                                <label class="form-check-label ms-2" for="fuel-2">
                                    3 - 5 days
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="fuel-3">
                                <label class="form-check-label ms-2" for="fuel-3">
                                    6 - 9 days
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="fuel-4">
                                <label class="form-check-label ms-2" for="fuel-4">
                                    10+ days
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-reserve text-primary"></i></span>
                            <h6>Meal plans available</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="gear-1">
                                <label class="form-check-label ms-2" for="gear-1">
                                    All inclusive
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="gear-2">
                                <label class="form-check-label ms-2" for="gear-2">
                                    Breakfast
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="gear-3">
                                <label class="form-check-label ms-2" for="gear-3">
                                    Lunch
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="gear-4">
                                <label class="form-check-label ms-2" for="gear-4">
                                    Dinner
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-tag-user text-primary"></i></span>
                            <h6>Capacity</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="seat-1">
                                <label class="form-check-label ms-2" for="seat-1">
                                    2 Seater
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="seat-2">
                                <label class="form-check-label ms-2" for="seat-2">
                                    4 Seater
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="seat-3">
                                <label class="form-check-label ms-2" for="seat-3">
                                    5 Seater
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="seat-4">
                                <label class="form-check-label ms-2" for="seat-4">
                                    7 Seater
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-ship text-primary"></i></span>
                            <h6>Cruise Types</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-1">
                                <label class="form-check-label ms-2" for="type-1">
                                    Luxury Cruise
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-2">
                                <label class="form-check-label ms-2" for="type-2">
                                    Adventure Cruise
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-3">
                                <label class="form-check-label ms-2" for="type-3">
                                    Expedition Cruise
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-4">
                                <label class="form-check-label ms-2" for="type-4">
                                    River Cruise
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-5">
                                <label class="form-check-label ms-2" for="type-5">
                                    Family Cruise
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-6">
                                <label class="form-check-label ms-2" for="type-6">
                                    Theme Cruises
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-7">
                                <label class="form-check-label ms-2" for="type-7">
                                    World Cruises
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="type-8">
                                <label class="form-check-label ms-2" for="type-8">
                                    Sailing Cruises
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-profile-2user text-primary"></i></span>
                            <h6>Guests</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="guest1">
                                <label class="form-check-label ms-2" for="guest1">
                                    1 - 5
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="guest2">
                                <label class="form-check-label ms-2" for="guest2">
                                    5 - 10
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="guest3">
                                <label class="form-check-label ms-2" for="guest3">
                                    10 - 15
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="guest4">
                                <label class="form-check-label ms-2" for="guest4">
                                    15 - 20
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="guest5">
                                <label class="form-check-label ms-2" for="guest5">
                                    20+
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-building text-primary"></i></span>
                            <h6>Reviews</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star1">
                                <label class="form-check-label ms-2" for="star1">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star2">
                                <label class="form-check-label ms-2" for="star2">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star3">
                                <label class="form-check-label ms-2" for="star3">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star4">
                                <label class="form-check-label ms-2" for="star4">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star5">
                                <label class="form-check-label ms-2" for="star5">
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" class="btn btn-light btn-md me-2" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary btn-md">Apply Filters</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->
@endif

@if(Route::is(['crusie-details']))
 <!-- Review Modal -->
 <div class="modal fade" id="add_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Write a Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <form action="{{url('cruise-details')}}">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                                <div class="selection-wrap">
                                    <div class="d-inline-block">
                                        <div class="rating-selction">
                                            <input type="radio" name="rating" value="5" id="rating5">
                                            <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="4" id="rating4">
                                            <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="3" id="rating3">
                                            <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="2" id="rating2">
                                            <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="1" id="rating1">
                                            <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="submit" class="btn btn-primary btn-md"><i class="isax isax-edit-2 me-1"></i>Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Review Modal -->
@endif

@if(Route::is(['add-crusie']))
<!-- Iternary Modal -->
<div class="modal fade" id="add_iternary" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Itenary <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Iternary Modal -->

<!-- Add New FAQ -->
<div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New FAQ -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Faq Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-cruise')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->

@endif

@if(Route::is(['tour-map']))
  <!-- Filter Modal -->
  <div class="modal fade" id="filter_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h4>Filters</h4>
                <a href="javascript:void(0);" class="text-primary">Clear</a>
            </div>
            <form action="{{url('tour-map')}}">
                <div class="modal-body">
                    <div class=" mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2"><i class="isax isax-ranking text-primary"></i></span>
                            <h6>Popular</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular1" type="checkbox" id="popular1" checked="">
                                <label class="form-check-label ms-2" for="popular1">
                                    Local Guide
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular2" type="checkbox" id="popular2">
                                <label class="form-check-label ms-2" for="popular2">
                                    VIP Access
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular3" type="checkbox" id="popular3">
                                <label class="form-check-label ms-2" for="popular3">
                                    Photographs
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="popular4" type="checkbox" id="popular4">
                                <label class="form-check-label ms-2" for="popular4">
                                    Adventure Gears
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2 pb-2">
                            <span class="me-2"><i class="isax isax-coin text-primary"></i></span>
                            <h6>Price Per Night</h6>
                        </div>
                        <div class="mt-4">
                            <div class="filter-range">
                                <input type="text" id="range_03">
                            </div>
                            <div class="filter-range-amount">
                                <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 - $5695</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-buildings text-primary"></i></span>
                            <h6>Hotel Types</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-1">
                                <label class="form-check-label ms-2" for="hotel-1">
                                    Ecotourism
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-2">
                                <label class="form-check-label ms-2" for="hotel-2">
                                    Adventure Tour
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-3">
                                <label class="form-check-label ms-2" for="hotel-3">
                                    Group Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-4" checked>
                                <label class="form-check-label ms-2" for="hotel-4">
                                    Beach Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-5">
                                <label class="form-check-label ms-2" for="hotel-5">
                                    Honey Moon
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-6">
                                <label class="form-check-label ms-2" for="hotel-6">
                                    Historical Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-7">
                                <label class="form-check-label ms-2" for="hotel-7">
                                    Summer Trip
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-8">
                                <label class="form-check-label ms-2" for="hotel-8">
                                    City Trip
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-candle text-primary"></i></span>
                            <h6>Accommodation Type</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-1">
                                <label class="form-check-label ms-2" for="amenities-1">
                                    Hotel
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-2">
                                <label class="form-check-label ms-2" for="amenities-2">
                                    Campsite
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-3">
                                <label class="form-check-label ms-2" for="amenities-3">
                                    Resort
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="amenities-4" checked>
                                <label class="form-check-label ms-2" for="amenities-4">
                                    Cabin
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-activity text-primary"></i></span>
                            <h6>Activities</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-1">
                                <label class="form-check-label ms-2" for="loc-1">
                                    Hiking
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-2">
                                <label class="form-check-label ms-2" for="loc-2">
                                    Sightseeing
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-3">
                                <label class="form-check-label ms-2" for="loc-3">
                                    Wildlife Safari
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-4" checked>
                                <label class="form-check-label ms-2" for="loc-4">
                                    Boat Tours
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-5">
                                <label class="form-check-label ms-2" for="loc-5">
                                    Adventure Sports
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-6">
                                <label class="form-check-label ms-2" for="loc-6">
                                    Cycling
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-7">
                                <label class="form-check-label ms-2" for="loc-7">
                                    Photography
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="loc-8">
                                <label class="form-check-label ms-2" for="loc-8">
                                    Water Sports
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-reserve text-primary"></i></span>
                            <h6>Meal plans available</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="meal1" type="checkbox" id="meal1" checked="">
                                <label class="form-check-label ms-2" for="meal1">
                                    All inclusive
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="meal2" type="checkbox" id="meal2" checked="">
                                <label class="form-check-label ms-2" for="meal2">
                                    Breakfast
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="meal3" type="checkbox" id="meal3" checked="">
                                <label class="form-check-label ms-2" for="meal3">
                                    Lunch
                                </label>
                            </div>
                            <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                <input class="form-check-input ms-0 mt-0" name="meal4" type="checkbox" id="meal4" checked="">
                                <label class="form-check-label ms-2" for="meal4">
                                    Dinner
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-building text-primary"></i></span>
                            <h6>Guests</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="Guest1">
                                <label class="form-check-label ms-2" for="Guest1">
                                    1 - 5
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="Guest2">
                                <label class="form-check-label ms-2" for="Guest2">
                                    5 - 10
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="Guest3">
                                <label class="form-check-label ms-2" for="Guest3">
                                    10 - 15
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="Guest4">
                                <label class="form-check-label ms-2" for="Guest4">
                                    15 - 20
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="Guest5">
                                <label class="form-check-label ms-2" for="Guest5">
                                    20+
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-2"><i class="isax isax-building text-primary"></i></span>
                            <h6>Reviews</h6>
                        </div>
                        <div class="d-flex align-items-center flex-wrap row-gap-2">
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star1">
                                <label class="form-check-label ms-2" for="star1">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star2">
                                <label class="form-check-label ms-2" for="star2">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star3">
                                <label class="form-check-label ms-2" for="star3">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star4">
                                <label class="form-check-label ms-2" for="star4">
                                    <i class="fas fa-star filled text-primary"></i>
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center ps-0 me-4">
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="star5">
                                <label class="form-check-label ms-2" for="star5">
                                    <i class="fas fa-star filled text-primary"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" class="btn btn-light btn-md me-2" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary btn-md">Apply Filters</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->
@endif

@if(Route::is(['tour-details']))
<!-- Review Modal -->
<div class="modal fade" id="add_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Write a Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </a>
            </div>
            <form action="{{url('tour-details')}}">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                                <div class="selection-wrap">
                                    <div class="d-inline-block">
                                        <div class="rating-selction">
                                            <input type="radio" name="rating" value="5" id="rating5">
                                            <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="4" id="rating4">
                                            <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="3" id="rating3">
                                            <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="2" id="rating2">
                                            <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" name="rating" value="1" id="rating1">
                                            <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="submit" class="btn btn-primary btn-md"><i class="isax isax-edit-2 me-1"></i>Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Review Modal -->
@endif

@if(Route::is(['index-rtl']))
 <!-- Login Modal -->
 <div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h5 class="mb-1">Sign In</h5>
                        <p>Sign in to Start Manage your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                            <a href="javascript:void(0);" class="link-primary fw-medium fs-14 mb-2" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
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
                        <p class="fs-14">Don't you have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#register-modal">Sign up</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="{{url('index')}}">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-2">
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
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
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
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Change Password -->
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
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
                    <div class="mb-3">
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
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Forgot Password -->
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Password -->


@endif

@if(Route::is(['customer-flight-booking']))
  <!-- Upcoming Modal -->
  <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('flight-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('flight-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('customer-flight-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#FB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif

@if(Route::is(['review']))
 <!-- Edit Review -->
 <div class="modal fade" id="edit_review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('review')}}">
                <div class="modal-body pb-0">                    
                    <div class="mb-3">
                        <label class="form-label">Your Rating <span class="text-danger">*</span></label>
                        <div class="selection-wrap">
                            <div class="d-inline-block">
                                <div class="rating-selction">
                                    <input type="radio" name="rating" value="5" id="rating5" checked>
                                    <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="4" id="rating4" checked>
                                    <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="3" id="rating3" checked>
                                    <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="2" id="rating2">
                                    <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="1" id="rating1">
                                    <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Write Your Review <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3">Excellent service! It was a good location however the cocoon concept was weird. No tables, chairs etc was difficult as everything went on the floor.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-md btn-light" data-bs-dismiss="modal">Cancel</a>   
                    <button type="submit" class="btn btn-md btn-primary">Save Changes</button>                
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Edit Review -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('review')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Delete Review</h5>
                        <p class="mb-3">Are you sure you want to delete this review?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is(['security-settings']))
 <!-- Change password -->
 <div class="modal fade" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Change password -->

<!-- Change Email -->
<div class="modal fade" id="change-email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Email Address <span class="text-primary">*</span> </label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Email Address <span class="text-primary">*</span> </label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p class="d-flex align-items-center fs-14"><i class="isax isax-info-circle me-1"></i>New email address only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Change Email -->

<!-- Change Phone -->
<div class="modal fade" id="change-phone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Phone Number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Phone Number <span class="text-primary">*</span> </label>
                        <input type="text" class="form-control pass-input" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Phone Number <span class="text-primary">*</span> </label>
                        <input type="text" class="form-control pass-input" id="phone1" name="phone">
                    </div>
                    <div class="mb-3">  
                        <p class="d-flex align-items-center fs-14"><i class="isax isax-info-circle me-1"></i>New Phone Number only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Change Phone -->

<!-- Account Activity -->
<div class="modal fade" id="acc-activity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Account Activity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table border">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Device</th>
                                <th>IP Address</th>
                                <th>Location </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15 May 2025, 10:30 AM</td>
                                <td>Chrome - Windows</td>
                                <td>232.222.12.72</td>
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>
                                <td>10 Apr 2025, 05:15 PM</td>
                                <td>Safari Macos</td>
                                <td>Newyork / USA</td>
                                <td>224.111.12.75</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>                             
                                <td>15 Mar 2025, 02:40 PM</td>
                                <td>Firefox Windows</td>  
                                <td>111.222.13.28</td>     
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>                               
                                <td>15 Jan 2025, 08:00 AM</td>
                                <td>Safari Macos</td>  
                                <td>333.555.10.54</td>   
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Account Activity -->

<!-- Device Management -->
<div class="modal fade" id="device-management" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Device Management</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table border">
                        <thead class="thead-light">
                            <tr>
                                <th>Device</th>
                                <th>Date</th>
                                <th>Location </th>
                                <th>IP Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chrome - Windows</td>
                                <td>15 May 2025, 10:30 AM</td>
                                <td>Newyork / USA</td>
                                <td>232.222.12.72</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Safari Macos</td>
                                <td>10 Apr 2025, 05:15 PM</td>
                                <td>Newyork / USA</td>
                                <td>224.111.12.75</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>  
                                <td>Firefox Windows</td>                                  
                                <td>15 Mar 2025, 02:40 PM</td>
                                <td>Newyork / USA</td>
                                <td>111.222.13.28</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>  
                                <td>Safari Macos</td>                                  
                                <td>15 Jan 2025, 08:00 AM</td>
                                <td>Newyork / USA</td>
                                <td>333.555.10.54</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Device Management -->

<!-- Delete Account -->
<div class="modal fade" id="delete-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Delete Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="mb-1">Are you sure you want to delete your account?</h6>
                <p>Refers to the action of permanently removing a user's account and associated data from a system, service and platform.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#del-acc"  data-bs-dismiss="modal">Delete Account</button>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Account -->

 <!-- Delete Account -->
<div class="modal fade" id="del-acc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Delete Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('security-settings')}}">
                <div class="modal-body">
                    <h6 class="mb-1">Why Are You Deleting Your Account?</h6>
                    <p class="mb-3">We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</p>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc1">
                        <label class="form-check-label fs-14 ms-2" for="del-acc1">
                            <span class="text-gray-9 fw-medium">No longer using the service</span> 
                            <span class="d-block">I no longer need this service and won’t be using it in the future.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc2">
                        <label class="form-check-label fs-14 ms-2" for="del-acc2">
                            <span class="text-gray-9 fw-medium">Privacy concerns</span> 
                            <span class="d-block">I am concerned about how my data is handled and want to remove my information.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc3">
                        <label class="form-check-label fs-14 ms-2" for="del-acc3">
                            <span class="text-gray-9 fw-medium">Too many notifications/emails</span> 
                            <span class="d-block">I’m overwhelmed by the volume of notifications or emails and would like to reduce them.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc4">
                        <label class="form-check-label fs-14 ms-2" for="del-acc4">
                            <span class="text-gray-9 fw-medium">Poor user experience</span> 
                            <span class="d-block">I’ve had difficulty using the platform, and it didn’t meet my expectations.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc5" checked>
                        <label class="form-check-label fs-14 ms-2" for="del-acc5">
                            <span class="text-gray-9 fw-medium">Other (Please specify)</span> 
                        </label>
                    </div>
                    <div class="ms-4">                        
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if(Route::is(['agent-dashboard']))
  <!-- Upcoming Modal -->
  <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-dashboard')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif
@if(Route::is(['agent-listings']))
 <!-- Inactive Modal -->
 <div class="modal fade" id="inactive_list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Inactive Listing</h5>
                    <p class="mb-3">Are you sure you want to mark this listing as inactive and keep it unavailable</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="{{url('agent-listings')}}" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inactive Modal -->

<!-- Active Modal -->
<div class="modal fade" id="active_list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Active Listing</h5>
                    <p class="mb-3">Are you sure you want to mark this listing as active and keep it available?</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="{{url('agent-listings')}}" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Active Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete-list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Delete Listing</h5>
                    <p class="mb-3">Are you sure you want to delete this listing?</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="{{url('agent-listings')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Delete Modal -->
@endif

@if(Route::is(['agent-hotel-booking']))
  <!-- Upcoming Modal -->
  <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-hotel-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif

@if(Route::is(['agent-hotel-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-hotel-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif

@if(Route::is(['agent-enquirers']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-hotel-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif
@if(Route::is(['agent-earnings']))
  <!-- Earnings Invoice Modal -->
  <div class="modal fade" id="earning_invoice" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg invoice-modal">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div>
                        <div class="border-bottom mb-4">
                            <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                                <div class="col-md-6">
                                    <div class="mb-2 invoice-logo-dark">
                                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                                    </div>
                                    <div class="mb-2 invoice-logo-white">
                                        <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                    </div>
                                    <p class="fs-12">3099 Kennedy Court Framingham, MA 01702</p>
                                </div>
                                <div class="col-md-6">
                                    <div class=" text-end mb-3">
                                        <h6 class="text-default mb-1">Invoice No <span class="text-primary fw-medium">#INV0001</span></h6>
                                        <p class="fs-14 mb-1 fw-medium">Created Date : <span class="text-gray-9">Sep 24, 2023</span> </p>
                                        <p class="fs-14 fw-medium">Due Date : <span class="text-gray-9">Sep 30, 2023</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">From</h6>
                                        <div>
                                            <h6 class="mb-1">Thomas Lawler</h6>
                                            <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">tarala2445@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 654 3210</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">To</h6>
                                        <div>
                                            <h6 class="mb-1">Sara Inc,.</h6>
                                            <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">sara_inc34@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 471 6589</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <h6 class="mb-1 fs-14 fw-medium">Payment Status </h6>
                                        <span class="badge badge-success align-items-center fs-10 mb-4"><i class="ti ti-point-filled "></i>Paid</span>
                                        <div>
                                            <img src="{{URL::asset('build/img/invoice/qr.svg')}}" class="img-fluid" alt="QR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="fw-medium mb-3">Invoice For : <span class="text-dark fw-medium">Hotel Booking</span></p>
                            <div class="table-responsive">
                                <table class="table invoice-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="w-50 bg-light-400">Description</th>
                                            <th class="text-center bg-light-400">Qty</th>
                                            <th class="text-end bg-light-400">Cost</th>
                                            <th class="text-end bg-light-400">Discount</th>
                                            <th class="text-end bg-light-400">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="fs-14">Hotel Booking ( Hotel Plaza Athenee ) </h6>
                                            </td>
                                            <td class="text-gray fs-14 fw-medium text-center">1</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$2000</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$150</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$1800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="fs-14">Additional Service ( Airport Pickup, Breakfast )</h6>
                                            </td>
                                            <td class="text-gray fs-14 fw-medium text-center">1</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$200</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$50</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$150</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="py-4">
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Terms and Conditions</h6>
                                            <p class="fs-12">Please pay within 15 days from the date of invoice, overdue interest @ 14% will be charged on delayed payments.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Notes</h6>
                                            <p class="fs-12">Please quote invoice number when remitting funds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Sub Total</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$2000</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Discount (0%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$100</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">VAT (5%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$55</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <h6>Total Amount</h6>
                                        <h6>$1955</h6>
                                    </div>
                                    <p class="fs-12">
                                        Amount in Words : Dollar Thousand Nine Fifty Five
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-3 me-2">
                            <div class="row justify-content-end align-items-end text-end">
                                <div class="col-md-3">
                                    <div class="text-end">
                                        <img src="{{URL::asset('build/img//invoice/sign.svg')}}" class="img-fluid" alt="sign">
                                    </div>
                                    <div class="text-end mb-3">
                                        <h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
                                        <p>Assistant Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-3 invoice-logo-dark">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <div class="mb-3 invoice-logo-white">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <p class="text-gray-9 fs-12 mb-1">Payment Made Via bank transfer / Cheque in the name of Thomas Lawler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Earnings Invoice Modal -->

<!-- Withdraw Invoice Modal -->
<div class="modal fade" id="withdraw_invoice" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg invoice-modal">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div>
                        <div class="border-bottom mb-4">
                            <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                                <div class="col-md-6">
                                    <div class="mb-2 invoice-logo-dark">
                                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                                    </div>
                                    <div class="mb-2 invoice-logo-white">
                                        <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                    </div>
                                    <p class="fs-12">3099 Kennedy Court Framingham, MA 01702</p>
                                </div>
                                <div class="col-md-6">
                                    <div class=" text-end mb-3">
                                        <h6 class="text-default mb-1">Invoice No <span class="text-primary fw-medium">#WRV0001</span></h6>
                                        <p class="fs-14 mb-1 fw-medium">Date : <span class="text-gray-9">Sep 24, 2023</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">From</h6>
                                        <div>
                                            <h6 class="mb-1">Thomas Lawler</h6>
                                            <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">tarala2445@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 654 3210</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">To</h6>
                                        <div>
                                            <h6 class="mb-1">Sara Inc,.</h6>
                                            <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">sara_inc34@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 471 6589</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <h6 class="mb-1 fs-14 fw-medium">Payment Status </h6>
                                        <span class="badge badge-success align-items-center fs-10 mb-4"><i class="ti ti-point-filled "></i>Completed</span>
                                        <div>
                                            <img src="{{URL::asset('build/img/invoice/qr.svg')}}" class="img-fluid" alt="QR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="fw-medium mb-3">Invoice For : <span class="text-dark fw-medium">Hotel Booking</span></p>
                            <div class="table-responsive">
                                <table class="table invoice-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="w-50 bg-light-400">Description</th>
                                            <th class="text-end bg-light-400">Cost</th>
                                            <th class="text-end bg-light-400">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="fs-14">Withdrawn payment (15 Jan 2025 - 12 Feb 2025)</h6>
                                            </td>
                                            <td class="text-gray fs-14 fw-medium text-end">$2000</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$1800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="py-4">
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Terms and Conditions</h6>
                                            <p class="fs-12">Please pay within 15 days from the date of invoice, overdue interest @ 14% will be charged on delayed payments.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Notes</h6>
                                            <p class="fs-12">Please quote invoice number when remitting funds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Sub Total</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$2000</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Discount (0%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$100</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">VAT (5%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$55</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <h6>Total Amount</h6>
                                        <h6>$1955</h6>
                                    </div>
                                    <p class="fs-12">
                                        Amount in Words : Dollar Thousand Nine Fifty Five
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-3 me-2">
                            <div class="row justify-content-end align-items-end text-end">
                                <div class="col-md-3">
                                    <div class="text-end">
                                        <img src="{{URL::asset('build/img//invoice/sign.svg')}}" class="img-fluid" alt="sign">
                                    </div>
                                    <div class="text-end mb-3">
                                        <h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
                                        <p>Assistant Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-3 invoice-logo-dark">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <div class="mb-3 invoice-logo-white">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <p class="text-gray-9 fs-12 mb-1">Payment Made Via bank transfer / Cheque in the name of Thomas Lawler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Withdraw Invoice Modal -->

<!-- Edit Card Modal -->
<div class="modal fade" id="edit_card" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md w-500">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Card</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('agent-earnings')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Card Holder Name <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-user fs-14"></i>
                            </span>
                            <input type="text" class="form-control" value="Adrian Jermain">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Card Number <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-card-tick fs-14"></i>
                            </span>
                            <input type="text" class="form-control" value="6565 4546 4564 4664">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Expire Date <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-calendar-2 fs-14"></i>
                            </span>
                            <input type="text" class="form-control" value="15/21">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CVV <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-check fs-14"></i>
                            </span>
                            <input type="text" class="form-control" value="556">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap row-gap-3 m-0">
                        <div class="form-check d-flex align-items-center ps-0 me-4">
                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-5">
                            <label class="form-check-label ms-2" for="hotel-5">
                                Mark as default
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-light btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Edit Card Modal -->

<!-- Saved Card Modal -->
<div class="modal fade" id="saved_card" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Saved Cards</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body pb-1">
                <div class="border-bottom mb-3">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Bank Name</h6>
                                <p class="fs-14">Citi Bank Inc</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Branch Name</h6>
                                <p class="fs-14">London</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Number</h6>
                                <p class="fs-14">5396 5250 1908 XXXX</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Name</h6>
                                <p class="fs-14">Darren</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="form-check d-flex align-items-center mb-3">
                                <input class="form-check-input mt-0" type="radio" name="Radio" id="mark1" value="mark1" checked="">
                                <label class="form-check-label fs-14 ms-2" for="mark1">
                                    Mark as default
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom mb-3">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Bank Name</h6>
                                <p class="fs-14">Citi Bank Inc</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Branch Name</h6>
                                <p class="fs-14">London</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Number</h6>
                                <p class="fs-14">5396 5250 1908 XXXX</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Name</h6>
                                <p class="fs-14">Darren</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="form-check d-flex align-items-center mb-3">
                                <input class="form-check-input mt-0" type="radio" name="Radio" id="mark2" value="mark2">
                                <label class="form-check-label fs-14 ms-2" for="mark2">
                                    Mark as default
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom mb-3">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Bank Name</h6>
                                <p class="fs-14">Citi Bank Inc</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Branch Name</h6>
                                <p class="fs-14">London</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Number</h6>
                                <p class="fs-14">5396 5250 1908 XXXX</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Name</h6>
                                <p class="fs-14">Darren</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="form-check d-flex align-items-center mb-3">
                                <input class="form-check-input mt-0" type="radio" name="Radio" id="mark3" value="mark3">
                                <label class="form-check-label fs-14 ms-2" for="mark3">
                                    Mark as default
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Bank Name</h6>
                                <p class="fs-14">Citi Bank Inc</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Branch Name</h6>
                                <p class="fs-14">London</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Number</h6>
                                <p class="fs-14">5396 5250 1908 XXXX</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="mb-3">
                                <h6 class="fw-medium fs-14 mb-1">Account Name</h6>
                                <p class="fs-14">Darren</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="form-check d-flex align-items-center mb-3">
                                <input class="form-check-input mt-0" type="radio" name="Radio" id="mark4" value="mark4">
                                <label class="form-check-label fs-14 ms-2" for="mark4">
                                    Mark as default
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Saved Card Modal -->

<!-- Add Card Modal -->
<div class="modal fade" id="add_card" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md w-500">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('agent-earnings')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Card Holder Name <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-user fs-14"></i>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Card Number <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                 <i class="isax isax-card-tick fs-14"></i>
                             </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Expire Date <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-calendar-2 fs-14"></i>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CVV <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                                 <i class="isax isax-check fs-14"></i>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap row-gap-3 m-0">
                        <div class="form-check d-flex align-items-center ps-0 me-4">
                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="mark">
                            <label class="form-check-label ms-2" for="mark">
                                Mark as default
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-light btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Card Modal -->

 <!-- Withdraw Payment Modal -->
 <div class="modal fade" id="withdraw_payment" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md w-500">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Withdraw Payment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('agent-earnings')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Enter Amount <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Account <span class="text-danger"> *</span></label>
                        <select class="select">
                            <option>500</option>
                            <option>100</option>
                            <option>2000</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="m-0">
                        <button class="btn btn-light btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary btn-sm" type="submit">Withdraw</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Withdraw Payment Modal -->
@endif

@if(Route::is(['agent-car-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>                
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('car-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->


<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('car-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-car-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#CB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif
@if(Route::is(['agent-cruise-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('cruise-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('cruise-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-cruise-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#CR-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif
@if(Route::is(['agent-enquiry-details']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-hotel-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif

@if(Route::is(['agent-flight-booking']))
<!-- Upcoming Modal -->
<div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('flight-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#FB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">AstraFlight 215</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><img src="{{URL::asset('build/img/icons/airindia.svg')}}" alt="image" class="avatar avatar-sm avatar-rounded me-2">Air India</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To</h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Stopping</h6>
                                <p class="text-gray-6 fs-16 ">1 Stop at Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Blankets & Pillows</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Meals Plan</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Lunch </span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Dinner</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('flight-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-flight-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#FB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif
@if(Route::is(['agent-notifications']))
 <!-- Delete Modal -->
 <div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('agent-notifications')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Delete Notification</h5>
                        <p class="mb-3">Are you sure you want to delete this notification?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is(['agent-plans']))
 <!-- Transaction Details Modal -->
 <div class="modal fade" id="transaction_detail" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg invoice-modal">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div>
                        <div class="border-bottom mb-4">
                            <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="mb-2 invoice-logo-dark">
                                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                                        </div>
                                        <div class="mb-2 invoice-logo-white">
                                            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                        </div>
                                        <p class="fs-12">3099 Kennedy Court Framingham, MA 01702</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" text-end mb-3">
                                        <h6 class="text-default mb-1">Invoice No <span class="text-primary fw-medium">#WRV0001</span></h6>
                                        <p class="fs-14 mb-1 fw-medium">Created Date : <span class="text-gray-9">Sep 24, 2023</span> </p>
                                        <p class="fs-14 mb-0 fw-medium">Due Date :  <span class="text-gray-9">Sep 24, 2023</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">From</h6>
                                        <div>
                                            <h6 class="mb-1">Thomas Lawler</h6>
                                            <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">tarala2445@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 654 3210</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">To</h6>
                                        <div>
                                            <h6 class="mb-1">Sara Inc,.</h6>
                                            <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">sara_inc34@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 471 6589</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <h6 class="mb-1 fs-14 fw-medium">Payment Status </h6>
                                        <span class="badge badge-success align-items-center fs-10 mb-4"><i class="ti ti-point-filled "></i>Paid</span>
                                        <div>
                                            <img src="{{URL::asset('build/img/invoice/qr.svg')}}" class="img-fluid" alt="QR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive mb-3">
                                <table class="table invoice-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="w-50 bg-light-400">Package</th>
                                            <th class="text-end bg-light-400">Cost</th>
                                            <th class="text-end bg-light-400">Days</th>
                                            <th class="text-end bg-light-400">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="fs-14">Basic (Monthly)</h6>
                                            </td>
                                            <td class="text-gray fs-14 fw-medium text-end">$99</td>
                                            <td class="text-gray fs-14 fw-medium text-end">30 Days</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="py-4">
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Terms and Conditions</h6>
                                            <p class="fs-12">Please pay within 15 days from the date of invoice, overdue interest @ 14% will be charged on delayed payments.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Notes</h6>
                                            <p class="fs-12">Please quote invoice number when remitting funds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Sub Total</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$99</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Discount (0%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">VAT (5%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <h6>Total Amount</h6>
                                        <h6>$99</h6>
                                    </div>
                                    <p class="fs-12">
                                        Amount in Words : Dollar Ninety Nine 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-3 me-2">
                            <div class="row justify-content-end align-items-end text-end">
                                <div class="col-md-3">
                                    <div class="text-end">
                                        <img src="{{URL::asset('build/img//invoice/sign.svg')}}" class="img-fluid" alt="sign">
                                    </div>
                                    <div class="text-end mb-3">
                                        <h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
                                        <p>Assistant Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-3 invoice-logo-dark">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <div class="mb-3 invoice-logo-white">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <p class="text-gray-9 fs-12 mb-1">Payment Made Via bank transfer / Cheque in the name of Thomas Lawler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Transaction Details Modal -->

<!-- Pricing Plan Modal -->
<div class="modal fade" id="payment_success" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="text-success d-flex align-items-center justify-content-center mb-3 fs-40">
                    <i class="isax isax-tick-circle5"></i>
                </span>
                <h5 class="mb-3">Payment Successful</h5>
                <p class="mb-3">Your purchase of the Basic Plan has been completed with Reference Number <span class="text-primary d-block">#12559845</span></p>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{url('agent-plans-settings')}}" class="btn btn-light me-2">Back to Plans</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="btn btn-primary">View Purchase Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Pricing Plan Modal -->
@endif

@if(Route::is(['agent-plans-settings']))
 <!-- Transaction Details Modal -->
 <div class="modal fade" id="transaction_detail" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg invoice-modal">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div>
                        <div class="border-bottom mb-4">
                            <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="mb-2 invoice-logo-dark">
                                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                                        </div>
                                        <div class="mb-2 invoice-logo-white">
                                            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                        </div>
                                        <p class="fs-12">3099 Kennedy Court Framingham, MA 01702</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" text-end mb-3">
                                        <h6 class="text-default mb-1">Invoice No <span class="text-primary fw-medium">#WRV0001</span></h6>
                                        <p class="fs-14 mb-1 fw-medium">Created Date : <span class="text-gray-9">Sep 24, 2023</span> </p>
                                        <p class="fs-14 mb-0 fw-medium">Due Date :  <span class="text-gray-9">Sep 24, 2023</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">From</h6>
                                        <div>
                                            <h6 class="mb-1">Thomas Lawler</h6>
                                            <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">tarala2445@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 654 3210</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h6 class="mb-3 fw-semibold fs-14">To</h6>
                                        <div>
                                            <h6 class="mb-1">Sara Inc,.</h6>
                                            <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                            <p class="fs-14 mb-1">Email : <span class="text-gray-9">sara_inc34@example.com</span></p>
                                            <p class="fs-14">Phone : <span class="text-gray-9">+1 987 471 6589</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <h6 class="mb-1 fs-14 fw-medium">Payment Status </h6>
                                        <span class="badge badge-success align-items-center fs-10 mb-4"><i class="ti ti-point-filled "></i>Paid</span>
                                        <div>
                                            <img src="{{URL::asset('build/img/invoice/qr.svg')}}" class="img-fluid" alt="QR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive mb-3">
                                <table class="table invoice-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="w-50 bg-light-400">Package</th>
                                            <th class="text-end bg-light-400">Cost</th>
                                            <th class="text-end bg-light-400">Days</th>
                                            <th class="text-end bg-light-400">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="fs-14">Basic (Monthly)</h6>
                                            </td>
                                            <td class="text-gray fs-14 fw-medium text-end">$99</td>
                                            <td class="text-gray fs-14 fw-medium text-end">30 Days</td>
                                            <td class="text-gray fs-14 fw-medium text-end">$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="py-4">
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Terms and Conditions</h6>
                                            <p class="fs-12">Please pay within 15 days from the date of invoice, overdue interest @ 14% will be charged on delayed payments.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fs-14 mb-1">Notes</h6>
                                            <p class="fs-12">Please quote invoice number when remitting funds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Sub Total</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$99</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">Discount (0%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <p class="fs-14 fw-medium text-gray mb-0">VAT (5%)</p>
                                        <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                        <h6>Total Amount</h6>
                                        <h6>$99</h6>
                                    </div>
                                    <p class="fs-12">
                                        Amount in Words : Dollar Ninety Nine 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-3 me-2">
                            <div class="row justify-content-end align-items-end text-end">
                                <div class="col-md-3">
                                    <div class="text-end">
                                        <img src="{{URL::asset('build/img//invoice/sign.svg')}}" class="img-fluid" alt="sign">
                                    </div>
                                    <div class="text-end mb-3">
                                        <h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
                                        <p>Assistant Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-3 invoice-logo-dark">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <div class="mb-3 invoice-logo-white">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                            </div>
                            <p class="text-gray-9 fs-12 mb-1">Payment Made Via bank transfer / Cheque in the name of Thomas Lawler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Transaction Details Modal -->

<!-- Pricing Plan Modal -->
<div class="modal fade" id="price_plane" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Pricing Plans</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <h5 class="text-gray-6">Yearly</h5>
                    <div class="form-check form-switch ms-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="check2" checked="">
                    </div>
                    <h5>Monthly</h5>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex">
                        <div class="card flex-fill mb-0">
                            <div class="card-header">
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <h4>Basic Plan</h4>
                                    </div>
                                    <div class="mb-2">
                                        <p class="fs-16 text-gray-6">For casual travelers who just need simple bookings.</p>
                                    </div>
                                    <div>
                                        <h5 class="fs-32 fw-bold">$99 <span class="fs-16 fw-normal">/ monthly</span></h5>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{url('agent-plans')}}" class="btn btn-dark d-flex align-items-center justify-content-center ">Choose Plan <i class="ms-2 isax isax-arrow-right-3"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <h6 class="fs-16">Features Include</h6>
                                </div>
                                <div class="pricing-list-items">
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Flight, hotel, car bookings</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Basic search filters</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Email support</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Weekday support</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>General deals access</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Itinerary tracking</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Travel updates</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Save recent searches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="card flex-fill mb-0 bg-light-400">
                            <div class="card-header">
                                <div class="mb-3">
                                    <div class="mb-2 pricing-header d-flex align-items-center justify-content-between">
                                        <h4 class="text-truncate">Standard Plan</h4>
                                        <span class="rounded-pill">Recommended</span>
                                    </div>
                                    <div class="mb-2">
                                        <p class="fs-16 text-gray-6">Ideal for travelers seeking deals and convenience.</p>
                                    </div>
                                    <div>
                                        <h5 class="fs-32 fw-bold">$199 <span class="fs-16 fw-normal">/ monthly</span></h5>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{url('agent-plans')}}" class="btn btn-primary d-flex align-items-center justify-content-center ">Choose Plan <i class="ms-2 isax isax-arrow-right-3"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <h6 class="fs-16">Features Include</h6>
                                </div>
                                <div class="pricing-list-items">
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Everything in Basic</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Advanced filters</p>
                                    <p class="d-flex align-items-center text-truncate"><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Priority email & chat support</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Early sale access</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Fare tracking</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Itinerary tracking</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Price alerts</p>
                                    <p class="d-flex align-items-center text-truncate"><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Personalized recommendations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="card flex-fill mb-0">
                            <div class="card-header">
                                <div class="mb-3">
                                    <div class="mb-2 ">
                                        <h4 class="text-truncate">Premium Plan</h4>
                                    </div>
                                    <div class="mb-2">
                                        <p class="fs-16 text-gray-6">Perfect for frequent travelers who want top-tier features</p>
                                    </div>
                                    <div>
                                        <h5 class="fs-32 fw-bold">$299 <span class="fs-16 fw-normal">/ monthly</span></h5>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{url('agent-plans')}}" class="btn btn-dark d-flex align-items-center justify-content-center ">Choose Plan <i class="ms-2 isax isax-arrow-right-3"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <h6 class="fs-16">Features Include</h6>
                                </div>
                                <div class="pricing-list-items">
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Everything in Explorer</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>24/7 VIP support</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Exclusive deals</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Unlimited booking changes</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Free lounge access</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Personal travel consultant</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Free upgrades</p>
                                    <p class="d-flex align-items-center "><i class="isax isax-tick-circle5 text-gray-1 me-1"></i>Priority check-in/boarding</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Pricing Plan Modal -->

 <!-- Add Card Modal -->
 <div class="modal fade" id="add_card" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md w-500">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('agent-plans-settings')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Card Holder Name <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-user fs-14"></i>
                        </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Card Number <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-card-tick fs-14"></i>
                        </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Expire Date <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-calendar-2 fs-14"></i>
                        </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CVV <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-check fs-14"></i>
                        </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap row-gap-3 m-0">
                        <div class="form-check d-flex align-items-center ps-0 me-4">
                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="mark">
                            <label class="form-check-label ms-2" for="mark">
                                Mark as default
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-light btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Card Modal -->

<!-- Edit Card Modal -->
<div class="modal fade" id="edit_card" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md w-500">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Card</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <form action="{{url('agent-plans-settings')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Card Holder Name <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-user fs-14"></i>
                        </span>
                            <input type="text" class="form-control" value="Adrian Jermain">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Card Number <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-card-tick fs-14"></i>
                        </span>
                            <input type="text" class="form-control" value="6565 4546 4564 4664">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Expire Date <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-calendar-2 fs-14"></i>
                        </span>
                            <input type="text" class="form-control" value="15/21">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CVV <span class="text-danger"> *</span></label>
                        <div class="input-icon-start position-relative">
                            <span class="icon-addon">
                            <i class="isax isax-check fs-14"></i>
                        </span>
                            <input type="text" class="form-control" value="556">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap row-gap-3 m-0">
                        <div class="form-check d-flex align-items-center ps-0 me-4">
                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="hotel-5">
                            <label class="form-check-label ms-2" for="hotel-5">
                                Mark as default
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-light btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Edit Card Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete-list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Delete Card</h5>
                    <p class="mb-3">Are you sure you want to delete this card?</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="{{url('agent-plans-settings')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Delete Modal -->

@endif

@if(Route::is(['agent-security-settings']))
 <!-- Change password -->
 <div class="modal fade" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('agent-security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Change password -->

<!-- Change Email -->
<div class="modal fade" id="change-email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('agent-security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Email Address <span class="text-primary">*</span> </label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Email Address <span class="text-primary">*</span> </label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p class="d-flex align-items-center fs-14"><i class="isax isax-info-circle me-1"></i>New email address only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Change Email -->

<!-- Change Phone -->
<div class="modal fade" id="change-phone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Change Phone Number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('agent-security-settings')}}">
                <div class="modal-body pb-0">
                    <div class="mb-3">
                        <label class="form-label">Current Phone Number <span class="text-primary">*</span> </label>
                        <input type="text" class="form-control pass-input" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Phone Number <span class="text-primary">*</span> </label>
                        <input type="text" class="form-control pass-input" id="phone1" name="phone">
                    </div>
                    <div class="mb-3">  
                        <p class="d-flex align-items-center fs-14"><i class="isax isax-info-circle me-1"></i>New Phone Number only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-primary">*</span> </label>
                        <div class="input-icon">
                            <input type="password" class="form-control pass-input">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Change Phone -->

<!-- Account Activity -->
<div class="modal fade" id="acc-activity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Account Activity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table border">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Device</th>
                                <th>IP Address</th>
                                <th>Location </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15 May 2025, 10:30 AM</td>
                                <td>Chrome - Windows</td>
                                <td>232.222.12.72</td>
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>
                                <td>10 Apr 2025, 05:15 PM</td>
                                <td>Safari Macos</td>
                                <td>Newyork / USA</td>
                                <td>224.111.12.75</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>                             
                                <td>15 Mar 2025, 02:40 PM</td>
                                <td>Firefox Windows</td>  
                                <td>111.222.13.28</td>     
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>
                            <tr>                               
                                <td>15 Jan 2025, 08:00 AM</td>
                                <td>Safari Macos</td>  
                                <td>333.555.10.54</td>   
                                <td>Newyork / USA</td>
                                <td><span class="badge badge-success badge-xs rounded-pill d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-5 me-1"></i>Connect</span></td>
                            </tr>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Account Activity -->

<!-- Device Management -->
<div class="modal fade" id="device-management" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Device Management</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table border">
                        <thead class="thead-light">
                            <tr>
                                <th>Device</th>
                                <th>Date</th>
                                <th>Location </th>
                                <th>IP Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chrome - Windows</td>
                                <td>15 May 2025, 10:30 AM</td>
                                <td>Newyork / USA</td>
                                <td>232.222.12.72</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Safari Macos</td>
                                <td>10 Apr 2025, 05:15 PM</td>
                                <td>Newyork / USA</td>
                                <td>224.111.12.75</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>  
                                <td>Firefox Windows</td>                                  
                                <td>15 Mar 2025, 02:40 PM</td>
                                <td>Newyork / USA</td>
                                <td>111.222.13.28</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>
                            <tr>  
                                <td>Safari Macos</td>                                  
                                <td>15 Jan 2025, 08:00 AM</td>
                                <td>Newyork / USA</td>
                                <td>333.555.10.54</td>
                                <td><a href="javascript:void(0);" class="link-default"><i class="isax isax-trash"></i></a></td>
                            </tr>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Device Management -->

<!-- Delete Account -->
<div class="modal fade" id="delete-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Delete Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="mb-1">Are you sure you want to delete your account?</h6>
                <p>Refers to the action of permanently removing a user's account and associated data from a system, service and platform.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#del-acc"  data-bs-dismiss="modal">Delete Account</button>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Account -->

 <!-- Delete Account -->
<div class="modal fade" id="del-acc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Delete Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('agent-security-settings')}}">
                <div class="modal-body">
                    <h6 class="mb-1">Why Are You Deleting Your Account?</h6>
                    <p class="mb-3">We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</p>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc1">
                        <label class="form-check-label fs-14 ms-2" for="del-acc1">
                            <span class="text-gray-9 fw-medium">No longer using the service</span> 
                            <span class="d-block">I no longer need this service and won’t be using it in the future.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc2">
                        <label class="form-check-label fs-14 ms-2" for="del-acc2">
                            <span class="text-gray-9 fw-medium">Privacy concerns</span> 
                            <span class="d-block">I am concerned about how my data is handled and want to remove my information.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc3">
                        <label class="form-check-label fs-14 ms-2" for="del-acc3">
                            <span class="text-gray-9 fw-medium">Too many notifications/emails</span> 
                            <span class="d-block">I’m overwhelmed by the volume of notifications or emails and would like to reduce them.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc4">
                        <label class="form-check-label fs-14 ms-2" for="del-acc4">
                            <span class="text-gray-9 fw-medium">Poor user experience</span> 
                            <span class="d-block">I’ve had difficulty using the platform, and it didn’t meet my expectations.</span>
                        </label>
                    </div>
                    <div class="form-check d-flex mb-2">
                        <input class="form-check-input" type="radio" name="delete" id="del-acc5" checked>
                        <label class="form-check-label fs-14 ms-2" for="del-acc5">
                            <span class="text-gray-9 fw-medium">Other (Please specify)</span> 
                        </label>
                    </div>
                    <div class="ms-4">                        
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-md">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif

@if(Route::is(['agent-tour-bookings']))

<!-- Upcoming Modal -->
<div class="modal fade" id="upcoming">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing Tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('tour-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('tour-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('agent-tour-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#TR0001</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif

@if(Route::is(['car-booking']))
  <!-- Booking Success -->
  <div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content booking-success-modal">
            <div class="modal-body">
                <div>
                    <div class="booking-icon text-center mb-3">
                        <img src="{{URL::asset('build/img/icons/tick-circle.svg')}}" alt="icon" class="img-fluid">
                    </div>
                    <h5 class="text-center mb-3">Payment Successful</h5>
                    <div class="text-center mb-4">
                        <p>Booking on <strong>"Audi A3 2019"</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ">
                        <a href="{{url('car-booking-confirmation')}}" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BookingSuccess -->
@endif
@if(Route::is(['customer-car-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>                
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->


<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('car-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->


<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Volkswagen Amarok</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-car5 me-2"></i>Sedan</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Ride Type</h6>
                                <p class="text-gray-6 fs-16 ">Same drop-off</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Express Check-in/out</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('car-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('customer-car-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#CB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif

@if(Route::is(['customer-cruise-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('cruise-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#CR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/cruise/cruise-15.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">Carnival Cruise Line</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-ship me-2"></i>Luxury Cruise</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Cabin Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Cabin Type</h6>
                                <p class="text-gray-6 fs-16 ">Suite</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price </h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">From</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">To </h6>
                                <p class="text-gray-6 fs-16 ">Newyork</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Departure Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Custom Service</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Pickup & Drop</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('cruise-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('customer-cruise-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#CR-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif

@if(Route::is(['customer-hotel-booking']))
 <!-- Upcoming Modal -->
 <div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotels-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotels-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotels-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/hotels/hotels-13.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-building me-2"></i>Luxury Hotel</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('hotel-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('customer-hotel-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->
@endif


@if(Route::is(['customer-tour-booking']))
<!-- Upcoming Modal -->
<div class="modal fade" id="upcoming">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing Tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('tour-details')}}" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#TR-1245</span></h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{URL::asset('build/img/tours/tours-21.jpg')}}" alt="image" class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">LaughFest Carnival</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-signpost5 me-2"></i>Sightseeing tours</p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal"><i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York</p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details ">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Destination</h6>
                                <p class="text-gray-6 fs-16 ">Las Vegas</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Return Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Travellers</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Local Expert Guides</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Photography Services</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Activities</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Sightseeing</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Boat Tours</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url('tour-details')}}" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{url('customer-tour-booking')}}">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#TR0001</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
<!-- /Booking Cancel -->

@endif
@if(Route::is(['edit-car']))
 <!-- Iternary Modal -->
 <div class="modal fade" id="add_iternary" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Itenary <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Iternary Modal -->


<!-- Faq Modal -->
<div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-car')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->

@endif
@if(Route::is(['edit-cruise']))
 <!-- Iternary Modal -->
 <div class="modal fade" id="add_iternary" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Itenary <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Iternary Modal -->


<!-- Filter Modal -->
<div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-cruise')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->
@endif

@if(Route::is(['edit-flight']))
 <!-- Filter Modal -->
 <div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-flight')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-flight')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Faq Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-flight')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is(['edit-hotel']))

  <!-- Filter Modal -->
  <div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-hotel')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-hotel')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->
@endif

@if(Route::is(['edit-tour']))
<!-- Add Faq Modal -->
<div class="modal fade" id="add_faq">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-tour')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Faq  Modal -->    

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-tour')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->

<!-- Add Itenary -->
<div class="modal fade" id="add_itenary">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-tour')}}">
                <div class="modal-body">
                    <div>
                        <label class="form-label">Itenary</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Itenary -->

<!-- Edit Itenary -->
<div class="modal fade" id="edit_itenary">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Itenary</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="{{url('add-tour')}}">
                <div class="modal-body">
                    <div>
                        <label class="form-label">Itenary</label>
                        <input type="text" class="form-control" value="Day 1, Kickoff in Los Angeles">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save Itenary</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Itenary -->  

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('add-tour')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Confirm Delete</h5>
                        <p class="mb-3">Are you sure you want to delete this item?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
@endif

@if(Route::is('flight-booking'))

  <!-- Booking Success -->
  <div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content booking-success-modal">
            <div class="modal-body">
                <div>
                    <div class="booking-icon text-center mb-3">
                        <img src="{{URL::asset('build/img/icons/tick-circle.svg')}}" alt="icon" class="img-fluid">
                    </div>
                    <h5 class="text-center mb-3">Payment Successful</h5>
                    <div class="text-center mb-4">
                        <p>Booking on <strong>"Econnomy Class"</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ">
                        <a href="{{url('flight-booking-confirmation')}}" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BookingSuccess -->


@endif

@if(Route::is(['hotel-booking']))
 <!-- Booking Success -->
 <div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content booking-success-modal">
            <div class="modal-body">
                <div>
                    <div class="booking-icon text-center mb-3">
                        <img src="{{URL::asset('build/img/icons/tick-circle.svg')}}" alt="icon" class="img-fluid">
                    </div>
                    <h5 class="text-center mb-3">Payment Successful</h5>
                    <div class="text-center mb-4">
                        <p>Booking on <strong>“Queen Room”</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ">
                        <a href="{{url('booking-confirmation')}}" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BookingSuccess -->
@endif

@if(Route::is(['cruise-booking']))
 <!-- Booking Success -->
 <div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content booking-success-modal">
            <div class="modal-body">
                <div>
                    <div class="booking-icon text-center mb-3">
                        <img src="{{URL::asset('build/img/icons/tick-circle.svg')}}" alt="icon" class="img-fluid">
                    </div>
                    <h5 class="text-center mb-3">Payment Successful</h5>
                    <div class="text-center mb-4">
                        <p>Booking on <strong>“Coral Cruiser - Balcony”</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ">
                        <a href="{{url('cruise-booking-confirmation')}}" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- BookingSuccess -->
@endif

@if(Route::is(['notification']))
  <!-- Delete Modal -->
  <div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('notification')}}">
                    <div class="text-center">
                        <h5 class="mb-3">Delete Notification</h5>
                        <p class="mb-3">Are you sure you want to delete this notification?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->

@endif




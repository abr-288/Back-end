@if (!Route::is(['index-2','index-3','index-4','index-5','index-6']))
 <!-- Footer -->
 <footer>
	<div class="container">
		<div class="footer-top">
			<div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
				<div class="col">
					<div class="footer-widget">
						<h5>Pages</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('team')}}">Our Team</a>
							</li>
							<li>
								<a href="{{url('pricing-plan')}}">Pricing Plans</a>
							</li>
							<li>
								<a href="{{url('gallery')}}">Gallery</a>
							</li>
							<li>
								<a href="{{url('profile-settings')}}">Settings</a>
							</li>
							<li>
								<a href="{{url('my-profile')}}">Profile</a>
							</li>
							<li>
								<a href="{{url('agent-listings')}}">Listings</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer-widget">
						<h5>Company</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('about-us')}}">About Us</a>
							</li>
							<li>
								<a href="javascript:void(0);">Careers</a>
							</li>
							<li>
								<a href="{{url('blog-grid')}}">Blog</a>
							</li>
							<li>
								<a href="javascript:void(0);">Affiliate Program</a>
							</li>
							<li>
								<a href="{{url('add-flight')}}">Add Your Listing</a>
							</li>
							<li>
								<a href="javascript:void(0);">Our Partners</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer-widget">
						<h5>Destinations</h5>
						<ul class="footer-menu">
							<li>
								<a href="javascript:void(0);">Hawai</a>
							</li>
							<li>
								<a href="javascript:void(0);">Istanbul</a>
							</li>
							<li>
								<a href="javascript:void(0);">San Diego</a>
							</li>
							<li>
								<a href="javascript:void(0);">Belgium</a>
							</li>
							<li>
								<a href="javascript:void(0);">Los Angeles</a>
							</li>
							<li>
								<a href="javascript:void(0);">Newyork</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer-widget">
						<h5>Support</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('contact-us')}}">Contact Us</a>
							</li>
							<li>
								<a href="javascript:void(0);">Legal Notice</a>
							</li>
							<li>
								<a href="{{url('privacy-policy')}}">Privacy Policy</a>
							</li>
							<li>
								<a href="{{url('terms-conditions')}}">Terms and Conditions</a>
							</li>
							<li>
								<a href="{{url('chat')}}">Chat Support</a>
							</li>
							<li>
								<a href="javascript:void(0);">Refund Policy</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer-widget">
						<h5>Services</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('hotel-grid')}}">Hotel</a>
							</li>
							<li>
								<a href="javascript:void(0);">Activity Finder</a>
							</li>
							<li>
								<a href="{{url('flight-grid')}}">Flight Finder</a>
							</li>
							<li>
								<a href="{{url('tour-grid')}}">Holiday Rental</a>
							</li>
							<li>
								<a href="{{url('car-grid')}}">Car Rental</a>
							</li>
							<li>
								<a href="{{url('tour-details')}}">Holiday Packages</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-wrap bg-white">
				<div class="row align-items-center">
					<div class="col-lg-6 col-xl-3 col-xxl-3">
						<div class="mb-3 text-center text-xl-start">
							<a href="{{url('index')}}" class="d-block footer-logo-light">
								<img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo">
							</a>
							<a href="{{url('index')}}" class="footer-logo-dark">
								<img src="{{URL::asset('build/img/logo.svg')}}" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4 col-xxl-4">
						<div class="d-flex align-items-center justify-content-center flex-wrap">
							<h6 class="fs-14 fw-medium me-2 mb-2">Available on : </h6>
							<a href="javascript:void(0);" class="d-block mb-3 me-2">
								<img src="{{URL::asset('build/img/icons/googleplay.svg')}}" alt="logo">
							</a>
							<a href="javascript:void(0);" class="d-block mb-3">
								<img src="{{URL::asset('build/img/icons/appstore.svg')}}" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-lg-12 col-xl-5 col-xxl-5">
						<div class="d-sm-flex align-items-center justify-content-center justify-content-xl-end">
							<div class="d-flex align-items-center justify-content-center justify-content-sm-start me-0 pe-0 me-sm-3 pe-sm-3 border-end mb-3">
								<span class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0">
									<i class="ti ti-headphones-filled fs-24"></i>
								</span>
								<div class="ms-2">
									<p class="mb-1">Customer Support</p>
									<p class="fw-medium text-dark">+1 56589 54598</p>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-center justify-content-sm-start mb-3">
								<span class="avatar avatar-lg bg-secondary rounded-circle flex-shrink-0">
									<i class="ti ti-message fs-24 text-gray-9"></i>
								</span>
								<div class="ms-2">
									<p class="mb-1">Drop Us an Email</p>
									<p class="fw-medium text-dark">info@example.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-img">
				<img src="{{URL::asset('build/img/bg/footer.svg')}}" class="img-fluid" alt="img">
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
						<div class="d-flex align-items-center">
							<ul class="social-icon">
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
						<ul class="card-links">
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-01.svg')}}" alt="img">
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-02.svg')}}" alt="img">
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-03.svg')}}" alt="img">
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-04.svg')}}" alt="img">
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-05.svg')}}" alt="img">
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<img src="{{URL::asset('build/img/icons/card-06.svg')}}" alt="img">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif

@if (Route::is(['index-2']))
 <!-- Footer -->
 <footer class="footer-two">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget">
						<span class="d-block mb-2 footer-logo-light"><img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="Img"></span>
						<span class="mb-2 footer-logo-dark"><img src="{{URL::asset('build/img/logo.svg')}}" alt="Img"></span>
						<p class="mb-3">The experience of booking your flight tickets, hotel stay</p>
						<span class="d-block mb-2">Available on</span>
						<div class="d-flex align-items-center row-gap-2 flex-wrap">
							<a href="javascript:void(0);" class="d-block me-2">
								<img src="{{URL::asset('build/img/icons/googleplay.svg')}}" alt="logo">
							</a>
							<a href="javascript:void(0);" class="d-block">
								<img src="{{URL::asset('build/img/icons/appstore.svg')}}" alt="logo">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="footer-widget">
								<h5>Company</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('about-us')}}">About Us</a>
									</li>
									<li>
										<a href="javascript:void(0);">Careers</a>
									</li>
									<li>
										<a href="{{url('blog-grid')}}">Blog</a>
									</li>
									<li>
										<a href="javascript:void(0);">Affiliate Program</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="footer-widget">
								<h5>Destinations</h5>
								<ul class="footer-menu">
									<li>
										<a href="javascript:void(0);">Hawai</a>
									</li>
									<li>
										<a href="javascript:void(0);">Istanbul</a>
									</li>
									<li>
										<a href="javascript:void(0);">San Diego</a>
									</li>
									<li>
										<a href="javascript:void(0);">Belgium</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="footer-widget">
								<h5>Support</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('contact-us')}}">Contact Us</a>
									</li>
									<li>
										<a href="javascript:void(0);">Legal Notice</a>
									</li>
									<li>
										<a href="{{url('privacy-policy')}}">Privacy Policy</a>
									</li>
									<li>
										<a href="{{url('terms-conditions')}}">Terms and Conditions</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="footer-widget">
								<h5>Services</h5>
								<div class="customer-info">
									<div class="customer-info-icon">
										<span><i class="isax isax-headphone5"></i></span>
									</div>
									<div class="customer-info-content">
										<span>Customer Support</span>
										<h6>+1 56589 54598</h6>
									</div>
								</div>
								<div class="customer-info">
									<div class="customer-info-icon">
										<span><i class="isax isax-sms5"></i></span>
									</div>
									<div class="customer-info-content">
										<span>Drop Us an Email</span>
										<h6>info@example.com</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
						<div class="d-flex align-items-center">
							<ul class="social-icon social-icon-two">
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif
@if (Route::is(['index-3']))
 <!-- Footer -->
 <footer class="footer-three">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-xl-5">
					<div class="footer-widget">
						<div class="footer-about">
							<div class="mb-4">
								<a href="{{url('index')}}" class="d-inline-block mb-1">
									<img src="{{URL::asset('build/img/logo.svg')}}" alt="logo">
								</a>
								<p>Our mission is to offer you a seamless and enjoyable car rental experience. Whether you’re planning a road trip</p>
							</div>
							<h5 class="mb-1">Subscribe to Our Newsletter</h5>
							<p class="mb-3">Just sign up and we'll send you a notification by email.</p>
							<div class="footer-input">
								<div class="input-group align-items-center justify-content-center">
									<span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
									<input type="email" class="form-control" placeholder="Enter Email Address">
									<button type="submit" class="btn btn-primary btn-md">Subscribe</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
						<div class="col">
							<div class="footer-widget">
								<h5>Pages</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('team')}}">Our Team</a>
									</li>
									<li>
										<a href="{{url('pricing-plan')}}">Pricing Plans</a>
									</li>
									<li>
										<a href="{{url('gallery')}}">Gallery</a>
									</li>
									<li>
										<a href="{{url('profile-settings')}}">Settings</a>
									</li>
									<li>
										<a href="{{url('my-profile')}}">Profile</a>
									</li>
									<li>
										<a href="{{url('agent-listings')}}">Listings</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-widget">
								<h5>Company</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('about-us')}}">About Us</a>
									</li>
									<li>
										<a href="javascript:void(0);">Careers</a>
									</li>
									<li>
										<a href="{{url('blog-grid')}}">Blog</a>
									</li>
									<li>
										<a href="javascript:void(0);">Affiliate Program</a>
									</li>
									<li>
										<a href="{{url('add-flight')}}">Add Your Listing</a>
									</li>
									<li>
										<a href="javascript:void(0);">Our Partners</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-widget">
								<h5>Destinations</h5>
								<ul class="footer-menu">
									<li>
										<a href="javascript:void(0);">Hawai</a>
									</li>
									<li>
										<a href="javascript:void(0);">Istanbul</a>
									</li>
									<li>
										<a href="javascript:void(0);">San Diego</a>
									</li>
									<li>
										<a href="javascript:void(0);">Belgium</a>
									</li>
									<li>
										<a href="javascript:void(0);">Newyork</a>
									</li>
									<li>
										<a href="javascript:void(0);">Los Angeles</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-contact">
				<div class="row align-items-center">
					<div class="col-xl-5">
						<ul class="social-icon">
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-xl-7">
						<div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
							<div class="col">
								<div class="d-flex align-items-center">
									<span class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0">
										<i class="ti ti-headphones-filled fs-24"></i>
									</span>
									<div class="ms-2">
										<p class="fs-14 mb-1">Customer Support</p>
										<h6 class="fw-medium text-light">+1 56589 54598</h6>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex align-items-center">
									<span class="avatar avatar-lg bg-secondary rounded-circle flex-shrink-0">
										<i class="ti ti-message-2 fs-24"></i>
									</span>
									<div class="ms-2">
										<p class="fs-14 mb-1">Drop Us an Email</p>
										<h6 class="fw-medium text-light">info@example.com</h6>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex align-items-center">
									<span class="avatar avatar-lg bg-teal rounded-circle flex-shrink-0">
										<i class="ti ti-message-2 fs-24"></i>
									</span>
									<div class="ms-2">
										<p class="fs-14 mb-1">Toll Free</p>
										<h6 class="fw-medium text-light">+1 56569 54698</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<p>Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
				</div>
				<div class="col-lg-7">
					<ul class="policy-links justify-content-xl-end">
						<li class="me-4">
							<a href="javascript:void(0);">Legal Notice</a>
						</li>
						<li class="me-4">
							<a href="{{url('privacy-policy')}}">Privacy Policy</a>
						</li>
						<li class="me-4">
							<a href="{{url('terms-conditions')}}">Terms and Conditions</a>
						</li>
						<li class="me-4">
							<a href="javascript:void(0);">Refund Policy</a>
						</li>
						<li>
							<a href="{{url('chat')}}">Chat Support</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif
@if (Route::is(['index-4']))
 <!-- Footer -->
 <footer class="footer-four">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-xl-7">
					<div class="row row-cols-md-4 row-cols-sm-2 row-cols-1">
						<div class="col">
							<div class="footer-widget">
								<h5>Pages</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('team')}}">Our Team</a>
									</li>
									<li>
										<a href="{{url('pricing-plan')}}">Pricing Plans</a>
									</li>
									<li>
										<a href="{{url('gallery')}}">Gallery</a>
									</li>
									<li>
										<a href="{{url('profile-settings')}}">Settings</a>
									</li>
									<li>
										<a href="{{url('my-profile')}}">Profile</a>
									</li>
									<li>
										<a href="{{url('agent-listings')}}">Listings</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-widget">
								<h5>Company</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('about-us')}}">About Us</a>
									</li>
									<li>
										<a href="javascript:void(0);">Careers</a>
									</li>
									<li>
										<a href="{{url('blog-grid')}}">Blog</a>
									</li>
									<li>
										<a href="javascript:void(0);">Affiliate Program</a>
									</li>
									<li>
										<a href="{{url('add-flight')}}">Add Your Listing</a>
									</li>
									<li>
										<a href="javascript:void(0);">Our Partners</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-widget">
								<h5>Destinations</h5>
								<ul class="footer-menu">
									<li>
										<a href="javascript:void(0);">Hawai</a>
									</li>
									<li>
										<a href="javascript:void(0);">Istanbul</a>
									</li>
									<li>
										<a href="javascript:void(0);">San Diego</a>
									</li>
									<li>
										<a href="javascript:void(0);">Belgium</a>
									</li>
									<li>
										<a href="javascript:void(0);">Newyork</a>
									</li>
									<li>
										<a href="javascript:void(0);">Los Angeles</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-widget">
								<h5>Quick Links</h5>
								<ul class="footer-menu">
									<li>
										<a href="{{url('contact-us')}}">Contact Us</a>
									</li>
									<li>
										<a href="javascript:void(0);">Legal Notice</a>
									</li>
									<li>
										<a href="{{url('privacy-policy')}}">Privacy Policy</a>
									</li>
									<li>
										<a href="terms-conditions')}}">Terms and Conditions</a>
									</li>
									<li>
										<a href="{{url('chat')}}">Chat Support</a>
									</li>
									<li>
										<a href="javascript:void(0);">Refund Policy</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="footer-widget">
						<div class="mb-4">
							<h5 class="mb-1">Subscribe to Our Newsletter</h5>
							<p class="mb-3">Just sign up and we'll send you a notification by email.</p>
							<div class="footer-input">
								<div class="input-group align-items-center justify-content-center">
									<span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
									<input type="email" class="form-control" placeholder="Enter Email Address">
									<button type="submit" class="btn btn-primary btn-md">Subscribe</button>
								</div>
							</div>
						</div>
						<h5 class="mb-0">Contact Info</h5>
						<div class="d-sm-flex align-items-center justify-content-center justify-content-between">
							<div class="d-flex align-items-center justify-content-center justify-content-sm-start me-3 mt-2">
								<span class="avatar avatar-lg bg-light rounded-circle flex-shrink-0">
									<i class="ti ti-headphones-filled fs-24 text-gray-9"></i>
								</span>
								<div class="ms-2">
									<p class="fs-14 mb-1">Customer Support</p>
									<h6 class="fw-medium">+1 56589 54598</h6>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-center justify-content-sm-start mt-2">
								<span class="avatar avatar-lg bg-light rounded-circle flex-shrink-0">
									<i class="ti ti-message-2 fs-24 text-gray-9"></i>
								</span>
								<div class="ms-2">
									<p class="fs-14 mb-1">Drop Us an Email</p>
									<h6 class="fw-medium text-dark">info@example.com</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<p>Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
						<div class="d-flex align-items-center">
							<ul class="social-icon">
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
						<ul class="policy-links">
							<li>
								<a href="javascript:void(0);">Legal Notice</a>
							</li>
							<li>
								<a href="javascript:void(0);">Refund Policy</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif
@if (Route::is(['index-5']))
 <!-- Footer -->
 <footer class="footer-five">
	<div class="container">
		<div class="footer-top">
			<div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
				<div class="col-lg-5">
					<div class="footer-about">
						<span class="d-block mb-2 footer-logo-light"><img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="Img"></span>
						<span class="mb-2 footer-logo-dark"><img src="{{URL::asset('build/img/logo.svg')}}" alt="Img"></span>
						<p>At Deams Tour, we are committed to delivering a seamless and unforgettable cruise experience. </p>
						<h5>Subscribe to Our Newsletter</h5>
						<p>Just sign up and we'll send you a notification by email.</p>
						<div class="footer-input">
							<div class="input-group align-items-center justify-content-center">
								<span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
								<input type="email" class="form-control" placeholder="Enter Email Address">
								<button type="submit" class="btn btn-primary">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-widget">
						<h5>Pages</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('team')}}">Our Team</a>
							</li>
							<li>
								<a href="{{url('pricing-plan')}}">Pricing Plans</a>
							</li>
							<li>
								<a href="{{url('gallery')}}">Gallery</a>
							</li>
							<li>
								<a href="{{url('profile-settings')}}">Settings</a>
							</li>
							<li>
								<a href="{{url('my-profile')}}">Profile</a>
							</li>
							<li>
								<a href="{{url('agent-listings')}}">Listings</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-widget">
						<h5>Company</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('about-us')}}">About Us</a>
							</li>
							<li>
								<a href="javascript:void(0);">Careers</a>
							</li>
							<li>
								<a href="{{url('blog-grid')}}">Blog</a>
							</li>
							<li>
								<a href="javascript:void(0);">Affiliate Program</a>
							</li>
							<li>
								<a href="{{url('add-flight')}}">Add Your Listing</a>
							</li>
							<li>
								<a href="javascript:void(0);">Our Partners</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-widget">
						<h5>Contact Info</h5>
						<div class="customer-info">
							<div class="customer-info-icon">
								<span><i class="isax isax-headphone5"></i></span>
							</div>
							<div class="customer-info-content">
								<span>Customer Support</span>
								<h6>+1 56589 54598</h6>
							</div>
						</div>
						<div class="customer-info">
							<div class="customer-info-icon">
								<span><i class="isax isax-sms5"></i></span>
							</div>
							<div class="customer-info-content">
								<span>Drop Us an Email</span>
								<h6>info@example.com</h6>
							</div>
						</div>
						<div class="customer-info">
							<div class="customer-info-icon">
								<span><i class="isax isax-call5"></i></span>
							</div>
							<div class="customer-info-content">
								<span>Toll Free</span>
								<h6>+1 56569 54698</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
						<div class="d-flex align-items-center">
							<ul class="social-icon">
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif

@if (Route::is(['index-6']))
 <!-- Footer -->
 <footer class="footer-three footer-six">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="footer-widget">
						<div class="footer-about">
							<div class="mb-4">
								<a href="{{url('index')}}" class="d-inline-block mb-1">
									<img src="{{URL::asset('build/img/logo.svg')}}" alt="logo">
								</a>
								<p>Our mission is to offer you a seamless and enjoyable car rental experience. Whether you’re planning a road trip</p>
							</div>
						</div>
						<ul class="social-icon">
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div>
						<h5 class="mb-2 text-white">Subscribe to Keep Updated</h5>
						<div class="footer-input">
							<div class="input-group align-items-center justify-content-center">
								<span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
								<input type="email" class="form-control" placeholder="Enter Email Address">
								<button type="submit" class="btn btn-primary btn-md">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Pages</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('team')}}">Our Team</a>
							</li>
							<li>
								<a href="{{url('pricing-plan')}}">Pricing Plans</a>
							</li>
							<li>
								<a href="{{url('gallery')}}">Gallery</a>
							</li>
							<li>
								<a href="{{url('profile-settings')}}">Settings</a>
							</li>
							<li>
								<a href="{{url('my-profile')}}">Profile</a>
							</li>
							<li>
								<a href="{{url('agent-listings')}}">Listings</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Company</h5>
						<ul class="footer-menu">
							<li>
								<a href="{{url('about-us')}}">About Us</a>
							</li>
							<li>
								<a href="javascript:void(0);">Careers</a>
							</li>
							<li>
								<a href="{{url('blog-grid')}}">Blog</a>
							</li>
							<li>
								<a href="javascript:void(0);">Affiliate Program</a>
							</li>
							<li>
								<a href="{{url('add-tour')}}">Add Your Listing</a>
							</li>
							<li>
								<a href="javascript:void(0);">Our Partners</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Destinations</h5>
						<ul class="footer-menu">
							<li>
								<a href="javascript:void(0);">Hawai</a>
							</li>
							<li>
								<a href="javascript:void(0);">Istanbul</a>
							</li>
							<li>
								<a href="javascript:void(0);">San Diego</a>
							</li>
							<li>
								<a href="javascript:void(0);">Belgium</a>
							</li>
							<li>
								<a href="javascript:void(0);">Newyork</a>
							</li>
							<li>
								<a href="javascript:void(0);">Los Angeles</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Quick Links</h5>
						<ul class="footer-menu">
							<li>
								<a href="javascript:void(0);">Legal Notice</a>
							</li>
							<li>
								<a href="{{url('privacy-policy')}}">Privacy Policy</a>
							</li>
							<li>
								<a href="{{url('terms-conditions')}}">Terms and Conditions</a>
							</li>
							<li>
								<a href="javascript:void(0);">Refund Policy</a>
							</li>
							<li>
								<a href="{{url('chat')}}">Chat Support</a>
							</li>
							<li>
								<a href="javascript:void(0);">Tickets</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto">
					<p class="text-center">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">DreamsTour</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
@endif

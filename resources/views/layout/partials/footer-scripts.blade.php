		 <!-- Jquery JS -->
		 <script src="{{URL::asset('build/js/jquery-3.7.1.min.js')}}"></script>

		 <!-- Bootstrap JS -->
		 <script src="{{URL::asset('build/js/bootstrap.bundle.min.js')}}"></script>
	 
		 <!-- Wow JS -->
		 <script src="{{URL::asset('build/js/wow.min.js')}}"></script>

		 <!-- MeanMenu Js -->
		 <script src="{{URL::asset('build/js/jquery.meanmenu.min.js')}}"></script>
	 
		 <!-- Swiper Js -->
		 <script src="{{URL::asset('build/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
	 
		 @if(Route::is(['agent-account-settings','agent-car-booking','agent-chat','agent-cruise',
		 'agent-dashboard',
		 'agent-listing',
		 'agent-notifications',
		 'agent-plans-settings',
		 'agent-plans',
		 'agent-security-settings',
		 'agent-settings',
		 'car-details',
		 'chat',
		 'cruise-details',
		 'customer-car-booking',
		 'customer-cruise-booking',
		 'customer-flight-bookings',
		 'customer-hotel-booking',
		 'customer-tour-booking',
		 'dashboard',
		 'faq',
		 'flight-details',
		 'gallery',
		 'hotel-details',
		 'index-2',
		 'index-3',
		 'index-3',
		 'index-4',
		 'index-5',
		 'index-6',
		 'index-rtl',
		 'index',
		 'integration-settings',
		 'my-profile',
		 'notification-settings',
		 'notification',
		 'preferences',
		 'pricing-plan',
		 'profile-settings',
		 'security-settings',
		 'testimonial',
		 'tour-details',
		 'wallet',
		 'wishlist'
		 ]))
		 <!-- Fancybox JS -->
		 <script src="{{URL::asset('build/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
		 @endif

		 @if (Route::is(['index-2','car-details','cruise-details','flight-details','tour-details']))
		  <!-- Slick Slider -->
		  <script src="{{URL::asset('build/plugins/slick/slick.min.js')}}"></script>
         @endif
		
		  <!-- Summernote JS -->
		  <script src="{{URL::asset('build/plugins/summernote/summernote-lite.min.js')}}"></script>
		 
		  @if (Route::is(['flight-grid','fligt-list',
		  'about-us',
    'become-an-expert',
    'blog-details',
    'blog-grid',
    'blog-list',
    'booking-confirmation',
    'car-booking-confirmation',
    'car-booking',
    'car-grid',
    'car-list',
    'car-map',
    'change-password',
    'coming-soon',
    'contact-us',
    'cruise-booking-confirmation',
    'cruise-booking',
    'cruise-grid',
    'cruise-list',
    'cruise-map',
    'error-404',
    'error-500',
    'faq',
    'flight-booking-confirmation',
    'flight-booking',
    'flight-grid',
    'flight-list',
    'forgot-password',
    'gallery',
    'hotel-booking',
    'hotel-grid',
    'hotel-list',
    'hotel-map',
    'invoices',
    'login',
    'pricing-plan',
    'privacy-policy',
    'register',
    'terms-conditions',
    'testimonial',
    'tour-booking',
    'tour-grid',
    'tour-list',
    'tour-map']))
		   <!-- Rangeslider JS -->
		   <script src="{{URL::asset('build/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>
		   <script src="{{URL::asset('build/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
		   <script src="{{URL::asset('build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
		   @endif
		  

		  <!-- Owlcarousel Js -->
          <script src="{{URL::asset('build/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
		
		  <!-- Select2 JS -->
		  <script src="{{URL::asset('build/plugins/select2/js/select2.min.js')}}"></script>

		  <!-- Sticky Sidebar JS -->
		  <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
		  <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

	  @if(Route::is(['about-us',
	  'agent-account-settings',
	  'agent-car-booking',
	  'agent-chat',
	  'agent-cruise-booking',
	  'agent-dashboard',
	  'agent-listing',
	  'agent-notifications',
	  'agent-plans-settings',
	  'agent-plans',
	  'agent-security-settings',
	  'agent-settings',
	  'bacome-an-expert',
	  'chat',
	  'customer-car-booking',
	  'customer-cruise-booking',
	  'customer-flight-booking',
	  'customer-hotel-booking',
	  'customer-tour-booking',
	  'dashboard',
	  'index-2',
	  'index-3',
	  'index-4',
	  'index-5',
	  'index-6',
	  'index',
	  'index-rtl',
	  'integration-settings',
	  'my-profile',
	  'notification-settings',
	  'notification',
	  'preferences-settings',
	  'profile-settings',
	  'security-settings',
	  'wallet',
	  'wishlist',
	  'become-an-expert'

	  ]))
		 <!-- Counter JS -->
		 <script src="{{URL::asset('build/js/jquery.counterup.min.js')}}"></script>
		 <script src="{{URL::asset('build/js/jquery.waypoints.min.js')}}"></script>
	 @endif
		 <!-- Datepicker Core JS -->
		 <script src="{{URL::asset('build/plugins/moment/moment.js')}}"></script>
		 <script src="{{URL::asset('build/js/bootstrap-datetimepicker.min.js')}}"></script>
       @if(Route::is(['car-map']))
	   <!-- map JS -->
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
	   <script src="{{URL::asset('build/js/map-car.js')}}"></script>
        @endif
		@if(Route::is(['hotel-map']))
		<!-- map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
		<script src="{{URL::asset('build/js/map-grid.js')}}"></script>
	    @endif
		@if(Route::is(['cruise-map']))
		<!-- map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
		<script src="{{URL::asset('build/js/map-cruise.js')}}"></script>
		@endif
		@if(Route::is(['tour-map']))
	      <!-- map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
        <script src="{{URL::asset('build/js/map-tour.js')}}"></script>
		@endif
		@if(Route::is(['customer-flight-booking','review','payment','wallet','agent-hotel-booking','agent-enquirers','agent-earnings','agent-review','agent-car-booking','agent-flight-booking','agent-tour-booking','customer-car-booking','customer-cruise-booking','customer-hotel-booking','customer-tour-booking']))
		 <!-- Daterangepikcer JS -->
		 <script src="{{URL::asset('build/js/moment.js')}}"></script>
		 <script src="{{URL::asset('build/plugins/daterangepicker/daterangepicker.js')}}"></script>
		 <script src="{{URL::asset('build/js/bootstrap-datetimepicker.min.js')}}"></script>
	 	  @endif
          @if(Route::is(['agent-chat','agent-dashboard','agent-earnings','agent-enquirers','agent-hotel-booking','agent-listings','chat','dashboard']))
		  <!-- Apex JS -->
		  <script src="{{URL::asset('build/plugins/apexchart/apexcharts.min.js')}}"></script>
		  <script src="{{URL::asset('build/plugins/apexchart/chart-data.js')}}"></script>
	  	  @endif
		 <!-- cursor JS -->
		 <script src="{{URL::asset('build/js/cursor.js')}}"></script>
	 
		 <!-- Script JS -->
		 <script src="{{URL::asset('build/js/script.js')}}"></script>
		 @if(Route::is(['index-rtl']))
		 <script src="{{URL::asset('build/js/script-rtl.js')}}"></script>
		 @endif
	 
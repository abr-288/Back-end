  <!-- Breadcrumb -->
  @if (Route::is(['hotel-grid','hotel-list','hotel-map','hotel-details','booking-confirmation','add-hotel','about-us',
  'gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us','destination','terms-conditions','privacy-policy','login',
  'register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl','become-an-expert','edit-hotel','notification']))
  <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
    @endif
    @if (Route::is(['cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise','edit-cruise','cruise-booking']))
    <div class="breadcrumb-bar breadcrumb-bg-06 text-center">
        @endif
    @if (!Route::is(['hotel-grid','hotel-list','hotel-map','hotel-details','car-booking-confirmation','add-hotel','car-grid','car-list'
    ,'car-map','car-details','booking-confirmation','add-car','cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation','add-cruise',
    'tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour','about-us',
  'gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us','destination','terms-conditions','privacy-policy','login',
  'register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl','dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings',
  'agent-hotel-booking','agent-enquirers','agent-earnings','agent-settings','agent-review','agent-account-settings','agent-car-booking','agent-chat','agent-cruise-booking','agent-enquiry-details','agent-flight-booking','agent-notifications','agent-plans','agent-plans-settings','agent-security-settings','agent-tour-booking','become-an-expert','car-booking','customer-car-booking','customer-cruise-booking','customer-hotel-booking','customer-tour-booking','edit-car','edit-cruise','edit-hotel','edit-tour','hotel-booking','preferences-settings','cruise-booking','integration-settings','notification']))
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
      @endif
      @if (Route::is(['car-grid','car-list','car-map','car-details','car-booking-confirmation','add-car','edit-car']))
      <div class="breadcrumb-bar breadcrumb-bg-03 text-center">
        @endif
        @if (Route::is(['tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','add-tour','car-booking','customer-tour-booking','edit-tour','hotel-booking']))
        <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        @endif
        @if(Route::is(['dashboard','customer-flight-booking','review','chat','wishlist','wallet','payment','profile-settings','notification-settings','my-profile','security-settings','agent-dashboard','agent-listings','agent-hotel-booking','agent-enquirers','agent-earnings','agent-settings',
        'agent-review','agent-account-settings','agent-car-booking','agent-chat','agent-cruise-booking','agent-enquiry-details','agent-flight-booking','agent-notifications','agent-plans','agent-plans-settings','agent-security-settings','agent-tour-booking','customer-car-booking','customer-cruise-booking','preferences-settings','integration-settings']))
        <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">{{ $title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href={{ $item1 }}><i class="isax isax-home5"></i></a></li>
                        @if (Route::is(['flight-grid','flight-list','flight-details','hotel-grid','hotel-list','hotel-map','hotel-details','car-booking-confirmation','add-hotel'
                        ,'car-grid','car-list','car-map','car-details','booking-confirmation','cruise-grid','cruise-list','cruise-map','cruise-details','cruise-booking-confirmation',
                        'tour-grid','tour-list','tour-map','tour-details','tour-booking-confirmation','about-us',
  'gallery','testimonial','faq','pricing-plan','team','invoices','blog-grid','blog-list','blog-details','contact-us','destination','terms-conditions','privacy-policy','login',
  'register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl']))
                        <li class="breadcrumb-item">{{ $item3 }}</li>
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">{{ $item2 }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->


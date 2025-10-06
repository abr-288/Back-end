<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CinetPay Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for CinetPay integration.
    |
    */

    'enabled' => env('CINETPAY_ENABLED', false),
    'site_id' => env('CINETPAY_SITE_ID'),
    'api_key' => env('CINETPAY_API_KEY'),
    'mode' => env('CINETPAY_MODE', 'test'), // 'test' ou 'prod'
    'notify_url' => env('CINETPAY_NOTIFY_URL', '/api/payments/cinetpay/notify'),
    'return_url' => env('CINETPAY_RETURN_URL', '/payments/cinetpay/return'),
    'cancel_url' => env('CINETPAY_CANCEL_URL', '/payments/cinetpay/cancel'),
];

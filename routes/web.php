<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes d'authentification
Auth::routes(['verify' => true]);

// Routes pour la 2FA
Route::middleware(['auth'])->group(function () {
    // Afficher le formulaire de configuration 2FA
    Route::get('/two-factor-auth', [\App\Http\Controllers\Auth\TwoFactorAuthController::class, 'show'])
        ->name('two-factor.show');
        
    // Activer la 2FA
    Route::post('/two-factor/enable', [\App\Http\Controllers\Auth\TwoFactorAuthController::class, 'enable'])
        ->name('two-factor.enable');
        
    // Désactiver la 2FA
    Route::post('/two-factor/disable', [\App\Http\Controllers\Auth\TwoFactorAuthController::class, 'disable'])
        ->name('two-factor.disable');
        
    // Afficher les codes de récupération
    Route::get('/two-factor/recovery-codes', [\App\Http\Controllers\Auth\TwoFactorAuthController::class, 'showRecoveryCodes'])
        ->name('two-factor.recovery-codes');
        
    // Générer de nouveaux codes de récupération
    Route::post('/two-factor/recovery-codes', [\App\Http\Controllers\Auth\TwoFactorAuthController::class, 'generateRecoveryCodes'])
        ->name('two-factor.generate-recovery-codes');
});

// Page d'accueil
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Page de détail d'une destination
Route::get('/destinations/{destination}', [App\Http\Controllers\DestinationController::class, 'show'])->name('destination.show');

// Routes pour les réservations
Route::middleware(['auth', 'verified'])->group(function () {
    // Afficher le formulaire de réservation
    Route::get('/hotels/{hotel}/book', [ReservationController::class, 'create'])
        ->name('reservations.create');
        
    // Enregistrer une nouvelle réservation
    Route::post('/hotels/{hotel}/book', [ReservationController::class, 'store'])
        ->name('reservations.store');
        
    // Afficher les détails d'une réservation
    Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])
        ->name('reservations.show')
        ->middleware('can:view,reservation');
        
    // Annuler une réservation
    Route::post('/reservations/{reservation}/cancel', [ReservationController::class, 'cancel'])
        ->name('reservations.cancel')
        ->middleware('can:cancel,reservation');
        
    // Historique des réservations
    Route::get('/my-reservations', [ReservationController::class, 'history'])
        ->name('reservations.history');
});

// Routes pour les paiements
Route::middleware(['auth', 'verified'])->group(function () {
    // Afficher le formulaire de paiement
    Route::get('/payments/create/{booking}', [PaymentController::class, 'create'])
        ->name('payments.create')
        ->middleware('can:pay,booking');
    
    // Initialiser un paiement CinetPay
    Route::post('/payments/initiate/{booking}', [PaymentController::class, 'initiate'])
        ->name('payments.initiate')
        ->middleware('can:pay,booking');
    
    // Gérer le retour après paiement CinetPay
    Route::get('/payments/cinetpay/return', [PaymentController::class, 'handleReturn'])
        ->name('payment.return');
    
    // Annuler un paiement
    Route::get('/payments/cinetpay/cancel', function () {
        return redirect()->route('bookings.index')
            ->with('warning', 'Le paiement a été annulé.');
    })->name('payment.cancel');
    
    // Afficher les détails d'un paiement
    Route::get('/payments/{payment}', [PaymentController::class, 'show'])
        ->name('payments.show')
        ->middleware('can:view,payment');
    
    // Demander un remboursement
    Route::post('/payments/{payment}/refund', [PaymentController::class, 'refund'])
        ->name('payments.refund')
        ->middleware('can:refund,payment');
    
    // Annuler un paiement
    Route::post('/payments/{payment}/cancel', [PaymentController::class, 'cancel'])
        ->name('payments.cancel')
        ->middleware('can:cancel,payment');
        
    // Télécharger le reçu de paiement
    Route::get('/payments/{payment}/receipt', [PaymentController::class, 'downloadReceipt'])
        ->name('payments.receipt')
        ->middleware('can:view,payment');
});

// Webhook pour les notifications CinetPay (CSRF désactivé pour cette route)
Route::post('/payments/cinetpay/notify', [PaymentController::class, 'handleNotification'])
    ->name('payment.notify')
    ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

// Route de test pour le PDF
Route::get('/test-pdf/{payment}', [\App\Http\Controllers\TestPdfController::class, 'test'])
    ->name('test.pdf');

// Routes pour les pages statiques
Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');

Route::get('/index-3', function () {
    return view('index-3');
})->name('index-3');

Route::get('/index-4', function () {
    return view('index-4');
})->name('index-4');

Route::get('/index-5', function () {
    return view('index-5');
})->name('index-5');

Route::get('/index-6', function () {
    return view('index-6');
})->name('index-6');

// Routes pour les vols
Route::get('/flight-search', function () {
    return view('flight-search');
})->name('flight.search');

Route::get('/add-flight', function () {
    return view('add-flight');
})->name('add-flight');

Route::get('/flight-grid', function () {
    return view('flight-grid');
})->name('flight-grid');

Route::get('/flight-list', function () {
    return view('flight-list');
})->name('flight-list');

Route::get('/flight-details', function () {
    return view('flight-details');
})->name('flight-details');

Route::get('/flight-booking-confirmation', function () {
    return view('flight-booking-confirmation');
})->name('flight-booking-confirmation');

Route::get('/hotel-grid', function () {
    return view('hotel-grid');
})->name('hotel-grid');

Route::get('/hotel-list', function () {
    return view('hotel-list');
})->name('hotel-list');

Route::get('/hotel-map', function () {
    return view('hotel-map');
})->name('hotel-map');

Route::get('/hotel-details', function () {
    return view('hotel-details');
})->name('hotel-details');

Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
})->name('booking-confirmation');

Route::get('/add-hotel', function () {
    return view('add-hotel');
})->name('add-hotel');

Route::get('/car-grid', function () {
    return view('car-grid');
})->name('car-grid');

Route::get('/car-list', function () {
    return view('car-list');
})->name('car-list');

Route::get('/car-map', function () {
    return view('car-map');
})->name('car-map');

Route::get('/car-details', function () {
    return view('car-details');
})->name('car-details');

Route::get('/car-booking-confirmation', function () {
    return view('car-booking-confirmation');
})->name('car-booking-confirmation');

Route::get('/add-car', function () {
    return view('add-car');
})->name('add-car');

Route::get('/cruise-grid', function () {
    return view('cruise-grid');
})->name('cruise-grid');

Route::get('/cruise-list', function () {
    return view('cruise-list');
})->name('cruise-list');

Route::get('/cruise-map', function () {
    return view('cruise-map');
})->name('cruise-map');

Route::get('/cruise-details', function () {
    return view('cruise-details');
})->name('cruise-details');

Route::get('/cruise-booking-confirmation', function () {
    return view('cruise-booking-confirmation');
})->name('cruise-booking-confirmation');

Route::get('/add-cruise', function () {
    return view('add-cruise');
})->name('add-cruise');

Route::get('/tour-grid', function () {
    return view('tour-grid');
})->name('tour-grid');

Route::get('/tour-list', function () {
    return view('tour-list');
})->name('tour-list');

Route::get('/tour-map', function () {
    return view('tour-map');
})->name('tour-map');

Route::get('/tour-details', function () {
    return view('tour-details');
})->name('tour-details');

Route::get('/tour-booking-confirmation', function () {
    return view('tour-booking-confirmation');
})->name('tour-booking-confirmation');

Route::get('/add-tour', function () {
    return view('add-tour');
})->name('add-tour');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/pricing-plan', function () {
    return view('pricing-plan');
})->name('pricing-plan');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/index-rtl', function () {
    return view('index-rtl');
})->name('index-rtl');

Route::get('/customer-flight-booking', function () {
    return view('customer-flight-booking');
})->name('customer-flight-booking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Cette route est en double, elle a déjà été définie plus haut
// Route::get('/customer-flight-booking', function () {
//     return view('customer-flight-booking');
// })->name('customer-flight-booking');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet');

// Route de démonstration pour le paiement (à supprimer en production)
Route::get('/payment', function () {
    // Créer une réservation factice pour le test
    $booking = new \App\Models\Reservation([
        'id' => 1,
        'reference' => 'TEST-' . time(),
        'total_amount' => 150000,
        'status' => 'pending',
        'user_id' => auth()->id() ?? 1,
    ]);
    
    return view('payment', [
        'booking' => $booking,
        'user' => auth()->user() ?? new \App\Models\User(),
        'cinetpay_available' => false,
        'payment_methods' => [
            'cinetpay' => false,
        ]
    ]);
})->name('payment')->middleware('auth');

Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/notification-settings', function () {
    return view('notification-settings');
})->name('notification-settings');

Route::get('/my-profile', function () {
    return view('my-profile');
})->name('my-profile');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/agent-dashboard', function () {
    return view('agent-dashboard');
})->name('agent-dashboard');

Route::get('/agent-listings', function () {
    return view('agent-listings');
})->name('agent-listings');

Route::get('/agent-hotel-booking', function () {
    return view('agent-hotel-booking');
})->name('agent-hotel-booking');

Route::get('/agent-enquirers', function () {
    return view('agent-enquirers');
})->name('agent-enquirers');

Route::get('/agent-earnings', function () {
    return view('agent-earnings');
})->name('agent-earnings');

Route::get('/agent-review', function () {
    return view('agent-review');
})->name('agent-review');

Route::get('/agent-settings', function () {
    return view('agent-settings');
})->name('agent-settings');

Route::get('/agent-account-settings', function () {
    return view('agent-account-settings');
})->name('agent-account-settings');

Route::get('/agent-car-booking', function () {
    return view('agent-car-booking');
})->name('agent-car-booking');

Route::get('/agent-chat', function () {
    return view('agent-chat');
})->name('agent-chat');

Route::get('/agent-cruise-booking', function () {
    return view('agent-cruise-booking');
})->name('agent-cruise-booking');

Route::get('/agent-enquiry-details', function () {
    return view('agent-enquiry-details');
})->name('agent-enquiry-details');

Route::get('/agent-flight-booking', function () {
    return view('agent-flight-booking');
})->name('agent-flight-booking');

Route::get('/agent-notifications', function () {
    return view('agent-notifications');
})->name('agent-notifications');

Route::get('/agent-plans', function () {
    return view('agent-plans');
})->name('agent-plans');

Route::get('/agent-plans-settings', function () {
    return view('agent-plans-settings');
})->name('agent-plans-settings');

Route::get('/agent-security-settings', function () {
    return view('agent-security-settings');
})->name('agent-security-settings');

Route::get('/agent-tour-booking', function () {
    return view('agent-tour-booking');
})->name('agent-tour-booking');

// Route pour la recherche d'hôtels
Route::get('/hotel-search', function () {
    return view('hotel-search');
})->name('hotel.search');

Route::get('/become-an-expert', function () {
    return view('become-an-expert');
})->name('become-an-expert');

Route::get('/car-booking', function () {
    return view('car-booking');
})->name('car-booking');

// Suppression des doublons
// Route::get('/customer-car-booking', function () {
//     return view('customer-car-booking');
// })->name('customer-car-booking');

// Suppression des doublons
// Route::get('/cruise-grid', function () {
//     return view('cruise-grid');
// })->name('cruise-grid');

Route::get('/customer-cruise-booking', function () {
    return view('customer-cruise-booking');
})->name('customer-cruise-booking');

Route::get('/customer-hotel-booking', function () {
    return view('customer-hotel-booking');
})->name('customer-hotel-booking');

Route::get('/customer-tour-booking', function () {
    return view('customer-tour-booking');
})->name('customer-tour-booking');

Route::get('/edit-car', function () {
    return view('edit-car');
})->name('edit-car');

Route::get('/edit-cruise', function () {
    return view('edit-cruise');
})->name('edit-cruise');

Route::get('/edit-flight', function () {
    return view('edit-flight');
})->name('edit-flight');

Route::get('/edit-hotel', function () {
    return view('edit-hotel');
})->name('edit-hotel');

Route::get('/edit-tour', function () {
    return view('edit-tour');
})->name('edit-tour');

Route::get('/flight-booking', function () {
    return view('flight-booking');
})->name('flight-booking');

Route::get('/hotel-booking', function () {
    return view('hotel-booking');
})->name('hotel-booking');

Route::get('/preferences-settings', function () {
    return view('preferences-settings');
})->name('preferences-settings');

Route::get('/cruise-booking', function () {
    return view('cruise-booking');
})->name('cruise-booking');

Route::get('/integration-settings', function () {
    return view('integration-settings');
})->name('integration-settings');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

/********************ADMIN ROUTES END******************************/

// Routes d'authentification (en double, on ne garde qu'une seule occurrence)
Auth::routes();

// Page d'accueil après connexion
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

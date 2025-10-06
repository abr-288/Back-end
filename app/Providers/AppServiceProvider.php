<?php

namespace App\Providers;

use App\Services\PaymentService;
use App\Services\PaymentGateways\CinetPayGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentService::class, function ($app) {
            return new PaymentService();
        });

        // Enregistrement des passerelles de paiement
        $this->app->bind('payment.gateway.cinetpay', function ($app) {
            return new CinetPayGateway();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Configuration des chemins pour les vues
        $this->loadViewsFrom(resource_path('views'), 'back-office');
        
        // Configuration des chemins pour les fichiers de traduction
        $this->loadTranslationsFrom(resource_path('lang'), 'back-office');
        
        // Configuration des routes
        $this->loadRoutesFrom(base_path('routes/web.php'));
        
        // Configuration des migrations
        $this->loadMigrationsFrom(database_path('migrations'));
    }
}

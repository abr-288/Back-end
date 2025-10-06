<?php

namespace App\Providers;

use App\Models\Payment;
use App\Policies\PaymentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Les mappages de modèles vers leurs politiques.
     *
     * @var array
     */
    protected $policies = [
        Payment::class => PaymentPolicy::class,
    ];

    /**
     * Enregistre les services d'authentification/autorisation.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Features;
use Laravel\Fortify\RecoveryCode;

class TwoFactorAuthController extends Controller
{
    /**
     * Afficher la page de configuration de la 2FA
     */
    public function show()
    {
        if (! Features::canManageTwoFactorAuthentication()) {
            return redirect()->route('profile.show');
        }

        return view('profile.two-factor-authentication-form', [
            'enabled' => auth()->user()->two_factor_secret !== null,
        ]);
    }

    /**
     * Activer la 2FA
     */
    public function enable(Request $request, EnableTwoFactorAuthentication $enable)
    {
        if (! Features::canManageTwoFactorAuthentication()) {
            return response()->json([
                'message' => 'La double authentification n\'est pas disponible.'
            ], 403);
        }

        $enable($request->user());

        return response()->json([
            'message' => 'La double authentification a été activée avec succès.',
            'recovery_codes' => $request->user()->recoveryCodes(),
        ]);
    }

    /**
     * Désactiver la 2FA
     */
    public function disable(Request $request, DisableTwoFactorAuthentication $disable)
    {
        if (! Features::canManageTwoFactorAuthentication()) {
            return response()->json([
                'message' => 'La double authentification n\'est pas disponible.'
            ], 403);
        }

        $disable($request->user());

        return response()->json([
            'message' => 'La double authentification a été désactivée avec succès.'
        ]);
    }

    /**
     * Afficher les codes de récupération
     */
    public function showRecoveryCodes()
    {
        if (! Features::optionEnabled(Features::twoFactorAuthentication(), 'generate')) {
            return response()->json([
                'message' => 'La génération de codes de récupération n\'est pas activée.'
            ], 403);
        }

        return response()->json([
            'recovery_codes' => auth()->user()->recoveryCodes()
        ]);
    }

    /**
     * Générer de nouveaux codes de récupération
     */
    public function generateRecoveryCodes()
    {
        if (! Features::optionEnabled(Features::twoFactorAuthentication(), 'generate')) {
            return response()->json([
                'message' => 'La génération de codes de récupération n\'est pas activée.'
            ], 403);
        }

        auth()->user()->generateTwoFactorRecoveryCodes();
        auth()->user()->save();

        return response()->json([
            'message' => 'De nouveaux codes de récupération ont été générés avec succès.',
            'recovery_codes' => auth()->user()->recoveryCodes(),
        ]);
    }
}

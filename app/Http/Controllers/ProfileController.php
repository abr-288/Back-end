<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Affiche le profil de l'utilisateur connecté
     */
    public function show()
    {
        $user = Auth::user()->load(['addresses', 'documents', 'preferences']);
        return view('profile.show', compact('user'));
    }

    /**
     * Affiche le formulaire de modification du profil
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Met à jour les informations du profil
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date|before:today',
            'gender' => 'nullable|in:male,female,other',
            'nationality' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'avatar
        if ($request->hasFile('avatar')) {
            // Supprimer l'ancien avatar si nécessaire
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            
            $path = $request->file('avatar')->store('avatars/' . $user->id, 'public');
            $validated['avatar'] = $path;
        }

        $user->update($validated);

        return redirect()->route('profile.show')
            ->with('success', 'Profil mis à jour avec succès !');
    }

    /**
     * Affiche le formulaire de modification du mot de passe
     */
    public function editPassword()
    {
        return view('profile.password');
    }

    /**
     * Met à jour le mot de passe de l'utilisateur
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profile.show')
            ->with('success', 'Mot de passe mis à jour avec succès !');
    }

    /**
     * Affiche l'historique des réservations de l'utilisateur
     */
    public function bookings()
    {
        $bookings = Auth::user()->reservations()
            ->with(['bookable'])
            ->latest()
            ->paginate(10);

        return view('profile.bookings', compact('bookings'));
    }

    /**
     * Affiche les préférences de l'utilisateur
     */
    public function preferences()
    {
        $user = Auth::user()->load('preferences');
        return view('profile.preferences', compact('user'));
    }

    /**
     * Met à jour les préférences de l'utilisateur
     */
    public function updatePreferences(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required|string|in:en,fr,es,de',
            'currency' => 'required|string|in:USD,EUR,GBP',
            'timezone' => 'required|timezone',
            'newsletter' => 'boolean',
            'notification_email' => 'boolean',
            'notification_sms' => 'boolean',
            'preferred_airlines' => 'nullable|array',
            'preferred_hotel_chains' => 'nullable|array',
            'special_needs' => 'nullable|string|max:500',
        ]);

        Auth::user()->preferences()->updateOrCreate(
            ['user_id' => Auth::id()],
            $validated
        );

        return redirect()->route('profile.preferences')
            ->with('success', 'Préférences mises à jour avec succès !');
    }
}

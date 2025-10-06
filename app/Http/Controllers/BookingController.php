<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Affiche la liste des réservations de l'utilisateur connecté
     */
    public function index()
    {
        $bookings = Auth::user()->reservations()->with(['bookable'])->latest()->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Affiche le formulaire de création d'une nouvelle réservation
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Enregistre une nouvelle réservation
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bookable_type' => 'required|string|in:hotel,flight,car,tour,cruise',
            'bookable_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'guests' => 'required|integer|min:1',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        $booking = Auth::user()->reservations()->create($validated);

        return redirect()->route('bookings.show', $booking)
            ->with('success', 'Réservation effectuée avec succès !');
    }

    /**
     * Affiche les détails d'une réservation spécifique
     */
    public function show(Reservation $booking)
    {
        $this->authorize('view', $booking);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Annule une réservation
     */
    public function cancel(Reservation $booking)
    {
        $this->authorize('cancel', $booking);
        
        if ($booking->canBeCancelled()) {
            $booking->update(['status' => 'cancelled']);
            return back()->with('success', 'Réservation annulée avec succès.');
        }

        return back()->with('error', 'Impossible d\'annuler cette réservation.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    /**
     * Affiche le formulaire de réservation
     */
    public function create(Hotel $hotel, Room $room = null)
    {
        $hotel->load('rooms.roomType');
        
        return view('reservations.create', compact('hotel', 'room'));
    }

    /**
     * Enregistre une nouvelle réservation
     */
    public function store(Request $request, Hotel $hotel)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after:yesterday',
            'check_out' => 'required|date|after:check_in',
            'adults' => 'required|integer|min:1',
            'children' => 'integer|min:0',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        // Vérifier la disponibilité de la chambre
        $room = Room::findOrFail($validated['room_id']);
        
        if (!$room->isAvailableForDates($validated['check_in'], $validated['check_out'])) {
            return back()->withErrors([
                'room_id' => 'Cette chambre n\'est pas disponible pour les dates sélectionnées.'
            ])->withInput();
        }

        // Calculer le prix total
        $nights = now()->parse($validated['check_out'])->diffInDays(now()->parse($validated['check_in']));
        $totalAmount = $room->calculateTotalPrice($validated['check_in'], $validated['check_out']);

        // Créer la réservation
        $reservation = new Reservation([
            'user_id' => Auth::id(),
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'adults' => $validated['adults'],
            'children' => $validated['children'] ?? 0,
            'special_requests' => $validated['special_requests'] ?? null,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        $reservation->reservable()->associate($hotel);
        $reservation->save();
        $reservation->rooms()->attach($room->id);

        // Rediriger vers la page de paiement
        return redirect()->route('payments.create', $reservation);
    }

    /**
     * Affiche les détails d'une réservation
     */
    public function show(Reservation $reservation)
    {
        $this->authorize('view', $reservation);
        
        $reservation->load(['user', 'rooms.roomType', 'payments']);
        
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Annule une réservation
     */
    public function cancel(Reservation $reservation)
    {
        $this->authorize('cancel', $reservation);
        
        if (!$reservation->canBeCancelled()) {
            return back()->with('error', 'Cette réservation ne peut pas être annulée.');
        }
        
        $reservation->update(['status' => 'cancelled']);
        
        // Remboursement si nécessaire
        if ($reservation->paid_amount > 0) {
            // Logique de remboursement ici
        }
        
        return redirect()->route('reservations.show', $reservation)
            ->with('success', 'Votre réservation a été annulée avec succès.');
    }

    /**
     * Affiche l'historique des réservations de l'utilisateur
     */
    public function history()
    {
        $reservations = Auth::user()->reservations()
            ->with(['reservable', 'rooms.roomType', 'payments'])
            ->latest()
            ->paginate(10);
            
        return view('reservations.history', compact('reservations'));
    }
}

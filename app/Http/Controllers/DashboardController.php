<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Flight;
use App\Models\Car;
use App\Models\Tour;
use App\Models\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Affiche le tableau de bord utilisateur
     */
    public function userDashboard()
    {
        $user = Auth::user();
        
        $upcomingTrips = $user->reservations()
            ->with('bookable')
            ->where('start_date', '>=', now())
            ->orderBy('start_date')
            ->take(3)
            ->get();
            
        $recentBookings = $user->reservations()
            ->with('bookable')
            ->latest()
            ->take(5)
            ->get();
            
        $wishlist = $user->wishlist()
            ->with('wishlistable')
            ->latest()
            ->take(5)
            ->get();
            
        $stats = [
            'total_trips' => $user->reservations()->count(),
            'upcoming_trips' => $user->reservations()
                ->where('start_date', '>=', now())
                ->count(),
            'loyalty_points' => $user->loyalty_points ?? 0,
            'saved_amount' => $user->reservations()
                ->where('status', 'confirmed')
                ->sum('discount_amount') ?? 0,
        ];
        
        return view('dashboard.user', compact(
            'upcomingTrips', 
            'recentBookings', 
            'wishlist', 
            'stats'
        ));
    }
    
    /**
     * Affiche le tableau de bord de l'agent
     */
    public function agentDashboard()
    {
        $user = Auth::user();
        $now = now();
        
        // Statistiques générales
        $stats = [
            'total_bookings' => $user->agentBookings()->count(),
            'monthly_bookings' => $user->agentBookings()
                ->whereBetween('created_at', [$now->startOfMonth(), $now->copy()->endOfMonth()])
                ->count(),
            'total_earnings' => $user->earnings(),
            'monthly_earnings' => $user->earnings($now->startOfMonth(), $now->copy()->endOfMonth()),
            'pending_approvals' => $user->properties()
                ->where('status', 'pending')
                ->count(),
        ];
        
        // Réservations récentes
        $recentBookings = $user->agentBookings()
            ->with(['bookable', 'user'])
            ->latest()
            ->take(5)
            ->get();
            
        // Revenus mensuels (6 derniers mois)
        $monthlyEarnings = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = $now->copy()->subMonths($i);
            $monthlyEarnings[] = [
                'month' => $date->format('M Y'),
                'amount' => $user->earnings(
                    $date->copy()->startOfMonth(),
                    $date->copy()->endOfMonth()
                )
            ];
        }
        
        return view('dashboard.agent', compact(
            'stats', 
            'recentBookings',
            'monthlyEarnings'
        ));
    }
    
    /**
     * Affiche le tableau de bord administrateur
     */
    public function adminDashboard()
    {
        $now = Carbon::now();
        
        // Statistiques générales
        $stats = [
            'total_users' => \App\Models\User::count(),
            'new_users' => \App\Models\User::where('created_at', '>=', $now->copy()->subDays(30))->count(),
            'total_bookings' => Reservation::count(),
            'monthly_bookings' => Reservation::whereBetween('created_at', [$now->copy()->startOfMonth(), $now->copy()->endOfMonth()])->count(),
            'total_revenue' => Reservation::where('status', 'confirmed')->sum('total_amount'),
            'monthly_revenue' => Reservation::where('status', 'confirmed')
                ->whereBetween('created_at', [$now->copy()->startOfMonth(), $now->copy()->endOfMonth()])
                ->sum('total_amount'),
        ];
        
        // Dernières réservations
        $recentBookings = Reservation::with(['user', 'bookable'])
            ->latest()
            ->take(5)
            ->get();
            
        // Derniers utilisateurs inscrits
        $recentUsers = \App\Models\User::withCount('reservations')
            ->latest()
            ->take(5)
            ->get();
            
        // Répartition des réservations par type
        $bookingTypes = [
            'hotels' => Hotel::count(),
            'flights' => Flight::count(),
            'cars' => Car::count(),
            'tours' => Tour::count(),
            'cruises' => Cruise::count(),
        ];
        
        // Revenus mensuels (12 derniers mois)
        $monthlyRevenue = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = $now->copy()->subMonths($i);
            $monthlyRevenue[] = [
                'month' => $date->format('M Y'),
                'revenue' => Reservation::where('status', 'confirmed')
                    ->whereBetween('created_at', [
                        $date->copy()->startOfMonth(),
                        $date->copy()->endOfMonth()
                    ])
                    ->sum('total_amount')
            ];
        }
        
        return view('dashboard.admin', compact(
            'stats',
            'recentBookings',
            'recentUsers',
            'bookingTypes',
            'monthlyRevenue'
        ));
    }
}

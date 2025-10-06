<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Affiche le tableau de bord d'administration
     */
    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'new_users' => User::where('created_at', '>=', now()->subDays(30))->count(),
            'total_hotels' => Hotel::count(),
            'total_bookings' => Reservation::count(),
            'revenue' => Reservation::where('status', 'confirmed')
                ->where('created_at', '>=', now()->startOfMonth())
                ->sum('total_amount'),
        ];

        $recentBookings = Reservation::with(['user', 'bookable'])
            ->latest()
            ->take(10)
            ->get();

        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentBookings', 'recentUsers'));
    }

    /**
     * Affiche la liste des utilisateurs
     */
    public function users()
    {
        $users = User::withCount(['reservations', 'reviews'])
            ->latest()
            ->paginate(20);
            
        return view('admin.users.index', compact('users'));
    }

    /**
     * Affiche les détails d'un utilisateur
     */
    public function showUser(User $user)
    {
        $user->loadCount(['reservations', 'reviews']);
        $bookings = $user->reservations()
            ->with('bookable')
            ->latest()
            ->paginate(10);
            
        return view('admin.users.show', compact('user', 'bookings'));
    }

    /**
     * Met à jour le statut d'un utilisateur
     */
    public function updateUserStatus(Request $request, User $user)
    {
        $validated = $request->validate([
            'status' => 'required|in:active,suspended,banned',
            'reason' => 'nullable|string|max:500',
        ]);

        $user->update(['status' => $validated['status']]);

        // Enregistrer la raison de la suspension/bannissement si fournie
        if ($validated['reason']) {
            $user->statusLogs()->create([
                'status' => $validated['status'],
                'reason' => $validated['reason'],
                'admin_id' => auth()->id(),
            ]);
        }

        return back()->with('success', 'Statut utilisateur mis à jour avec succès.');
    }

    /**
     * Affiche les paramètres du site
     */
    public function settings()
    {
        $settings = [
            'site_name' => config('app.name'),
            'contact_email' => config('mail.contact_email'),
            'booking_commission' => config('services.booking_commission'),
            // Ajoutez d'autres paramètres selon vos besoins
        ];

        return view('admin.settings', compact('settings'));
    }

    /**
     * Met à jour les paramètres du site
     */
    public function updateSettings(Request $request)
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'booking_commission' => 'required|numeric|min:0|max:100',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);

        // Ici, vous devriez enregistrer ces paramètres dans votre système de configuration
        // ou dans une table de base de données pour les paramètres

        return back()->with('success', 'Paramètres mis à jour avec succès.');
    }

    /**
     * Affiche les rapports
     */
    public function reports()
    {
        $reports = [
            'monthly_revenue' => $this->getMonthlyRevenue(),
            'top_destinations' => $this->getTopDestinations(),
            'booking_sources' => $this->getBookingSources(),
            // Ajoutez d'autres rapports selon vos besoins
        ];

        return view('admin.reports', compact('reports'));
    }

    /**
     * Génère un rapport de revenus mensuels
     */
    private function getMonthlyRevenue()
    {
        return DB::table('reservations')
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
                DB::raw('COUNT(*) as total_bookings'),
                DB::raw('SUM(total_amount) as total_revenue')
            )
            ->where('status', 'confirmed')
            ->where('created_at', '>=', now()->subYear())
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    }

    /**
     * Récupère les destinations les plus populaires
     */
    private function getTopDestinations()
    {
        return DB::table('reservations')
            ->select(
                'destination_city',
                'destination_country',
                DB::raw('COUNT(*) as booking_count')
            )
            ->whereNotNull('destination_city')
            ->groupBy('destination_city', 'destination_country')
            ->orderByDesc('booking_count')
            ->limit(10)
            ->get();
    }

    /**
     * Récupère les sources de réservation
     */
    private function getBookingSources()
    {
        return DB::table('reservations')
            ->select(
                'source',
                DB::raw('COUNT(*) as count'),
                DB::raw('ROUND(COUNT(*) * 100.0 / (SELECT COUNT(*) FROM reservations), 2) as percentage')
            )
            ->groupBy('source')
            ->get();
    }
}

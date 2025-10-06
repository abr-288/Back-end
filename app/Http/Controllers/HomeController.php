<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Suppression du middleware d'authentification pour la page d'accueil
        // $this->middleware('auth');
    }

    /**
     * Affiche la page d'accueil avec les destinations populaires.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $featuredDestinations = [
            [
                'name' => 'Paris, France',
                'image' => 'build/img/destinations/paris.jpg',
                'price' => 450,
                'url' => route('destination.show', 'paris')
            ],
            [
                'name' => 'New York, USA',
                'image' => 'build/img/destinations/new-york.jpg',
                'price' => 850,
                'url' => route('destination.show', 'new-york')
            ],
            [
                'name' => 'Tokyo, Japon',
                'image' => 'build/img/destinations/tokyo.jpg',
                'price' => 1200,
                'url' => route('destination.show', 'tokyo')
            ],
            [
                'name' => 'Bali, Indonésie',
                'image' => 'build/img/destinations/bali.jpg',
                'price' => 950,
                'url' => route('destination.show', 'bali')
            ],
            [
                'name' => 'Rome, Italie',
                'image' => 'build/img/destinations/rome.jpg',
                'price' => 550,
                'url' => route('destination.show', 'rome')
            ],
            [
                'name' => 'Sydney, Australie',
                'image' => 'build/img/destinations/sydney.jpg',
                'price' => 1300,
                'url' => route('destination.show', 'sydney')
            ]
        ];

        return view('index', compact('featuredDestinations'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Affiche les détails d'une destination.
     *
     * @param  string  $destination
     * @return \Illuminate\View\View
     */
    public function show($destination)
    {
        // Pour l'instant, on retourne simplement une vue avec le nom de la destination
        // Vous pouvez ajouter plus de logique ici pour récupérer les détails de la destination depuis la base de données
        return view('destinations.show', [
            'destination' => $destination,
            'title' => ucfirst($destination) // Juste pour l'exemple
        ]);
    }
}

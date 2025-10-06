<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Affiche la liste des hôtels
     */
    public function index(Request $request)
    {
        $query = Hotel::query()->with(['rooms', 'facilities']);

        // Filtres
        if ($request->has('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }
        
        if ($request->has('stars')) {
            $query->whereIn('star_rating', (array)$request->stars);
        }

        $hotels = $query->paginate(12);
        
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Affiche les détails d'un hôtel
     */
    public function show(Hotel $hotel)
    {
        $hotel->load(['rooms', 'facilities', 'reviews.user']);
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Affiche le formulaire de création d'un hôtel (admin)
     */
    public function create()
    {
        $this->authorize('create', Hotel::class);
        return view('hotels.create');
    }

    /**
     * Enregistre un nouvel hôtel (admin)
     */
    public function store(Request $request)
    {
        $this->authorize('create', Hotel::class);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'star_rating' => 'required|integer|min:1|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'facilities' => 'array',
            'facilities.*' => 'exists:facilities,id',
        ]);

        $hotel = Hotel::create($validated);

        // Gestion des images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('hotels/' . $hotel->id, 'public');
                $hotel->images()->create(['path' => $path]);
            }
        }

        // Attacher les équipements
        if (isset($validated['facilities'])) {
            $hotel->facilities()->attach($validated['facilities']);
        }

        return redirect()->route('hotels.show', $hotel)
            ->with('success', 'Hôtel créé avec succès !');
    }

    /**
     * Affiche le formulaire de modification d'un hôtel (admin)
     */
    public function edit(Hotel $hotel)
    {
        $this->authorize('update', $hotel);
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Met à jour un hôtel (admin)
     */
    public function update(Request $request, Hotel $hotel)
    {
        $this->authorize('update', $hotel);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'star_rating' => 'required|integer|min:1|max:5',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facilities' => 'array',
            'facilities.*' => 'exists:facilities,id',
        ]);

        $hotel->update($validated);

        // Gestion des images
        if ($request->hasFile('images')) {
            // Supprimer les anciennes images si nécessaire
            // $hotel->images()->delete();
            
            foreach ($request->file('images') as $image) {
                $path = $image->store('hotels/' . $hotel->id, 'public');
                $hotel->images()->create(['path' => $path]);
            }
        }

        // Mettre à jour les équipements
        if (isset($validated['facilities'])) {
            $hotel->facilities()->sync($validated['facilities']);
        }

        return redirect()->route('hotels.show', $hotel)
            ->with('success', 'Hôtel mis à jour avec succès !');
    }

    /**
     * Supprime un hôtel (admin)
     */
    public function destroy(Hotel $hotel)
    {
        $this->authorize('delete', $hotel);
        
        // Supprimer les images du stockage
        foreach ($hotel->images as $image) {
            Storage::disk('public')->delete($image->path);
        }
        
        $hotel->delete();
        
        return redirect()->route('hotels.index')
            ->with('success', 'Hôtel supprimé avec succès !');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $famousHotels = [
            [
                'name' => 'Hotel Ritz Paris',
                'description' => 'Luxueux hôtel parisien au cœur de la Place Vendôme.',
                'location' => 'Paris, 15 Place Vendôme',
                'image' => 'ritz-paris.jpg'
            ],
            [
                'name' => 'Burj Al Arab',
                'description' => 'Hôtel iconique en forme de voile à Dubaï.',
                'location' => 'Dubai, Jumeirah Beach Road',
                'image' => 'burj-al-arab.jpg'
            ]
        ];

        foreach ($famousHotels as $hotel) {
            Hotel::create($hotel);
        }

        // Ajouter des hôtels via factory
        Hotel::factory(30)->create();
    }
}

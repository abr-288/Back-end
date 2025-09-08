<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;
use App\Models\Airline;
class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // S'assurer qu'on a des compagnies
        if (Airline::count() === 0) {
            $this->call(AirlineSeeder::class);
        }

        // Créer des vols pour chaque compagnie
        Airline::all()->each(function ($airline) {
            Flight::factory(rand(5, 15))
                ->create(['airline_id' => $airline->id]);
        });
    }
}

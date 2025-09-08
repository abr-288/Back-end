<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airline;
class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Créer des compagnies réelles
        $realAirlines = [
            ['name' => 'Air France', 'code' => 'AF', 'logo' => 'air-france-logo.png'],
            ['name' => 'Emirates', 'code' => 'EK', 'logo' => 'emirates-logo.png'],
            ['name' => 'Lufthansa', 'code' => 'LH', 'logo' => 'lufthansa-logo.png'],
            ['name' => 'British Airways', 'code' => 'BA', 'logo' => 'british-airways-logo.png'],
            ['name' => 'KLM', 'code' => 'KL', 'logo' => 'klm-logo.png'],
        ];

        foreach ($realAirlines as $airline) {
            Airline::create($airline);
        }

        // Ajouter des compagnies fictives via factory
        Airline::factory(15)->create();
    }
}

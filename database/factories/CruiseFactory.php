<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cruise>
 */
class CruiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ships = ['Ocean Explorer', 'Sea Princess', 'Golden Voyager', 'Blue Horizon', 'Royal Navigator'];
        $itineraries = [
            'Méditerranée - Barcelone to Rome',
            'Caraïbes - Miami to Cozumel',
            'Fjords de Norvège - Bergen to Geiranger',
            'Îles Grecques - Athènes to Santorin',
            'Baltique - Stockholm to Copenhagen'
        ];

        return [
            'ship_name' => fake()->randomElement($ships),
            'itinerary' => fake()->randomElement($itineraries),
            'price' => fake()->randomFloat(2, 800, 8000),
            'cabins' => fake()->numberBetween(100, 1000),
            'available' => fake()->boolean(75) // 75% de chance d'être disponible
        ];
    }
}

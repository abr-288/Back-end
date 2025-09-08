<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Airline;
use App\Models\Flight;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cities = ['Paris', 'Londres', 'Madrid', 'Rome', 'Berlin', 'Amsterdam', 'Bruxelles', 'Zurich', 'Milan', 'Barcelone'];

        $departureTime = fake()->dateTimeBetween('+1 week', '+3 months');
        $arrivalTime = (clone $departureTime)->modify('+' . fake()->numberBetween(1, 12) . ' hours');
        return [
            //
            'airline_id' => Airline::factory(),
            'departure_city' => fake()->randomElement($cities),
            'arrival_city' => fake()->randomElement($cities),
            'departure_time' => $departureTime,
            'arrival_time' => $arrivalTime,
            'seats' => fake()->numberBetween(50, 400),
            'price' => fake()->randomFloat(2, 150, 2500)
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomTypes = ['Standard', 'Deluxe', 'Suite', 'Presidential', 'Family', 'Business'];

        return [
            'hotel_id' => Hotel::factory(),
            'type' => fake()->randomElement($roomTypes),
            'capacity' => fake()->numberBetween(1, 6),
            'price_per_night' => fake()->randomFloat(2, 50, 800),
            'available' => fake()->boolean(85) // 85% de chance d'être disponible
        ];
    }
}

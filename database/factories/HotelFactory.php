<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotelTypes = ['Hotel', 'Resort', 'Palace', 'Inn', 'Lodge', 'Suites'];
        $cities = ['Paris', 'Londres', 'Madrid', 'Rome', 'Berlin', 'Amsterdam', 'Bruxelles', 'Zurich', 'Milan', 'Barcelone'];

        return [
            'name' => fake()->randomElement($hotelTypes) . ' ' . fake()->lastName(),
            'description' => fake()->paragraphs(3, true),
            'location' => fake()->randomElement($cities) . ', ' . fake()->streetAddress(),
            'image' => fake()->imageUrl(800, 600, 'city', true, 'hotel')
        ];
    }
}

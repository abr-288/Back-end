<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $destinations = [
            'Tour de Paris et ses monuments',
            'Circuit des châteaux de la Loire',
            'Découverte de la Toscane',
            'Road trip en Andalousie',
            'Les capitales nordiques',
            'Safari africain',
            'Circuit du Machu Picchu',
            'Temples d\'Angkor',
            'Route de la soie'
        ];

        return [
            'title' => fake()->randomElement($destinations),
            'description' => fake()->paragraphs(4, true),
            'duration_days' => fake()->numberBetween(3, 21),
            'price' => fake()->randomFloat(2, 300, 5000),
            'seats' => fake()->numberBetween(10, 50),
            'image' => fake()->imageUrl(800, 600, 'nature', true, 'tour destination')
        ];
    }
}

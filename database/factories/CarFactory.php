<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = ['Toyota', 'BMW', 'Mercedes', 'Audi', 'Volkswagen', 'Peugeot', 'Renault', 'Ford', 'Nissan'];
        $types = ['Compact', 'Berline', 'SUV', 'Cabriolet', 'Monospace', 'Utilitaire'];

        return [
            'brand' => fake()->randomElement($brands),
            'model' => fake()->word() . ' ' . fake()->numberBetween(100, 500),
            'type' => fake()->randomElement($types),
            'price_per_day' => fake()->randomFloat(2, 25, 200),
            'available' => fake()->boolean(80) // 80% de chance d'être disponible
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Car;
use App\Models\Tour;
use App\Models\Cruise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $serviceTypes = ['flight', 'hotel', 'car', 'tour', 'cruise'];
        $serviceType = fake()->randomElement($serviceTypes);

        // Définir service_id selon le type
        $serviceId = match ($serviceType) {
            'flight' => Flight::factory()->create()->id,
            'hotel' => Hotel::factory()->create()->id,
            'car' => Car::factory()->create()->id,
            'tour' => Tour::factory()->create()->id,
            'cruise' => Cruise::factory()->create()->id,
        };

        $startDate = fake()->dateTimeBetween('+1 week', '+6 months');
        $endDate = (clone $startDate)->modify('+' . fake()->numberBetween(1, 14) . ' days');

        return [
            'user_id' => User::factory(),
            'service_type' => $serviceType,
            'service_id' => $serviceId,
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
            'total_price' => fake()->randomFloat(2, 100, 5000),
            'start_date' => $startDate,
            'end_date' => $endDate
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Hotel;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // S'assurer qu'on a des hôtels
        if (Hotel::count() === 0) {
            $this->call(HotelSeeder::class);
        }

        // Créer des chambres pour chaque hôtel
        Hotel::all()->each(function ($hotel) {
            Room::factory(rand(10, 50))
                ->create(['hotel_id' => $hotel->id]);
        });
    }
}

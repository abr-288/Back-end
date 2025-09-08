<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $this->call([
            AirlineSeeder::class,
            FlightSeeder::class,
            HotelSeeder::class,
            RoomSeeder::class,
            CarSeeder::class,
            TourSeeder::class,
            CruiseSeeder::class,
        ]);
    }
}

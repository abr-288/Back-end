<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    public function run()
    {
        $hotels = [
            [
                'name' => 'Hôtel de la Plage',
                'description' => 'Un hôtel de charme face à la mer avec vue imprenable sur l\'océan.',
                'address' => '123 Boulevard de la Mer',
                'city' => 'Dakar',
                'country' => 'Sénégal',
                'latitude' => 14.7167,
                'longitude' => -17.4677,
                'phone' => '+221 33 123 45 67',
                'email' => 'contact@hoteldelaplage.sn',
                'star_rating' => 4,
                'has_free_wifi' => true,
                'has_parking' => true,
                'has_pool' => true,
                'has_restaurant' => true,
                'amenities' => json_encode([
                    'piscine', 'spa', 'salle de sport', 'bar', 'climatisation', 'navette aéroport'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
                'images' => json_encode([
                    'hotels/plage1.jpg',
                    'hotels/plage2.jpg',
                    'hotels/plage3.jpg'
                ]),
                'check_in_time' => '14:00:00',
                'check_out_time' => '12:00:00',
            ],
            [
                'name' => 'Sofitel Abidjan Hôtel Ivoire',
                'description' => 'Un établissement 5 étoiles offrant un hébergement luxueux avec piscine sur le toit et vue sur la ville.',
                'address' => 'Avenue Hassan II',
                'city' => 'Abidjan',
                'country' => 'Côte d\'Ivoire',
                'latitude' => 5.3204,
                'longitude' => -4.0161,
                'phone' => '+225 20 21 34 56',
                'email' => 'reservation@sofitelabidjan.com',
                'star_rating' => 5,
                'has_free_wifi' => true,
                'has_parking' => true,
                'has_pool' => true,
                'has_restaurant' => true,
                'amenities' => json_encode([
                    'piscine sur le toit', 'spa', 'salle de sport', 'restaurant gastronomique', 'bar panoramique', 'salle de conférence'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
                'images' => json_encode([
                    'hotels/sofitel1.jpg',
                    'hotels/sofitel2.jpg',
                    'hotels/sofitel3.jpg'
                ]),
                'check_in_time' => '15:00:00',
                'check_out_time' => '12:00:00',
            ]
        ];

        // Utilisation de DB::table pour éviter les problèmes de cast
        DB::table('hotels')->insert($hotels);
    }
}

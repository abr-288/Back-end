<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        $roomTypes = [
            [
                'name' => 'Chambre Standard',
                'description' => 'Chambre confortable avec lit double ou deux lits simples, salle de bain privée et vue sur la ville.',
                'base_price' => 50000,
                'capacity' => 2,
                'size' => 25,
                'bed_type' => '1 grand lit ou 2 lits simples',
                'amenities' => json_encode([
                    'Climatisation', 'Télévision à écran plat', 'Wi-Fi gratuit', 'Coffre-fort',
                    'Minibar', 'Bouilloire électrique', 'Sèche-cheveux', 'Articles de toilette gratuits'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chambre Supérieure',
                'description' => 'Chambre spacieuse avec lit king size, coin salon et salle de bain avec baignoire.',
                'base_price' => 75000,
                'capacity' => 2,
                'size' => 35,
                'bed_type' => '1 lit king size',
                'amenities' => json_encode([
                    'Climatisation', 'Télévision à écran plat', 'Wi-Fi gratuit', 'Coffre-fort',
                    'Minibar', 'Bouilloire électrique', 'Sèche-cheveux', 'Articles de toilette haut de gamme',
                    'Peignoirs et pantoufles', 'Vue partielle sur la mer'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suite Junior',
                'description' => 'Suite élégante avec espace salon séparé, coin repas et salle de bain luxueuse.',
                'base_price' => 120000,
                'capacity' => 3,
                'size' => 50,
                'bed_type' => '1 lit king size + canapé-lit',
                'amenities' => json_encode([
                    'Climatisation', 'Télévision à écran plat', 'Wi-Fi gratuit', 'Coffre-fort',
                    'Minibar premium', 'Machine à café Nespresso', 'Sèche-cheveux professionnel',
                    'Articles de toilette de luxe', 'Peignoirs et pantoufles', 'Vue mer',
                    'Service en chambre 24h/24', 'Accès au salon VIP'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suite Présidentielle',
                'description' => 'Suite luxueuse avec chambre séparée, salon spacieux, salle à manger et salle de bain avec jacuzzi.',
                'base_price' => 250000,
                'capacity' => 4,
                'size' => 120,
                'bed_type' => '1 lit king size + canapé-lit convertible',
                'amenities' => json_encode([
                    'Climatisation', 'Télévision à écran plat dans chaque pièce', 'Wi-Fi haut débit gratuit',
                    'Coffre-fort électronique', 'Minibar personnalisable', 'Machine à café Nespresso',
                    'Salle de bain avec jacuzzi et douche à effet pluie', 'Articles de toilette de marque premium',
                    'Peignoirs et pantoufles en soie', 'Vue panoramique sur la mer', 'Service de majordome 24h/24',
                    'Accès illimité au spa', 'Voiturier et service de voiturier', 'Service de chambre prioritaire'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Utilisation de DB::table pour éviter les problèmes de cast
        DB::table('room_types')->insert($roomTypes);
    }
}

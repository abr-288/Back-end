<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer un utilisateur admin de test
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@dreamstour.com',
            'role' => 'admin'
        ]);

        // Créer des utilisateurs clients
        User::factory(20)->create();

        // Lancer le seeder du catalogue
        $this->call([
            CatalogueSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class ProductionSeeder extends Seeder
{
    public function run()
    {
        // Création des rôles
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // Création de l'utilisateur admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrateur',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Attribution du rôle admin
        $admin->assignRole($adminRole);

        // Autres seeders nécessaires
        $this->call([
            // Ajoutez d'autres seeders ici
        ]);
    }
}

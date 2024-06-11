<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario de prueba con CIF
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com', // Cambiar el email para evitar duplicados
            'password' => bcrypt('password'),
        ]);

        // Crear múltiples usuarios de prueba con CIF y correos electrónicos únicos
        \App\Models\Students::factory()->create([
            'cif' => '12345678A',
            'name' => 'Test User 1',
            'last_name' => 'Test User 1',
            'email' => 'test1@email.com',
            'phone' => '123456789',
        ]);

        \App\Models\Students::factory()->create([
            'cif' => '12345678B',
            'name' => 'Test User 2',
            'last_name' => 'Test User 2',
            'email' => 'test2@email.com',
            'phone' => '123456789',
        ]);

        \App\Models\Students::factory()->create([
            'cif' => '12345678C',
            'name' => 'Test User 3',
            'last_name' => 'Test User 3',
            'email' => 'test3@email.com',
            'phone' => '123456789',
        ]);

        \App\Models\Students::factory()->create([
            'cif' => '12345678D',
            'name' => 'Test User 4',
            'last_name' => 'Test User 4',
            'email' => 'test4@email.com',
            'phone' => '123456789',
        ]);

        \App\Models\Students::factory()->create([
            'cif' => '12345678E',
            'name' => 'Test User 5',
            'last_name' => 'Test User 5',
            'email' => 'test5@email.com',
            'phone' => '123456789',
        ]);
    }
}

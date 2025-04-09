<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'ADMIN',
            'nickname' => 'ADMIN',
            'phone' => '0813253634',
            'password' => '$2y$10$fEMHgfWUd25jCRcUnp0NkOHS8zl7OBqnFcoMRIXYf86m.gqPSPeEe',
            'role_id' => 2,
        ]);
    }
}

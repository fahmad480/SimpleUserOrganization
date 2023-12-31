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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Owner',
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Staff',
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Member',
        ]);

        \App\Models\Organization::factory()->create([
            'name' => 'Test Organization',
            'code' => 'TST' . rand(100, 999),
            'logo' => 'assets/images/portrait/small/avatar-s-11.jpg',
        ]);

        \App\Models\UserOrganization::factory()->create([
            'user_id' => 1,
            'organization_id' => 1,
            'role_id' => 1,
        ]);
    }
}

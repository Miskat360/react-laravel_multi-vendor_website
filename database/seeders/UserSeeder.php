<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ])->assignRole('User');

        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@example.com'
        ])->assignRole('Vendor');

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ])->assignRole('Admin');
    }
}

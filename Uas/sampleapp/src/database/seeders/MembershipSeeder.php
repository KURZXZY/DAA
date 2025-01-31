<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data for Membership table
        Membership::insert([
            [
                'name' => 'Basic Membership',
                'price' => 100,
                'duration' => 30, // Duration in days
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Membership',
                'price' => 200,
                'duration' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Annual Membership',
                'price' => 1000,
                'duration' => 365,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

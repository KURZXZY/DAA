<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GymClass;
use App\Models\User;

class GymClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Gym Class
        $gymClass = GymClass::create([
            'name' => 'Yoga',
            'description' => 'A relaxing yoga class',
            'schedule' => now()->addDays(1), // Example schedule
        ]);

        // Recruit users for the Gym Class (auto assign users)
        $users = User::inRandomOrder()->limit(5)->get(); // Randomly pick 5 users

        foreach ($users as $user) {
            // Assuming you have a many-to-many relationship defined like so:
            // $user->gymClasses()->attach($gymClass->id);
            $user->gymClasses()->syncWithoutDetaching([$gymClass->id]);
        }
    }
}

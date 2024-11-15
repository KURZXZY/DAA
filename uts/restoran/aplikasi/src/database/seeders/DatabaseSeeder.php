<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call individual seeders

        // Seed users
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'customer',
                    'email' => 'customer@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'chef',
                    'email' => 'chef@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

            private function callSeeders(): void {
                $this->call([
                    CategorySeeder::class,
                    MenuSeeder::class,
                    OrderSeeder::class,
                    ReviewSeeder::class,
                ]);

    }
 }
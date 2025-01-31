<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Membership;
use App\Models\GymClass;
use App\Models\Pilates;
use App\Models\Location;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed roles terlebih dahulu
        $this->seedRoles();

        // Seed users
        $this->seedUsers();

        // Jalankan seeder tambahan
        $this->call([
            MembershipSeeder::class,
            GymClassSeeder::class,
            PilatesSeeder::class,
            LocationSeeder::class,
        ]);
    }

    private function seedRoles(): void
    {
        // Pastikan role dibuat sebelum diberikan ke user
        Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createMany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'member',
                    'email' => 'member@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email === 'admin@admin.com') {
                    $user->assignRole('super_admin');
                }
            }
        }
    }
}

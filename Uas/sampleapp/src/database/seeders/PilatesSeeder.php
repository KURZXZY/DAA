<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pilates;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PilatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('PilatesClasses')->insert([
            [
                'name' => 'Pilates Core Strength',
                'description' => 'Kelas Pilates untuk memperkuat otot inti dan meningkatkan fleksibilitas.',
                'schedule' => 'Senin, Rabu - 08:00 AM',
            ],
            [
                'name' => 'Pilates Balance',
                'description' => 'Latihan Pilates yang fokus pada keseimbangan dan stabilitas tubuh.',
                'schedule' => 'Selasa, Kamis - 05:30 PM',
            ],
            [
                'name' => 'Pilates Relaxation',
                'description' => 'Sesi Pilates dengan gerakan lembut untuk relaksasi dan pernapasan.',
                'schedule' => 'Jumat - 06:00 PM',
            ],
        ]);
    }
}

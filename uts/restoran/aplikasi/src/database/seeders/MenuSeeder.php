<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng dengan tambahan telur, ayam, dan sayuran segar.',
                'price' => 25000,
                'category' => 'Main Course',
            ],
            [
                'name' => 'Ayam Bakar Madu',
                'description' => 'Ayam bakar dengan bumbu madu yang lezat dan harum.',
                'price' => 30000,
                'category' => 'Main Course',
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Teh manis dingin yang menyegarkan.',
                'price' => 5000,
                'category' => 'Beverage',
            ],
            [
                'name' => 'Pisang Goreng Cokelat Keju',
                'description' => 'Pisang goreng dengan tambahan cokelat dan keju.',
                'price' => 15000,
                'category' => 'Snack',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Celana',
            ],
            [
                'name' => 'Baju',
            ],
            [
                'name' => 'Sepatu',
            ],
        ];

        foreach ($categories as $category) {
            CategoryProduct::firstOrCreate(
                ['name' => $category['name']] // Kunci pencarian
            );
        }
    }
}

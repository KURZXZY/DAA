<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Main Course',
                'category' => 'Hidangan utama restoran'
            ],
            [
                'name' => 'Appetizer',
                'category' => 'Hidangan pembuka'
            ],
            [
                'name' => 'Dessert',
                'category' => 'Hidangan penutup'
            ],
            [
                'name' => 'Beverages',
                'category' => 'Minuman'
            ],
            [
                'name' => 'Soup',
                'category' => 'Aneka sup'
            ]
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']], // Kunci pencarian
                ['category' => $category['category']] // Data tambahan
            );
        }
    }
}

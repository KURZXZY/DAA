<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Laptop', 'price' => 1500.00, 'category_name' => 'Electronics'],
            ['name' => 'T-shirt', 'price' => 20.00, 'category_name' => 'Clothing'],
            ['name' => 'Cookbook', 'price' => 15.50, 'category_name' => 'Books'],
            ['name' => 'Vacuum Cleaner', 'price' => 120.00, 'category_name' => 'Home Appliances'],
            ['name' => 'Toy Car', 'price' => 10.00, 'category_name' => 'Toys'],
        ];

        foreach ($products as $product) {
            $category = Category::where('name', $product['category_name'])->first();

            Product::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $category->id,
            ]);
        }
    }
}


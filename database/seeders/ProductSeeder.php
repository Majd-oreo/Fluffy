<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $clothesId = ProductCategory::where('name', 'Clothes')->first()->id;
        $toysId = ProductCategory::where('name', 'Toys')->first()->id;
        $foodId = ProductCategory::where('name', 'Food')->first()->id;

        Product::insert([
            [
                'product_category_id' => $clothesId,
                'name' => 'Winter Dog Sweater',
                'description' => 'Cozy and warm sweater for small to medium dogs.',
                'price' => 15.99,
                'stock' => 50,
                'image' => 'products/sweater.jpg',
            ],
            [
                'product_category_id' => $toysId,
                'name' => 'Chew Toy Bone',
                'description' => 'Durable bone-shaped chew toy for aggressive chewers.',
                'price' => 9.50,
                'stock' => 70,
                'image' => 'products/chewtoy.jpg',
            ],
            [
                'product_category_id' => $foodId,
                'name' => 'Premium Cat Food 1kg',
                'description' => 'Grain-free, high-protein food for adult cats.',
                'price' => 22.00,
                'stock' => 40,
                'image' => 'products/catfood.jpg',
            ],
        ]);
    }
}

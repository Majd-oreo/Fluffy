<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        ProductCategory::insert([
            ['name' => 'Clothes', 'description' => 'Pet clothes for all sizes'],
            ['name' => 'Toys', 'description' => 'Fun and interactive toys for pets'],
            ['name' => 'Food', 'description' => 'Nutritious pet food options'],
        ]);
    }
}

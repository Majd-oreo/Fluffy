<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Grooming Service Categories
        Category::create([
            'name' => 'Basic Grooming',
            'description' => 'Basic grooming services like brushing and nail trimming',
            'price' => 20.00, 
            'service_id' => Service::where('name', 'Grooming')->first()->id

        ]);

        Category::create([
            'name' => 'Advanced Grooming',
            'price' => 30.00, 
            'description' => 'Full-service grooming including haircuts and spa treatments',
            'service_id' => Service::where('name', 'Grooming')->first()->id
        ]);

        // Walking Service Categories
        Category::create([
            'name' => 'Short Walks',
            'price' => 20.00, 

            'description' => 'Short 30-minute walks for pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Long Walks',
            'description' => 'Longer walks for active pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Group Walks',
            'description' => 'Social walking with other pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        // Rescue Service Categories
        Category::create([
            'price' => 00.00, 

            'name' => 'Emergency Rescue',
            'description' => 'Immediate rescue for lost or injured pets',
            'service_id' => Service::where('name', 'Rescue')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Animal Sheltering',
            'description' => 'Temporary shelter for rescued animals',
            'service_id' => Service::where('name', 'Rescue')->first()->id
        ]);

        // Training Service Categories
        Category::create([
            'price' => 20.00, 

            'name' => 'Basic Training',
            'description' => 'Obedience training for beginners',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Advanced Training',
            'description' => 'Advanced commands and behavioral training',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Agility Training',
            'description' => 'Obstacle course training for agility and fitness',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        // Daycare Service Categories
        Category::create([
            'price' => 20.00, 

            'name' => 'Half-Day Daycare',
            'description' => 'Daycare services for half a day',
            'service_id' => Service::where('name', 'Daycare')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Full-Day Daycare',
            'description' => 'Daycare services for a full day',
            'service_id' => Service::where('name', 'Daycare')->first()->id
        ]);

        // Veterinary Service Categories
        Category::create([
            'price' => 20.00, 

            'name' => 'General Checkup',
            'description' => 'Routine health checkups',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Vaccinations',
            'description' => 'Regular pet vaccinations',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);

        Category::create([
            'price' => 20.00, 

            'name' => 'Surgery',
            'description' => 'Medical surgeries for pets',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);
    }
}

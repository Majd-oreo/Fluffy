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
            'service_id' => Service::where('name', 'Grooming')->first()->id
        ]);

        Category::create([
            'name' => 'Advanced Grooming',
            'description' => 'Full-service grooming including haircuts and spa treatments',
            'service_id' => Service::where('name', 'Grooming')->first()->id
        ]);

        // Walking Service Categories
        Category::create([
            'name' => 'Short Walks',
            'description' => 'Short 30-minute walks for pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        Category::create([
            'name' => 'Long Walks',
            'description' => 'Longer walks for active pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        Category::create([
            'name' => 'Group Walks',
            'description' => 'Social walking with other pets',
            'service_id' => Service::where('name', 'Walking')->first()->id
        ]);

        // Rescue Service Categories
        Category::create([
            'name' => 'Emergency Rescue',
            'description' => 'Immediate rescue for lost or injured pets',
            'service_id' => Service::where('name', 'Rescue')->first()->id
        ]);

        Category::create([
            'name' => 'Animal Sheltering',
            'description' => 'Temporary shelter for rescued animals',
            'service_id' => Service::where('name', 'Rescue')->first()->id
        ]);

        // Training Service Categories
        Category::create([
            'name' => 'Basic Training',
            'description' => 'Obedience training for beginners',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        Category::create([
            'name' => 'Advanced Training',
            'description' => 'Advanced commands and behavioral training',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        Category::create([
            'name' => 'Agility Training',
            'description' => 'Obstacle course training for agility and fitness',
            'service_id' => Service::where('name', 'Training')->first()->id
        ]);

        // Daycare Service Categories
        Category::create([
            'name' => 'Half-Day Daycare',
            'description' => 'Daycare services for half a day',
            'service_id' => Service::where('name', 'Daycare')->first()->id
        ]);

        Category::create([
            'name' => 'Full-Day Daycare',
            'description' => 'Daycare services for a full day',
            'service_id' => Service::where('name', 'Daycare')->first()->id
        ]);

        // Veterinary Service Categories
        Category::create([
            'name' => 'General Checkup',
            'description' => 'Routine health checkups',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);

        Category::create([
            'name' => 'Vaccinations',
            'description' => 'Regular pet vaccinations',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);

        Category::create([
            'name' => 'Surgery',
            'description' => 'Medical surgeries for pets',
            'service_id' => Service::where('name', 'Veterinary')->first()->id
        ]);
    }
}

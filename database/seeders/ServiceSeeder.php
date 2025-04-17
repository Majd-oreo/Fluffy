<?php

// database/seeders/ServiceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Grooming service
        Service::create([
            'name' => 'Grooming',
            'icon' => 'flaticon-pet-grooming',
            'description' => 'Basic grooming service for pets.',
            'long_description' => 'Our grooming service includes bathing, brushing, nail trimming, and ear cleaning to keep your pet looking their best.'
        ]);

        // Walking service
        Service::create([
            'name' => 'Walking',
            'icon' => 'flaticon-walking-with-dog',
            'description' => 'Dog walking service.',
            'long_description' => 'We offer daily walks for your dog to keep them fit and happy, ensuring they get the exercise they need.'
        ]);

        // Rescue service
        Service::create([
            'name' => 'Rescue',
            'icon' => 'flaticon-rescue-dog',
            'description' => 'Pet rescue services Free Service.',
            'long_description' => 'Our rescue service helps pets in emergencies or when they need to be relocated for safety, offering compassionate care.'
        ]);

        // Training service
        Service::create([
            'name' => 'Training',
            'icon' => 'flaticon-dog-training',
            'description' => 'Dog training sessions.',
            'long_description' => 'We provide professional dog training to help correct behavioral issues and teach basic commands, making your pet easier to manage.'
        ]);

        // Daycare service
        Service::create([
            'name' => 'Daycare',
            'icon' => 'flaticon-dog-house',
            'description' => 'Pet daycare service.',
            'long_description' => 'Leave your pet with us for the day, and they will be cared for in a safe and fun environment while you’re away.'
        ]);

        // Veterinary service
        Service::create([
            'name' => 'Veterinary',
            'icon' => 'flaticon-paw',
            'description' => 'Veterinary care services.',
            'long_description' => 'We provide professional veterinary services, including check-ups, vaccinations, and treatment for illnesses to keep your pet healthy.'
        ]);
    }
}

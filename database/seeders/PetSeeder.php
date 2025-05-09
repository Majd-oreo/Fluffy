<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;


class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = [
            ['user_id' => 3, 'name' => 'Oreo', 'type' => 'Cat', 'breed' => 'Persian', 'age' => 2, 'weight' => 4.5, 'medical_history' => null, 'image' => 'storage/oreo.jpeg'],
            ['user_id' => 3, 'name' => 'Smokey', 'type' => 'Cat', 'breed' => 'British Shorthair', 'age' => 3, 'weight' => 5.0, 'medical_history' => null, 'image' => 'storage/smokey.jpeg'],
            ['user_id' => 3, 'name' => 'Sylvester', 'type' => 'Cat', 'breed' => 'Domestic Shorthair', 'age' => 4, 'weight' => 4.8, 'medical_history' => null, 'image' => 'storage/sylvester.jpeg'],
            ['user_id' => 3, 'name' => 'Buddy', 'type' => 'Dog', 'breed' => 'Golden Retriever', 'age' => 5, 'weight' => 30.0, 'medical_history' => null, 'image' => 'storage/buddy.jpeg'],
            ['user_id' => 3, 'name' => 'Tweety', 'type' => 'Bird', 'breed' => 'Canary', 'age' => 1, 'weight' => 0.1, 'medical_history' => null, 'image' => 'storage/tweety.jpeg'],
            ['user_id' => 3, 'name' => 'Thumper', 'type' => 'Rabbit', 'breed' => 'Holland Lop', 'age' => 2, 'weight' => 1.5, 'medical_history' => null, 'image' => 'storage/thumper.jpeg'],
            ['user_id' => 4, 'name' => 'Simsem', 'type' => 'Dog', 'breed' => 'Bichon Frisé', 'age' => 1, 'weight' => 1.5, 'medical_history' => null, 'image' => 'storage/thumper.jpeg'],
            ['user_id' => 5, 'name' => 'roro', 'type' => 'Rabbit', 'breed' => 'white', 'age' => 2, 'weight' => 1.5, 'medical_history' => null, 'image' => 'storage/thumper.jpeg'],


        ];

        foreach ($pets as $petData) {
            Pet::create($petData);
        }
    }
}

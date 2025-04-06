<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Employee;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Nada',
                'email' => 'nada@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631727',
                'address' => 'Admin Address',
                'image' => null,
                'role' => 'admin',
                'remember_token' => null,
            ],
            [
                'name' => 'Nasser',
                'email' => 'nasser@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631728',
                'address' => 'Admin Address',
                'image' => null,
                'role' => 'admin',
                'remember_token' => null,
            ],
          
            [
                'name' => 'Jeneen',
                'email' => 'jeneen@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0770047315',
                'address' => 'Alsalt',
                'image' => null,
                'role' => 'user',
                'remember_token' => null,
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
    }
}

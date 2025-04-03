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
                'name' => 'Mohammad',
                'email' => 'mohammad@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631729',
                'address' => 'Al-Salt',
                'image' => null,
                'role' => 'employee',
                'remember_token' => null,
            ],
            [
                'name' => 'Abeer',
                'email' => 'abeer@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631721',
                'address' => 'Al-Salt',
                'image' =>'storage/abeer.jpeg',
                'role' => 'employee',
                'remember_token' => null,
            ],
            [
                'name' => 'Marah',
                'email' => 'marah@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631722',
                'address' => 'Al-Salt',
                'image' => 'storage/marah.jpeg',
                'role' => 'employee',
                'remember_token' => null,
            ],
            [
                'name' => 'Abd',
                'email' => 'abd@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631723',
                'address' => 'Al-Salt',
                'image' => 'storage/abd.jpeg',
                'role' => 'employee',
                'remember_token' => null,
            ],
            [
                'name' => 'Leen',
                'email' => 'leen@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0777631724',
                'address' => 'Alsalt',
                'image' => 'storage/leeen.jpeg',
                'role' => 'employee',
                'remember_token' => null,
            ],
            [
                'name' => 'Majd',
                'email' => 'Majd@gmail.com',
                'password' => Hash::make('0777631727Majd@'),
                'phone' => '0770047312',
                'address' => 'Alsalt',
                'image' => 'storage/majd.jpeg',
                'role' => 'employee',
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
        $employees = User::where('role', 'employee')->get();

        foreach ($employees as $employeeUser) {
            Employee::create([
                'user_id' => $employeeUser->id,
                'job_title' => 'Software Engineer',
                'status' => 'active',
            ]);
        }
    }
}

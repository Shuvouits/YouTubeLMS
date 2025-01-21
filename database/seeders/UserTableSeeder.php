<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Encrypt the password
                'photo' => null,
                'phone' => '1234567890',
                'address' => '123 Admin Street',
                'role' => 'admin',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instructor User',
                'email' => 'instructor@example.com',
                'password' => Hash::make('password'), // Encrypt the password
                'photo' => null,
                'phone' => '0987654321',
                'address' => '456 Instructor Avenue',
                'role' => 'instructor',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'), // Encrypt the password
                'photo' => null,
                'phone' => '5555555555',
                'address' => '789 User Lane',
                'role' => 'user',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

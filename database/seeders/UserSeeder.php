<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'id' => 1, 
            'first_name' => 'auto',
            'last_name' => 'moto',
            'phone' => '00000000',
            'address' => 'nowhere',
            'country' => 'morocco',
            'city' => 'somewhere',
            'role' => 'admin',
            'email' => 'automoto@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'created_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }

   
}

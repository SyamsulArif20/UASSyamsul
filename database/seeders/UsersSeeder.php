<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    
    public function run()
    {
        \App\Models\User::factory()->count(50)->create();
        DB::table('users')->updateOrInsert(
            ['email' => 'msamsulmaarif@gmail.com'], // Kondisi unik
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        
        DB::table('users')->updateOrInsert(
            ['email' => 'user@example.com'], // Kondisi unik
            [
                'name' => 'User',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
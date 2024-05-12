<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'date_login' => now()->toDateString(), // Add current date
            'time_login' => now()->toTimeString(), // Add current time
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // You can add more user records here if needed
    }
}

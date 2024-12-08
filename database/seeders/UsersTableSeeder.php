<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Owner',
                'email' => 'Ownerpondokindahgolf@gmail.com',
                'password' => Hash::make('owner12345'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HRD',
                'email' => 'HRD@gmail.com',
                'password' => Hash::make('HRD@gmail.com'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Khoiriyah',
                'email' => 'khoiriyah9991@gmail.com',
                'password' => Hash::make('admin12345'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

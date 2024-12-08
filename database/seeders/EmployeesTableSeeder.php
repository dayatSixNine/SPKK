<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'full_name' => 'Joko Susilo',
                'date_of_birth' => '1985-06-15',
                'position' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Riyan Pramudya',
                'date_of_birth' => '1990-04-22',
                'position' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Rezaldi Setiawan',
                'date_of_birth' => '1988-12-01',
                'position' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Ade Ahmad Jalaludin',
                'date_of_birth' => '1992-08-09',
                'position' => 'Capten Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Septiawan Angkasa Putra',
                'date_of_birth' => '1983-11-19',
                'position' => 'Capten Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Rafi Eka Putra',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Raihan Afnansyah',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Rivqi Maulana Putra',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Nando Kharisma',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Ismael Latif',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Ryan Putra Baron',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Diki Maulana',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Lintang Nurcahyo',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Natan Abdul Ghani',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Yanuar Petra',
                'date_of_birth' => '1983-11-19',
                'position' => 'Crew',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

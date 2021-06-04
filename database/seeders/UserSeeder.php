<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'ci' => '12345',
                'name' => 'Carlos',
                'user' => 'jaldin',
                'email' => 'jaldin@gmail.com',
                'password' => Hash::make('123')
            ],
            [
                'ci' => '12345',
                'name' => 'Violetta',
                'user' => 'violetta',
                'email' => 'violetta@gmail.com',
                'password' => Hash::make('123')
            ],
            [
                'ci' => '12345',
                'name' => 'Valeria',
                'user' => 'vale',
                'email' => 'vale@gmail.com',
                'password' => Hash::make('123')
            ]
        ]);
    }
}

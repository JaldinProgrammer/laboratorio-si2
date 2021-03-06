<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->insert([
            [
                'name' => 'Hematologo'
            ],
            [
                'name' => 'Urologo'
            ],
            [
                'name' => 'Histologo'
            ],
            [
                'name' => 'Biologo'
            ],
            ]);
    }
}

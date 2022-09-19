<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                'nom' => "Afrique",

            ],
            [
                'nom' => "Amérique du Sud",

            ],
            [
                'nom' => "Amérique du Nord",

            ],
            [
                'nom' => "Europe",

            ],
            [
                'nom' => "Océanie",

            ],
            [
                'nom' => "Asie",

            ]

            ]);
    }
}

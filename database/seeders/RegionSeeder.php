<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('regions')->insert([

            [   
               'name' => 'ภาคย่างกุ้ง',
               'created_at' =>now(),
               'country_id' => '2',
            ],

            [
               'name' => 'ภาคเหนือ',
               'created_at' =>now(),
               'country_id' => '1',
            ],

            [
               'name' => 'ซือริช',
               'created_at' =>now(),
               'country_id' => '5',
            ],

            [
               'name' => 'london',
               'created_at' =>now(),
               'country_id' => '3',
            ],

            [
               'name' => 'New York',
               'created_at' =>now(),
               'country_id' => '4',
           ],

        ]);
    }

}

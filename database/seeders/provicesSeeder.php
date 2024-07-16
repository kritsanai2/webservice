<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('provinces')->insert([

        [   
            'name' => 'ย่างกุ้ง',
            'created_at' =>now(),
            'region_id' => '1',
         ],

         [   
            'name' => 'เชียงใหม๋',
            'created_at' =>now(),
            'region_id' => '2',
         ],

         [   
            'name' => 'เชียงราย',
            'created_at' =>now(),
            'region_id' => '2',
         ],

         [   
            'name' => 'แม่ฮ่องสอน',
            'created_at' =>now(),
            'region_id' => '2',
         ],

         [   
            'name' => 'เดอะบรองซ์',
            'created_at' =>now(),
            'region_id' => '5',
         ],

         [   
            'name' => 'เสแตตัน ไอส์แลนด์',
            'created_at' =>now(),
            'region_id' => '5',
         ],

         [   
            'name' => 'Bedfordshire',
            'created_at' =>now(),
            'region_id' => '4',
         ],

         [   
            'name' => 'Berkshire',
            'created_at' =>now(),
            'region_id' => '4',
         ],

         [   
            'name' => 'กรุงเทพ',
            'created_at' =>now(),
            'region_id' => '3',
         ],

         [   
            'name' => 'ชลบุรี',
            'created_at' =>now(),
            'region_id' => '3',
         ],

        ]);
    }
}

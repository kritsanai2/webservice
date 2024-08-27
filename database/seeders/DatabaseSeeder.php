<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            RegionSeeder::class,
            provicesSeeder::class,
            TitleSeeder::class,

        ]);

    \App\Models\Student::factory(100)->create();
    \App\Models\Teacher::factory(100)->create();

    }
}

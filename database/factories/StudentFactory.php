<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'lastname'=> $this->faker->lastname,
            'email'=> $this->faker->email,
            'province_id'=>Province::InRandomOrder()->first()->id,
            'created_at'=> now(),
        ];
    }
}

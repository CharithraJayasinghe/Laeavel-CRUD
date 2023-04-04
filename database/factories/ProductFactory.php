<?php

namespace Database\Factories;
//@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->name(),
            'details' => fake()->unique()->text

        ];
    }
}

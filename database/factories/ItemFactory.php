<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>1,
            'name' => $this->faker->name(),
            'price' => rand(100,50000),
            'stocks' => rand(1,50),
            'detail' => $this->faker->realText(10),
             //
        ];
    }
}

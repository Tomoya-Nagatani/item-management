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
            'zipcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'content2021' => $this->faker->randomElement($arrary = ["✅", "喪中", "❌"]),
            'content2022' =>$this->faker->randomElement($arrary =  ["✅", "喪中", "❌"]),
            'content' => $this->faker->randomElement($arrary =  ["✅", "喪中", "❌"]),
            'category' => $this->faker->randomElement($arrary = ["仕事", "プライベート", "その他"]),
            // 'memo' => $this->faker->realText(10),
            
        ];
    }
}

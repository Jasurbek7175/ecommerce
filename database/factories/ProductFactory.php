<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,5),
            'name' => [
                'uz' => $this->faker->sentence(3),
                'ru' => "Комплектқ спальной мебели"
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'uz' => $this->faker->sentence(2),
                'ru' => "Содержание программы направлено"
                ]
        ];
    }
}




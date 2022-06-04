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
            'name' => $this->faker->randomElement(['Tulip', 'Rose Flower', 'Orchid']),
            'slug' => $this->faker->slug(),
            'category_id' => $this->faker->numberBetween(1, 4),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(function ($p) {
                    return "<p>$p</p>";
                })->implode(''),
            'harga' => $this->faker->randomNumber(5, 8, true),
        ];
    }
}

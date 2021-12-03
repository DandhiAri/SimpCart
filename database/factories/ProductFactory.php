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
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Species($faker));
        return [
            'name' => $faker->plant,
            'detail' => $this->faker->sentence(mt_rand(10, 15)),
            'harga' => $this->faker->randomNumber(5, 8, true),
            'deskrip' => $this->faker->sentence(mt_rand(15, 20)),
        ];
    }
}

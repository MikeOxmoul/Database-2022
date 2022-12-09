<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(1, true),
            'price' => fake()->randomDigitNotNull(),
            'description' => fake()->words(3, true),
            'status' => fake()->boolean(),
            'brand' => fake()->words(1, true),
        ];
    }
}

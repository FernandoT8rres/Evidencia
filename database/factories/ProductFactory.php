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
    public function definition(): array
    {
        return [
            'Name' => $this->faker->words(3, true),
            'Description' => $this->faker->paragraph,
            'Price' => $this->faker->randomFloat(2, 1, 1000),
            'Stock' => $this->faker->numberBetween(0, 100),
            'Image' => $this->faker->optional()->imageUrl(640, 480, 'products', true),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

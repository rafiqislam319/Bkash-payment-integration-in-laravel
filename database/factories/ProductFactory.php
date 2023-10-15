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

        $products = [
            'Mobile', 'laptop', 'pc', 'tab', 'i-phone', 'watch', 'mouse', 'keyboard', 'monitor', 'cpu'
        ];
        return [
            
                'name' => fake()->randomElement($products),
                'price' => fake()->randomDigitNotNull(),
                'quantity' => fake()->randomNumber(),
            
        ];
    }
}

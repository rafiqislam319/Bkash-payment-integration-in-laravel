<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customers = ['Jon', 'Ron', 'June', 'Joe', 'Jane', 'Doe', 'jony', 'rony', 'tony', 'tom'];
        static $invoice = 20;
        return [
            'customer_name' => fake()->randomElement($customers),
            'customer_phone' => fake()->phoneNumber(),
            'shipping_address' => fake()->address(),
            'total_product' => fake()->numberBetween($min = 1, $max = 20),
            'amount' => fake()->numberBetween($min = 1, $max = 10000),
            'order_status' => 'pending',
        ];
    }
}

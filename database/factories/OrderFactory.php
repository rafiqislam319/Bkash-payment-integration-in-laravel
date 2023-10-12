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
        $products = ['Mobile', 'pc', 'Watch', 'I-pad', 'Tab', 'Laptop'];
        static $invoice = 20;
        return [
            'product_name' => $products[rand(0, 3)],
            'currency' => 'BDT',
            'amount' => rand(1500, 2000),
            'invoice' => $invoice++,
            'status' => 'pending',
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeThisDecade(),
            'shipping_address' => fake()->address(),
            'billing_address' => fake()->address(),
            'payment_method' => fake()->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'unit_price' => fake()->randomFloat(2, 1, 100),
            'discounts' => fake()->randomFloat(2, 0, 50),
            'shipping_costs' => fake()->randomFloat(2, 0, 20),
            'total_paid' => fake()->randomFloat(2, 1, 200),
            'order_status' => fake()->randomElement(['pendiente de pago', 'pagado', 'en preparación', 'enviado', 'entregado', 'devuelto']),
        ];
    }
}

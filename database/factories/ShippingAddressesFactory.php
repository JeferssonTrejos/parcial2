<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShippingAddresses>
 */
class ShippingAddressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            Customers::factory()->create()->id,
            'addressee' => fake()->address(),
            'floor' => fake()->randomElement(['1', '2', '3']),
            'postal_code' => fake()->postcode(),
            'city' => fake()->city(),
            'region' => fake()->name(),
            'country' => fake()->country(),
            'phone_number' => fake()->phoneNumber(),
            'special_instructions' => fake()->randomElement(['Leave at the door', 'Call before delivery', 'Leave with a neighbor']),
            'payment_methods' => fake()->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
        ];
    }
}

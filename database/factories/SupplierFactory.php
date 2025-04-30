<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suppliers>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tax_identifier' => fake()->uuid(),
            'commercial_name' => fake()->name(),
            'contact_person' => fake()->name(),
            'address' => fake()->address(),
            'email_address' => fake()->unique()->safeEmail(),
            'payment_terms' => fake()->randomElement(['30 days', '60 days', '90 days']),
            'average_replenishment_time' => fake()->numberBetween(1, 30),
            'reliability_assessment' => fake()->randomElement(['A', 'B', 'C']),
        ];
    }
}

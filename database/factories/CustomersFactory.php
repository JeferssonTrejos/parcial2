<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'email_address' => fake()->unique()->safeEmail(),
            'password' => fake()->password(6, 40),
            'phone_number' => fake()->phoneNumber(),
            'birthdate' => fake()->dateTimeThisDecade(),
            'communication_preferences' => fake()->randomElement(['Email', 'SMS', 'Push Notifications']),
        ];
    }
}

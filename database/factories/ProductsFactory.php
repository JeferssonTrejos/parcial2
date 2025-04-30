<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            ProductCategoriesFactory::factory()->create()->id,
            SupplierFactory::factory()->create()->id,
            'name' => fake()->name(),
            'sku' => fake()->uuid(),
            'description' => fake()->text(),
            'technical_specifications' => fake()->text(),
            'brand' => fake()->randomElement(['marca A', 'marca B', 'marca C']),
            'base_price' => fake()->randomNumber(3),
            'applicable_taxes' => fake()->text(),
            'active_descounts' => fake()->randomElement(['descuento A', 'descuento B', 'descuento C']),
            'stock_availiable' => fake()->numberBetween(1, 2000),
            'estimated_shipping_time' => fake()->date(),
        ];
    }
}

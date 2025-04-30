<?php

namespace Database\Factories;

use App\Models\ProductReviews;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReviewImages>
 */
class ProductReviewImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_url' => fake()->text(),
            ProductReviews::factory()->create()->id,
        ];
    }
}

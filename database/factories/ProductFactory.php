<?php

namespace Database\Factories;

use App\Enums\ProductCategory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            "name"=>fake()->name(),
            "price"=>fake()->randomFloat(2, 1, 100),
            "category"=>fake()->randomElement(ProductCategory::cases())->value,
            "description"=>fake()->sentence(),
        ];
    }
}

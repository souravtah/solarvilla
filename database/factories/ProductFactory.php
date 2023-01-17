<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name'                  => 'Product_Name_1' . fake()->numberBetween($min = 10, $max = 9000),
            'product_category_id'   => fake()->numberBetween($min = 1, $max = 3),
            'slug'                  => 'product-Name-1' . fake()->numberBetween($min = 10, $max = 9000),
            'price'                 => fake()->numberBetween($min = 1000, $max = 9000),
            'short_description'     => fake()->sentence,
            'long_description'      => fake()->paragraph($nbSentences = 3, $variableNbSentences = true),
            'image'                 => fake()->imageUrl(200,200,'animals', true),
        ];
    }
}

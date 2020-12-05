<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            [
            "name"=> $this->faker->name,
            "cost_price"=> $this->faker->numberBetween(1000,9999),
            "sale_price"=> $this->faker->numberBetween(1000,9999),
            "sku"=> $this->faker->title,
            "description"=> $this->faker->text,
            "shop_id"=> $this->faker->numberBetween(1,60),
            "category_id"=> $this->faker->numberBetween(1,60),
            "brand_id"=> $this->faker->numberBetween(1,60),
            "provider_id"=> $this->faker->numberBetween(1,60)
        ];
    }
}

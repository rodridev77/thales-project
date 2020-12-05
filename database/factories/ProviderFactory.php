<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "documento" => $this->faker->unique()->cnpj,
            "email" => $this->faker->email,
            "phone" => $this->faker->phone,
            "phone1" => $this->faker->phone,
            "zipcode" => $this->faker->countryCode,
            "street" => $this->faker->streetAddress,
            "district" => $this->faker->name,
            "uf" => $this->faker->state,
            "city" => $this->faker->name,
            "complement" => $this->faker->name,
            "number" => $this->faker->numberBetween(0,9999),
        ];
    }
}

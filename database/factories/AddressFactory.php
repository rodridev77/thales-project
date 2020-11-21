<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return  [
                "uf" => $this->faker->state,
                "city" => $this->faker->city,
                "district" => $this->faker->cityPrefix,
                "street"=> $this->faker->streetName,
                "zipcode"=> $this->faker->postcode,
                "number"=> $this->faker->buildingNumber,
            ];
    }
}

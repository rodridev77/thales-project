<?php

namespace Database\Factories;

use App\Models\BankData;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "account_number"=> $this->faker->bankAccountNumber,
            "bank"=> $this->faker->bank,
            "agency"=> "026",
        ];
    }
}

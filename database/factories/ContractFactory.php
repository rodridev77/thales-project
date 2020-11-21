<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return ["cargo" => "gerente",
        "salary" => 1500,
        "admission_date" => "2020-11-16",
        "dismission_date" => "2020-11-16",
        ];
    }
}

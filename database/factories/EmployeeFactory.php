<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "cpf" => $this->faker->unique()->cpf,
            "rg" => $this->faker->unique()->rg(false),
            "phone" => $this->faker->phoneNumber(),
            "mother_name" => $this->faker->firstNameFemale,
            "father_name" => $this->faker->firstNameMale,
            "birthday" => "1998-11-28",
            "gender" => $this->faker->randomElement($array =array('Masculino', 'Feminino')),
            "level_of_schooling" => $this->faker->randomElement($array =array('Medio', 'Fundamental',"Superior")),
            "email" => $this->faker->unique()->safeEmail,
            "shop_id" => $this->faker->numberBetween(1,60)
        ];;
    }
}

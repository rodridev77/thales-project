<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\BankData;
use App\Models\Contract;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->count(60)->create()->each(function($employee){
            $employee->contract()->save(Contract::factory()->make());
            $employee->bankData()->save(BankData::factory()->make());
            $employee->Address()->save(Address::factory()->make());
        });
    }
}

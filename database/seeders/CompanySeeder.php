<?php

namespace Database\Seeders;

use App\Models\Company;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            ["name"=> "loja 01"],
            ["name"=> "loja 02"],
            ["name"=> "loja 03"]
        ]);
    }
}

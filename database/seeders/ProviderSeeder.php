<?php

namespace Database\Seeders;

use App\Models\Provider;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            ["name"=> "Fornecedor 1"],
            ["name"=> "Fornecedor 2"],
            ["name"=> "Fornecedor 3"],
        ]);
    }
}

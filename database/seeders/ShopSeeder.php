<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ["fantasyname"=> "Loja 1.0","companyname"=> "Loja 1.0 LTDA","CNPJ"=> "00.0000.00001/00","IE" => "0000.0000.0000.0000"]
        ]);
    }
}

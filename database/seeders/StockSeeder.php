<?php

namespace Database\Seeders;

use App\Models\Stock;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            ["quantity"=> "10", "company_id"=>"1", "products_id"=>"1"],
            ["quantity"=> "20", "company_id"=>"1", "products_id"=>"2"],
            ["quantity"=> "40", "company_id"=>"1", "products_id"=>"3"],

            ["quantity"=> "40", "company_id"=>"2", "products_id"=>"4"],
            ["quantity"=> "50", "company_id"=>"2", "products_id"=>"5"],
            ["quantity"=> "60", "company_id"=>"2", "products_id"=>"6"],

            ["quantity"=> "70", "company_id"=>"3", "products_id"=>"7"],
            ["quantity"=> "80", "company_id"=>"3", "products_id"=>"8"],
            ["quantity"=> "90", "company_id"=>"3", "products_id"=>"9"]
        ]);
    }
}

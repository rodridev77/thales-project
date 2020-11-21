<?php

namespace Database\Seeders;

use App\Models\Product;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ["name"=>"TV LG Led 32","cost_price"=>"300.24","sale_price"=>"500.87","sku"=>"LGL32","description"=>"TV LG Led 32","company_id"=>"1","category_id"=>"1","brand_id"=>"1","provider_id"=>"1"],
            ["name"=>"TV LG Led 28","cost_price"=>"200.24","sale_price"=>"400.87","sku"=>"LGL28","description"=>"TV LG Led 28","company_id"=>"1","category_id"=>"1","brand_id"=>"1","provider_id"=>"2"],
            ["name"=>"TV LG Led 24","cost_price"=>"100.24","sale_price"=>"300.87","sku"=>"LGL24","description"=>"TV LG Led 24","company_id"=>"1","category_id"=>"1","brand_id"=>"1","provider_id"=>"3"],

            ["name"=>"Radio Asus AM","cost_price"=>"50.24","sale_price"=>"90.87","sku"=>"RDASUSAM","description"=>"Radio Asus AM","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"1"],
            ["name"=>"Radio Asus FM","cost_price"=>"70.24","sale_price"=>"140.87","sku"=>"RDASUSFM","description"=>"Radio Asus FM","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"2"],
            ["name"=>"Radio Asus WM","cost_price"=>"150.24","sale_price"=>"250.87","sku"=>"RDASUSWM","description"=>"Radio Asus WM","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"3"],

            ["name"=>"Cel Blue XP","cost_price"=>"170.24","sale_price"=>"280.87","sku"=>"CELBXP","description"=>"Cel Blue XP","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"1"],
            ["name"=>"Cel Blue XL","cost_price"=>"180.24","sale_price"=>"310.87","sku"=>"CELBXL","description"=>"Cel Blue XL","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"2"],
            ["name"=>"Cel Blue XZ","cost_price"=>"210.24","sale_price"=>"510.87","sku"=>"CELBXZ","description"=>"Cel Blue XZ","company_id"=>"2","category_id"=>"2","brand_id"=>"2","provider_id"=>"3"]
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\ControllersExtends;
use App\Models\Product;

class ProductController extends ControllersExtends
{
    public function __construct(){
        parent::__construct(Product::class,"products");
        parent::setValidate([
            "name" => "required",
            "cost_price" => "required",
            "sale_price" => "required",
            "sku" => "required",
            "description" => "required"
        ]);
    }
}

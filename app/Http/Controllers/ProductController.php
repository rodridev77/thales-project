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

    public function store(Request $request){
        $request->merge([
            "cost_price" => str_replace(",", ".", $request->cost_price),
            "sale_price" => str_replace(",", ".", $request->sale_price)
        ]);

        return parent::store($request);
    }

    public function update(Request $request, $id){
        $request->cost_price = str_replace([".",","], ["","."], $request->cost_price);
        $request->sale_price = str_replace([".",","], ["","."], $request->sale_price);

        return parent::update($request, $id);
    }
}

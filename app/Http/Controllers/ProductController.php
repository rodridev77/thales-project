<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\ControllersExtends;
use App\Models\Product;

class ProductController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Product::class,"products");
    }
}

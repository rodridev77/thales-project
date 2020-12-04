<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Extensions\ControllersExtends;
use App\Models\Brand;

class BrandsController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Brand::class,"brands");
        parent::setValidate([
            "name" => "required|unique:brands"
        ]);
    }
}

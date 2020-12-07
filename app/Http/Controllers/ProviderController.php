<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\ControllersExtends;
use App\Models\Provider;

class ProviderController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Provider::class,"providers");
        parent::setValidate([
            "name" => "required",
            "documento" => "required|unique:providers",
            "email" => "required",
            "phone" => "required",
            "zipcode" => "required",
            "number" => "required",
        ]);
    }
}

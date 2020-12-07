<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Extensions\ControllersExtends;

class CustomerController extends ControllersExtends
{
    public function __construct(){
        parent::__construct(Customer::class,"customer");
        parent::setValidate([
            "name" => "required",
            "cpf" => "required|unique:customers",
            "rg" => "required|unique:customers",
            "email" => "required|unique:customers",
            "zipcode" => "required",
        ]);
    }
}

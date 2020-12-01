<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use App\Models\Sku;

class CustomerController extends Controller
{

    public function index()
    {
        //$id = 1;
        $customer = ""; //Sku::where('id', $id)->first();
        return view("customer.home", ["sku" => $customer]);
    }

    public function create()
    {
        return view("customer.create");
    }
}

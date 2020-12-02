<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use App\Models\Sku;

class CustomerController extends Controller
{

    public function index()
    {
        return view("customer.home");
    }

    public function create(Request $request)
    {
        return view("customer.create");
    }

    public function addCustumer(Request $request)
    {
        $customer = [
            "name" => $request->name,
            "birthday" => $request->birthday,
            "conjugate" => $request->conjugate,
            "phone_conjugate" => $request->phone_conjugate,
            "state_civil" => $request->state_civil,
            "company" => $request->company,
            "income" => $request->income,
            "conjugate" => $request->conjugate,
            "dependents" => $request->dependents,
            "cpf" => $request->cpf,
            "rg" => $request->rg,
            "phone" => $request->phone,
            "phone_residential" => $request->phone_residential,
            "phone_commercial" => $request->phone_commercial,
            "phone_complementary" => $request->phone_complementary,
            "mother_name" => $request->mother_name,
            "father_name" => $request->father_name,
            "level_of_schooling" => $request->level_of_schooling,
            "email" => $request->email,
            "state" => $request->state,
            "cit" => $request->cit,
            "neighborhood" => $request->neighborhood,
            "street" => $request->street,
            "zipcode" => $request->zipcode,
            "number" => $request->number,
            "additional_information" => $request->additional_information
        ];

        Customer::create($request->all());

        //var_dump($customer);

        return view("customer.home", $customer);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\BankData;
use App\Models\Contract;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Extensions\ControllersExtends;

class EmployeeController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Employee::class,"employees");
    }

    public function update(Request $request, $id){
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $imagePath = "/images\/".$name;
        }

        $employee = [
            "image" => $imagePath,
            "name"=> $request->name,
            "birthday"=>$request->birthday,
            "mother_name" => $request->mother_name,
            "father_name" => $request->father_name,
            "cpf" => $request->cpf,
            "rg" => $request->rg,
            "phone"=> $request->phone,
            "gender" => $request->gender,
            "email" => $request->email,
            "level_of_schooling" => $request->level_of_schooling
        ];
        $address = [
            "uf" => $request->uf,
            "city" => $request->city,
            "district" => $request->district,
            "street" => $request->street,
            "zipcode" => $request->zipcode,
            "number" => $request->number,
            "employee_id" => $id
        ];
        $bank = [
            "account_number" => $request->account_number,
            "bank"=>$request->bank,
            "agency" => $request->agency,
            "employee_id" => $id
        ];

        $contract = [
            "cargo" => $request->cargo,
            "salary" => $request->salary,
            "admission_date" => $request->admission_date,
            "dismission_date" => $request->dismission_date,
            "employee_id" => $id
        ];
        parent::withAndChange([
            Employee::class => $employee,
            Address::class => $address,
            BankData::class => $bank,
            Contract::class => $contract],
        ["permiss" => true, "key" => "employee_id"]);

        return parent::update($request, $id);
    }

    public function store(Request $request){
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $imagePath = "/images\/".$name;
        }

        $employee = [
            "image" => $imagePath,
            "name"=> $request->name,
            "birthday"=>$request->birthday,
            "mother_name" => $request->mother_name,
            "father_name" => $request->father_name,
            "cpf" => $request->cpf,
            "rg" => $request->rg,
            "phone"=> $request->phone,
            "gender" => $request->gender,
            "email" => $request->email,
            "level_of_schooling" => $request->level_of_schooling
        ];
        $address = [
            "uf" => $request->uf,
            "city" => $request->city,
            "district" => $request->district,
            "street" => $request->street,
            "zipcode" => $request->zipcode,
            "number" => $request->number,
        ];
        $bank = [
            "account_number" => $request->account_number,
            "bank"=>$request->bank,
            "agency" => $request->agency,
        ];

        $contract = [
            "cargo" => $request->cargo,
            "salary" => $request->salary,
            "admission_date" => $request->admission_date,
            "dismission_date" => $request->dismission_date,
        ];
        parent::withAndChange([
            Employee::class => $employee,
            Address::class => $address,
            BankData::class => $bank,
            Contract::class => $contract],
        ["permiss" => true, "key" => "employee_id"]);

        return parent::store($request);
    }
}

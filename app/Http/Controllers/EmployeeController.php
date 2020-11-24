<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\BankData;
use App\Models\Contract;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());

        try
        {
            DB::transaction(function() use ($request)
            {
                $imagePath = null;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/images');
                    $image->move($destinationPath, $name);
                    $imagePath = "{$destinationPath}/{$name}";
                    return back()->with('success','Image Upload successfully');
                }

                $employee = Employee::create([
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
                 ]);

                 $address = Address::create([
                     "uf" => $request->uf,
                     "city" => $request->city,
                     "district" => $request->district,
                     "street" => $request->street,
                     "zipcode" => $request->zipcode,
                     "number" => $request->number,
                     "employee_id" => $employee->id
                 ]);

                 $bank = BankData::create([
                     "account_number" => $request->account_number,
                     "bank"=>$request->bank,
                     "agency" => $request->agency,
                     "employee_id" => $employee->id
                 ]);

                 $contract = Contract::create([
                     "cargo" => $request->cargo,
                     "salary" => $request->salary,
                     "admission_date" => $request->admission_date,
                     "dismission_date" => $request->dismission_date,
                     "employee_id" => $employee->id
                 ]);

            });

            return response()->json(["funcionario criado"]);
        }
        catch(Exception $error)
        {
            return response()->json(["message" => "funcionario não criado"],500);
        }

    }

    public function create()
    {
        return view("employees.cadastro");
    }

    public function index()
    {
        return view("employees.index",["employees"=>Employee::with(["contract"])->get()]);
    }

    public function show(Request $request, $id)
    {
        $employee = Employee::with(["bankData", "address", "contract"])->where("id", $id)->first();
        return view("employees.details", ["employee" => $employee]);
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return response()->json(["Funcionario deletado"]);
    }

    public function edit(Request $request, $id)
    {
        $employee = Employee::with(["bankData", "address", "contract"])->where("id", $id)->first();
        return view("employees.edit", ["employee" => $employee]);
    }

    public function update(Request $request, $id)
    {
        try
        {
            DB::transaction(function() use ($id, $request)
            {
                $employee = Employee::where("id", $id)->update([
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
                 ]);

                 $address = Address::where("employee_id", $id)->update([
                     "uf" => $request->uf,
                     "city" => $request->city,
                     "district" => $request->district,
                     "street" => $request->street,
                     "zipcode" => $request->zipcode,
                     "number" => $request->number,
                     "employee_id" => $id
                 ]);

                 $bank = BankData::where("employee_id", $id)->update([
                     "account_number" => $request->account_number,
                     "bank"=>$request->bank,
                     "agency" => $request->agency,
                     "employee_id" => $id
                 ]);

                 $contract = Contract::where("employee_id", $id)->update([
                     "cargo" => $request->cargo,
                     "salary" => $request->salary,
                     "admission_date" => $request->admission_date,
                     "dismission_date" => $request->dismission_date,
                     "employee_id" => $id
                 ]);

            });

            return response()->json(["funcionario atualizado"]);
        }
        catch(Exception $error)
        {
            return response()->json(["funcionario não atualizado -". $error->getMessage()],500);
        }
    }
}

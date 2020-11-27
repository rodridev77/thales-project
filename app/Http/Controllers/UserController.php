<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\User;
use App\Models\Employee;
use DB;
use Illuminate\Support\Facades\Hash;
use Throwable;
class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view("user.home", ["data" => $data]);
    }

    public function create()
    {
        $employeesList = Employee::all();
        return view("user.create", ["employeesList" => $employeesList]);
    }

    public function store(CreateUser $request)
    {
        
        try {
            DB::transaction(function () use ($request) {
    
               $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                     'password' => Hash::make($request->password),
                     "employee_id" => $request->employee_id
                ]);

                $user->save();
            });
            
            return response()->json(['success' => 'Usuario inserido']);

           /*  return redirect()->back()->with("msg","usuario inserido"); */
        }catch (Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(CreateUser $request, $id){

        try {
            DB::transaction(function () use($request, $id) {
    
                User::where("id", $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            });

            return response()->json(['message' => 'Usuario Atualizado']);

        } catch(Throwable $error) {
            return response()->json(['message' => $error->getMessage()], 500);
        }
    }

}
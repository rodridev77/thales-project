<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use App\Models\User;
use App\Models\Employee;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Extensions\ControllersExtends;
use Throwable;
class UserController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(User::class,"users");
        parent::setValidate([
            "name" => "required|unique:users",
            "email" => "required|unique:users",
            "password" => "required"
        ]);
    }
    public function store(Request $request){
        $request->password = Hash::make($request->password);
        parent::store($request);
    }

    public function update(Request $request,$id){
        $request->password = Hash::make($request->password);
        parent::update($request,$id);
    }
/*
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
        $email = DB::table('users')->where('email', $request->email)->first();

        if (!empty($email)) :
            return response()->json(['message' => 'Usuário já exite no sistema'], 500);
            exit;
        endif;

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

           //  return redirect()->back()->with("msg","usuario inserido");
        } catch (Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $user = User::where("id", $id)->first();
        return view("user.edit", ["user" => $user]);
    }

    public function update(Request $request, $id)
    {

        try {
            User::where("id", $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json(['message' => 'Usuario Atualizado']);

        } catch(Throwable $error) {
            return response()->json(['message' => $error->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(["message" => "Usuário Removido"]);
    }
    */

}

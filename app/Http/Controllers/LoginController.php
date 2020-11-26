<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            "email" => ['required', 'string', 'email', 'max:255'],
            "password" => ['required', 'string', 'min:8']
        ]);

        if (Auth::attempt($validatedData)) {

            $role = $request->user();

           //var_dump($role);die;

            //session()->put("role", $role->name);

            // historico de login
           // $log = new LogsController();
            //$log->create($request);

            return redirect()->route("home");
        }

        return redirect()->back();
    }

    public function logout()
    {

        // historico de login
        //$log = new LogsController();
        //$log->update();

        Auth::logout();
        session()->flush();

        return redirect()->route("auth.form");
    } 

    public function loginForm()
    {
        return view("auth.form");
    }
/** 
    public function recuperacaoDeSenhaForm()
    {
        return view("auth.recovery");
    }*/

}

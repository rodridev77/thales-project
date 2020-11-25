<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categoryList = Category::all();
        return view("category.home", ["categoryList" => $categoryList]);
    }
    /**
    public function showAll()
    {
        $companies = Company::all();
        return view("company.list", ["companies" => $companies]);
    }

    public function store(Request $request) 
    {
        //dd($request->all());
        try
        {
            DB::transaction(function() use ($request)
            {
                $employee = Company::create([
                     "name"=> $request->name
                 ]);
            });

            return response()->json(["Nova loja criada"]);
        } 
        catch(Exception $error)
        {
            return response()->json(["Não foi possível criar a loja"], 500);
        }

    } */
    
    public function create()
    {
        return view("category.create");
    }
/**
    public function show(Request $request, $id)
    {
        $company = Company::where("id", $id)->first();
        return view("company.show", ["company" => $company]);
    }

    public function destroy($id)
    {
        Company::destroy($id);
        return response()->json(["Loja removida"]);
    }

    public function update()
    {
        
    }*/
}

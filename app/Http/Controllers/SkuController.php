<?php

namespace App\Http\Controllers;

use App\Extensions\ControllersExtends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use App\Models\Sku;

class SkuController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Sku::class,"sku");
        parent::setValidate([
            "cod" => "required|unique:skus",
            "description" => "required",
        ]);
    }
 /*
    public function index()
    {
        //$id = 1;
        $skuList = Sku::all(); //Sku::where('id', $id)->first();
        return view("sku.home", ["skuList" => $skuList]);
    }

    public function showAll()
    {
        $skus = Sku::all();
        return view("skus.list", ["skus" => $skus]);
    }

    public function store(Request $request)
    {
        $cod = DB::table('skus')->where('cod', $request->cod)->first();

        if (!empty($cod)) :
            return response()->json(['message' => 'código SKU já exite no sistema'], 500);
            exit;
        endif;

        try
        {
            DB::transaction(function() use ($request)
            {
                $sku = Sku::create([
                     "cod" => $request->cod,
                     "description" => $request->description
                 ]);
            });

            return response()->json(['message' => 'Codigo SKU criado']);
        }
        catch(Exception $error)
        {
            return response()->json(['message' => 'Não foi possível criar o código SKU'], 500);
        }

    }

    public function create()
    {
        return view("sku.create");
    }

    public function show(Request $request, $id)
    {
        $sku = Sku::where("id", $id)->first();
        return view("sku.show", ["sku" => $sku]);
    }

    public function destroy($id)
    {
        Sku::destroy($id);
        return response()->json(["Sku removido"]);
    }

    public function edit($id)
    {
        $sku = Sku::where("id", $id)->first();
        return view("sku.edit", ["sku" => $sku]);
    }

    public function update($id, Request $request)
    {
        try {
            Sku::where("id", $id)->update([
                "cod"=>$request->cod,
                "description"=>$request->description,
            ]);

            return response()->json(['message' => 'Sku atualizado'], 200);
        }catch (Throwable $error) {
            return response()->json(['message'=> 'Sku não atualizado'], 500);
        }
    }

    public function search(Request $request)
    {
        $cod = $request->codSku;
        $sku = Sku::where('cod', $cod)->first();

        if (!$sku):
            return response()->json(['sku' => $sku, 'success' => 'not found'], 404);
        endif;

        return response()->json(['client' => $sku, 'success' => 'ok'], 200);
   } */
}

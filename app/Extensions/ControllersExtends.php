<?php

namespace App\Extensions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interfaces\ControllersInterface;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

abstract class ControllersExtends extends Controller implements ControllersInterface
{
    private $model = null;
    private $template = null;

    public function __construct($model, String $template)
    {
        $this->model = $model;
        $this->template = $template;
    }

    public function index($with = [])
    {
        $data = $this->model::all();
        if (count($with) > 0) {
            $data = $this->model::with($with)->get();
        }
        return view("{$this->template}.index", ["data" => $data]);
    }

    public function create()
    {
        return view("{$this->template}.create");
    }

    public function edit(Request $request, $id, $with = [])
    {
        $data = $this->model::where("id", $id)->first();
        if (count($with) > 0) {
            $data = $this->model::with($with)->where("id", $id)->first();
        }
        return view("{$this->template}.edit", ["data" => $data]);
    }

    public function details(Request $request, $id, $with = [])
    {
        $data = $this->model::where("id", $id)->first();
        if (count($with) > 0) {
            $data = $this->model::with($with)->where("id", $id)->first();
        }
        return view("{$this->template}.details", ["data" => $data]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            unset($data["_token"]);
            $this->model::create($data);
            return response()->json(["Cadastrado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Cadastrar. ".$error->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            unset($data["_token"]);
            $this->model::where("id", $id)->update($data);
            return response()->json(["Atualizado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Atualizar."], 500);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $this->model::destroy($id);
            return response()->json(["Atualizado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Atualziar."], 500);
        }
    }
}

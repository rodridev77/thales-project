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
    private $with = [];

    public function __construct($model, String $template)
    {
        $this->model = $model;
        $this->template = $template;
    }

    public function index()
    {
        $data = $this->model::all();
        return view("{$this->template}.index", ["data" => $data]);
    }

    public function create()
    {
        return view("{$this->template}.create");
    }

    public function edit($id)
    {
        $data = $this->model::where("id", $id)->first();
        return view("{$this->template}.edit", ["data" => $data]);
    }

    public function show(Request $request, $id, $with = [])
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
            unset($data["_method"]);
            if(count($this->with) > 0){
                $i = 0;
                $primary = null;
                foreach($this->with["data"] as $model=>$fields){
                    if($i == 0 ){
                      $primary = $this->model::create($fields);
                      $i++;
                      continue;
                    }
                    $i++;
                    $fields[$this->with["changes"]->key] = $primary->id;
                    $model::create($fields);
                }
            }else{
                $this->model::create($data);
            }
            return response()->json(["Cadastrado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Cadastrar. ", "error" => $error->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            unset($data["_token"]);
            unset($data["_method"]);
            if(count($this->with) > 0){
                $i = 0;
                foreach($this->with["data"] as $model=>$fields){
                    $model::where($i == 0 ? 'id' : $this->with["changes"]->key, $id)->update($fields);
                    $i++;
                }
            }else{
                $this->model::where('id', $id)->update($data);
            }
            return response()->json(["Atualizado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Atualizar.", "error" => $error->getMessage()], 500);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $this->model::destroy($id);
            return response()->json(["Deletado com Sucesso!"]);
        } catch (Exception $error) {
            return response()->json(["message" => "Problema ao Deletar."], 500);
        }
    }

    public function withAndChange($modules = [],$changes = ["permiss" => false, "key" => ""]){
        $this->with = ["data" => $modules, "changes" => (Object) $changes];
    }
}

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

    public function __construct(Model $model, String $template){
        $this->model = $model;
        $this->template = $template;
    }
    public function index($with = []){
        $data = $this->model::all();
        if(count($with) > 0) {
            $data = $this->model::with($with)->get();
        }
        return view("{$this->template}.index",$data);
    }
    public function create(){
        return view("{$this->template}.create");
    }
    public function edit(Request $request, $id){}
    public function store(Request $request){}
    public function update(Request $request, $id){}
    public function destroy(Request $request, $id){}
}

<?php
namespace App\Interfaces;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface ControllersInterface {
    public function __construct(Model $model = null, String $template);
    public function index($with = []);
    public function create();
    public function edit(Request $request, $id);

    public function store(Request $request);
    public function update(Request $request, $id);
    public function destroy(Request $request, $id);
}

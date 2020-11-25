<?php
namespace App\Interfaces;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface ControllersInterface {
    public function __construct($model = null, String $template);
    public function index();
    public function create();
    public function edit($id);

    public function store(Request $request);
    public function update(Request $request, $id);
    public function destroy(Request $request, $id);
}

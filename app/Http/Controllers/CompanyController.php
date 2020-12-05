<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Company;
use App\Extensions\ControllersExtends;

class CompanyController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Company::class,"company");
        parent::setValidate([
            "name" => "required"
        ]);
    }
}

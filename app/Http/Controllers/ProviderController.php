<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\ControllersExtends;
use App\Models\Provider;

class ProviderController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Provider::class,"providers");
    }
}

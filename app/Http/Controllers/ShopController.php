<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Extensions\ControllersExtends;
use App\Models\Shop;

class ShopController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        $model = new Shop;
        parent::__construct(Shop::class,"shops");
    }
}

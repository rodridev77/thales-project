<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Category;
use App\Extensions\ControllersExtends;

class CategoryController extends ControllersExtends
{
    public function __construct($model = null, $template = null){
        parent::__construct(Category::class,"category");
    }
}

<?php

use App\Extensions\ControllersExtends;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends ControllersExtends
{
    public function __construct($model = null, $template = null) {
        parent::__construct(Stock::class, "stocks");
        parent::setValidate([
            "name" => "required|unique:brands"
        ]);
    }
}

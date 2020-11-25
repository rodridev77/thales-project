<?php

namespace App\Models;

use Database\Seeders\Funcionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        "fantasyname",
        "companyname",
        "cnpj",
        "ie"
    ];
    public function employees(){
        return $this->hasOne(Funcionario::class,"shop_id","id");
    }
}

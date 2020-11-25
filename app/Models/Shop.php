<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        "fantasyname",
        "companyname",
        "cnpj",
        "ie"
    ];
    use HasFactory;
}

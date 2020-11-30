<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["name", "documento", "email", "phone", "phone1", "zipcode", "street", "number", "district", "complement", "city", "uf"];

    public function products()
    {
        return $this->hasMany(Product::class, "provider_id", "id");
    }
}

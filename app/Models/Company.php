<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["name"];

    public function products()
    {
        return $this->hasMany(Product::class, "company_id", "id");
    }

    public function stocks()
    {
        return $this->hasMany(Stocks::class, "company_id", "id");
    }
}

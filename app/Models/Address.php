<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ["uf","city","district","street","zipcode","number","employee_id"];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ["cargo",
    "salary",
    "admission_date",
    "dismission_date",
    "employee_id"
    ];
    use HasFactory;
}

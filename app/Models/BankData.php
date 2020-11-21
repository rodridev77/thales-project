<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankData extends Model
{
    protected $fillable = [
        "account_number",
        "bank",
        "agency",
        "employee_id"
    ];
    use HasFactory;
}

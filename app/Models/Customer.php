<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'conjugate',
        'phone_conjugate',
        'state',
        'company',
        'income',
        'conjugate',
        'dependents',
        'cpf',
        'rg',
        'phone',
        'phone_residential',
        'phone_commercial',
        'phone_complementary',
        'mother_name',
        'father_name',
        'level_of_schooling',
        'state',
        'cit',
        'neighborhood',
        'street',
        'zipcode',
        'number',
        'additional_information'
    ];
}

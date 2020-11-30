<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Contract;
use App\Models\Address;
use App\Models\BankData;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
                            "image",
                            "name",
                            "cpf",
                            "rg",
                            "phone",
                            "mother_name",
                            "father_name",
                            "birthday",
                            "gender",
                            "level_of_schooling",
                            "email",
                            "shop_id"
                        ];

    public function user(){
        return $this->hasOne(User::class,"employee_id","id") ?? [];
    }

    public function getBirthdayAttribute($value){
        return date('d-m-Y', strtotime($value));
    }

    public function grantAutorizedUserAccess(){

    }

    public function bankData(){
        return $this->hasOne(BankData::class,"employee_id","id") ?? [];
    }

    public function address(){
        return $this->hasOne(Address::class,"employee_id","id") ?? [];
    }

    public function contract(){
        return $this->hasOne(Contract::class,"employee_id","id") ?? [];
    }

    public function shops(){
        return $this->belongsToMany(Shop::class) ?? [];
    }
}

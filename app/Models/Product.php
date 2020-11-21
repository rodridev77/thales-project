<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["name","cost_price","sale_price","sku","description", "company_id", "category_id", "brand_id", "privider_id"];

    public function stocks()
    {
        return $this->hasMany(Stock::class, "product_id", "id");
    }

    public function company()
    {
        return $this->belongsTo(Company::class, "company_id", "id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, "brand_id", "id");
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, "provider_id", "id");
    }
    
}

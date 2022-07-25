<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'status',
        'image',
        'category_id',
        'company_name',
        'address',
        'website',
    ];

    
    public function product()
    {
        return $this->hasMany(Product::class,'manufacturer_id');
    }
}

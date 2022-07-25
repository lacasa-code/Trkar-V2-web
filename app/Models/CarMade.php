<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarMade extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'status',
        'slug',
        'category_id',
        'image',
    
    ];

    public function product()
    {
        return $this->hasMany(Product::class,'car_made_id');
    }
}

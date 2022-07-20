<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    
    use  HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'slug',
        'car_model_id',
        'car_engine_id',
        'subcategory_id',
        'status',
        'product_type_id',
        'serial_number',
        'name_en',
        'name_ar',
        'details_en',
        'details_ar',
        'price',
        'actual_price',
        'discount',
        'image',
        'category_id',
        'subcategory_id',
        'car_made_id',
        'year_id',
        'manufacturer_id',
        'original_country_id',
        'store_id',
        'approved',
    ];

}

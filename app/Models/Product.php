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

    public function setDiscountAttribute($value)
    {
         $this->attributes['discount'] = $value ?? '0';
    }

    protected $casts = [
        'years_id' => 'array',
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function car_made()
    {
        return $this->belongsTo(CarMade::class);
    }

}

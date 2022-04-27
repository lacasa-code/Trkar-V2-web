<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'postal_code',
        'user_id',
        'recipent_name',
        'recipent_phone',
        'recipent_email',
        'country_id',
        'city_id',
        'area_id',
        'address',
        'longitude',
        'latitude',
        'home_no',
        'floor_no',
        'status',
        
    ];
}

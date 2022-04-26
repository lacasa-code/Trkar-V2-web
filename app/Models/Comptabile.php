<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comptabile extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'car_model_id',
        'product_id',
        
    ];
}

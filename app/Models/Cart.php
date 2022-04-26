<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_id',
        'store_id',
        'user_id',
        'discount',
        'quantity',
        'tax',
        'price',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductWholesale extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'minimum_quntity',
        'product_id',
        'price'
    ];
}

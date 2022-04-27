<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductView extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'count',
        'product_id',
        'user_id',
    ];
}

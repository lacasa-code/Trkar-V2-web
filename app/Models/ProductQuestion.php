<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductQuestion extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'status',
        'product_id',
        'user_id',
        'question',
        'answer',
        'vendor_id',
        'vendor_staff_id'
    ];
}

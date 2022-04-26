<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductQuantity extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'quantity',
        'product_id',
        'quantity_reminder',
        'branch_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'order_number',
        'store_id',
        'user_id',
        'discount',
        'vendor_id',
        'shipping_address_id',
        'category_id',
        'subcategories_id',
        'grand_total',
        'date',
        'order_status_id'
    ];
}

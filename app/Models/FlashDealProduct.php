<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlashDealProduct extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'flash_deal_id',
        'product_id',
        'discount',
        'discount_type',
        'details',
        
    ];
}

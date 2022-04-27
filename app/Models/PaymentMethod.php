<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_en',
        'slug',
        'name_ar',
        'status',

    ];
}

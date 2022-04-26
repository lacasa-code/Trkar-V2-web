<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlashDeal extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'status',
        'slug',
        'title',
        'start_date',
        'end_date',
        
    ];
}

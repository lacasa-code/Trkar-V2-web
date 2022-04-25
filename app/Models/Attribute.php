<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
        'sub_category_id',
        'details_ar',
        'details_en',
        'status',
        'details'

    ];
}

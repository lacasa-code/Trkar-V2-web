<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeTyre extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'season_id',
        'parent_id',
        'value',
        'attribute_id',

    ];
}

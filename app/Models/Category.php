<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
        'slug',
        'parent_id',
        'status',
    
    ];

    public function suncategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}

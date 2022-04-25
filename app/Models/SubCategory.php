<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
        'slug',
        'category_id',
        'parent_id',
        'status',
    
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

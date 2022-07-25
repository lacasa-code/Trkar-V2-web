<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
        'slug',
        'parent_id',
        'status',
        'subcategories'

    ];

    public function suncategory()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function managed_category()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
    public function managedIDs()
    {
        $this->managedIDsTree($this->id);
        return 'Note : you can show Tree';
    }
    private function managedIDsTree($categoryID)
    {
        $arrays =[];
        $getName = self::where('id', $categoryID)->first(['name_en']);
        $getParents = self::where('parent_id', $categoryID)->get(['id', 'name_en']);
        if (count($getParents)) {
            $arrays[$categoryID] = $getName->name_en;
        } else {
            $arrays[$categoryID] = $getName->name_en;
        }



        foreach ($getParents as $category) {
            $this->managedIDsTree($category->id);
        }
        return '';
    }
    // private function managedIDsTree($categoryID)
    // {
    //     $getName = self::where('id', $categoryID)->first(['name_en']);
    //     $getParents = self::where('parent_id', $categoryID)->get(['id', 'name_en']);
    //     echo '<ul >';
    //     if (count($getParents)) {
    //         echo "<li><span class='caret'>";
    //     } else {
    //         echo "<li><span>";
    //     }
    //     echo $getName->name_en;
    //     echo "</span>";
    //     echo "<ul class='nested'>";

    //     foreach ($getParents as $category) {
    //         $this->managedIDsTree($category->id);
    //     }
    //     echo '</ul>';
    //     echo '</ul>

    //     ';
    //     // dd($parent[$this->id]);
    //     return '';
    // }

}

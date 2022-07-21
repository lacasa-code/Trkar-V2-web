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
        'subcategories'
    
    ];

    public function suncategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function managed_category(){
        return $this->hasMany('App\Models\Category','parent_id');
    }
    public function managedIDs(){
        static $parent = [];
        if(!isset($parent[$this->id])){
            $parent[$this->id] = $this->managedIDsTree($this->id);
        }
        return $parent[$this->id];
    }
    private function managedIDsTree($categoryID){
        static $parent = [];

        if(empty($parent[$this->id])){
            $parent[$this->id][] = $categoryID;
        }

        $getParents = self::where('parent_id',$categoryID)->get(['id','name_en']);

        if($getParents->isNotEmpty()){
            foreach ($getParents as $value){
                $parent[$this->id][] = $value->name_en;
                $this->managedIDsTree($value->id);
            }
        }

        return $parent[$this->id];
    }
}

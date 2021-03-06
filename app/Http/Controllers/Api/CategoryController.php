<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class CategoryController extends Controller
{
    public function all()
    {
        $cat=Category::select('id','name_'.app()->getLocale().' as name','slug','image','parent_id','status')->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.cat'),
                                'code'=>200,
                                'data'=>$cat,
                            ],200);
    }
    
    public function main()
    {
        $cat=Category::select('id','name_'.app()->getLocale().' as name','slug','image','parent_id','status')->where('parent_id',0)->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.cat'),
                                'code'=>200,
                                'data'=>$cat,
                            ],200);
    }

    public function get_sub($id)
    {
    /*
        $sub1 = Category::get();
        $sub2 = Category::get();
        foreach($sub1 as $s1=> $value)
        {
            foreach($sub2 as $s2 => $val)
            {
               /* if($s1->id == $s2->parent_id)
                {
                
                    $cat=Category::where($value->id,$val->parent_id)->first();
                    $cat->subcategories = "false";
                    $cat->save();
                }
                else
                {         
                    
                    $cat=Category::where('id',$s1->id)->first();
                    $cat->subcategories = "true";
                    $cat->save();

                }        
            }
            
        }*/

        $cat= Category::where('parent_id',$id)->get();
        if($cat->count() != 0)
        {
            return response()->json(['status'=>true,
                                    'message'=>trans('app.cat'),
                                    'code'=>200,
                                    'data'=>$cat,
                                ],200);
        }
        else
            {
                return response()->json(['status'=>false,
                                    'message'=>trans('app.not_cat'),
                                    'code'=>200,
                                    //'data'=>$cat,
                                ],200);
            }
        
    
    }

    public function create(Request $request)
    {
        $uploadFolder = 'categories';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $cat= Category::create([
            'name_en'=>$request->get('name_en'),
            'slug'=>Str::slug($request->get('name_en')),
            'name_ar'=>$request->get('name_ar'),
            'parent_id'=>$request->get('parent_id'),

            'image'=>Storage::disk('public')->url($image_uploaded_path),
            
        ]);

        $cat->status=1;
        $cat->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.cat_create'),
            'code'=>200,
            'data'=>$cat,
        ],200);
    }

    public function update(Request $request,$id)
    {
        $cat= Category::where('id',$id)->first();

        $cat->name_en=$request->input('name_en');
        $cat->slug=Str::slug($request->input('name_en'));
        $cat->name_ar=$request->input('name_ar');
        $cat->parent_id=$request->input('parent_id');
        $cat->status=$request->input('status');

        $uploadFolder = 'categories';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $cat->image =Storage::disk('public')->url($image_uploaded_path);

        $cat->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.cat_update'),
            'code'=>200,
            'data'=>$cat,
        ],200);
    }

    public function delete($id)
    {
        $cat= Category::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.cat_delete'),
            'code'=>200,
        ],200);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $cat=Category::where(function ($query) use($keyword) {
            $query->where('slug', 'like', '%' . $keyword . '%')
               ->orWhere('name_ar', 'like', '%' . $keyword . '%')
               ->orWhere('name_en', 'like', '%' . $keyword . '%');
            })->get();
           
        return response()->json([
                'status'=>true,
                'message'=>'search result',
                'code'=>200,
                'data'=>$cat,
            ],200);
    }
}

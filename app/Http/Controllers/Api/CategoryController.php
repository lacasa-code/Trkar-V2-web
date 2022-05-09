<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

    public function get_sub($id)
    {
        $cat= Category::where('parent_id',$id)->get();
        if($cat->count() != 0){
        return response()->json(['status'=>true,
                                'message'=>trans('app.cat'),
                                'code'=>200,
                                'data'=>$cat,
                            ],200);
                        }
        else{
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
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use Illuminate\Support\Str;
use App\Models\CarMade;

class AttributeController extends Controller
{
    public function all()
    {
        $car=Attribute::select('id','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','category_id','categories.name_'.app()->getLocale().' as name','status')
        ->join('categories','categories.id','attributes.id')
        ->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.car'),
                                'code'=>200,
                                'data'=>$car,
                            ],200);
    }

    public function create(Request $request)
    {
    
        $car= Attribute::create([
            'name_en'=>$request->get('name_en'),
            'name_ar'=>$request->get('name_ar'),
            'details_en'=>$request->get('details_en'),
            'details_ar'=>$request->get('details_ar'),
            'category_id'=>$request->get('category_id'),
            'status'=>$request->get('status'),

        ]);

        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('created successfully'),
            'code'=>200,
            'data'=>$car,
        ],200);
    }

    public function update(Request $request,$id)
    {
        $car= Attribute::where('id',$id)->first();

        
        $car->name_en=$request->input('name_en');
        $car->name_ar=$request->input('name_ar');
        $car->details_en=$request->input('details_en');
        $car->details_ar=$request->input('details_ar');
        $car->category_id=$request->input('category_id');

        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('success'),
            'code'=>200,
            'data'=>$car,
        ],200);
    }

    public function delete($id)
    {
        $car= Attribute::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('success'),
            'code'=>200,
        ],200);
    }
}

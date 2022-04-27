<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarModelsController extends Controller
{
    public function all()
    {
        $car=CarModel::select('id','name_'.app()->getLocale().' as name','slug','status')->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.car_model'),
                                'code'=>200,
                                'data'=>$car,
                            ],200);
    }

    public function create(Request $request)
    {
    
        $car= CarModel::create([
            'name_en'=>$request->get('name_en'),
            'slug'=>Str::slug($request->get('name_en')),
            'name_ar'=>$request->get('name_ar'),
            'status'=>$request->get('status'),

        ]);

        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.car_create'),
            'code'=>200,
            'data'=>$car,
        ],200);
    }

    public function update(Request $request,$id)
    {
        $car= CarModel::where('id',$id)->first();

        
        $car->name_en=$request->input('name_en');
        $car->slug=Str::slug($request->input('name_en'));
        $car->name_ar=$request->input('name_ar');
        $car->status=$request->input('status');

        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.car_update'),
            'code'=>200,
            'data'=>$car,
        ],200);
    }

    public function delete($id)
    {
        $car= CarModel::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.car_delete'),
            'code'=>200,
        ],200);
    }
}

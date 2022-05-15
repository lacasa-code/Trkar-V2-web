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
        $car=CarModel::select('car_models.id','car_models.name_'.app()->getLocale().' as name','car_models.slug','car_models.status','car_models.car_made_id','car_mades.name_'.app()->getLocale().' as car_made_name')
        ->join('car_mades','car_models.car_made_id','car_mades.id')
        ->get();

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
            'status'=>1,
            'car_made_id'=>$request->get('car_made_id'),

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
        $car->status=1;
        $car->car_made_id=$request->input('car_made_id');

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

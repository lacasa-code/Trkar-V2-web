<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarEngine;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CarEngineController extends Controller
{
    public function all()
    {
        $car=CarEngine::select('car_engines.id','car_engines.name_'.app()->getLocale().' as name','car_model_id','car_models.name_'.app()->getLocale().' as car_model_name','car_engines.status')
        ->join('car_models','car_models.id','car_engines.car_model_id')
        ->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.carEngine'),
                                'code'=>200,
                                'data'=>$car,
                            ],200);
    }

    public function engines_of_model($id)
    {
        $car=CarEngine::select('car_engines.id','car_engines.name_'.app()->getLocale().' as name','car_model_id','car_models.name_'.app()->getLocale().' as car_model_name','car_engines.status')
        ->join('car_models','car_models.id','car_engines.car_model_id')
        ->where('car_model_id',$id)
        ->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.carEngine'),
                                'code'=>200,
                                'data'=>$car,
                            ],200);
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string',
            'name_ar' => 'required|string',           
            'car_model_id' => 'required|integer',           
           
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $car= CarEngine::create([
            'name_en'=>$request->get('name_en'),
            'name_ar'=>$request->get('name_ar'),
            'car_model_id'=>$request->get('car_model_id'),
            'status'=>1,

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
        $car= CarEngine::where('id',$id)->first();

        
        $car->name_en=$request->input('name_en');
        $car->name_ar=$request->input('name_ar');
        $car->car_model_id=$request->input('car_model_id');
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
        $car= CarEngine::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.car_delete'),
            'code'=>200,
        ],200);
    }

    
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $car=CarEngine::where(function ($query) use($keyword) {
            $query->where('name_en', 'like', '%' . $keyword . '%')
               ->orWhere('name_ar', 'like', '%' . $keyword . '%');
            })->get();
           
        return response()->json([
                'status'=>true,
                'message'=>'search result',
                'code'=>200,
                'data'=>$car,
            ],200);
    }
}

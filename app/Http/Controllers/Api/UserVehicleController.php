<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserVehicle;
use Illuminate\Support\Facades\Validator;

class UserVehicleController extends Controller
{
    public function index()
    {
        $car = UserVehicle::select('user_vehicles.*','car_mades.name_en as car_mades_name_en','car_mades.name_ar as car_mades_name_ar',
        'car_models.name_en as car_models_name_en','car_models.name_ar as car_models_name_ar', 
        'car_engines.name_en as car_engines_name_en','car_engines.name_ar as car_engines_name_ar' )
        ->where('user_vehicles.user_id',auth()->user()->id)
        ->join('car_mades','car_mades.id','user_vehicles.made_id')
        ->join('car_models','car_models.id','user_vehicles.model_id')
        ->join('car_engines','car_engines.id','user_vehicles.engine_id')
        ->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.vehicleAll'),
            'code'=>200,
            'data'=>$car,
        ],200);

    }
    public function car($id)
    {
        $car = UserVehicle::select('user_vehicles.*','car_mades.name_en as car_mades_name_en','car_mades.name_ar as car_mades_name_ar',
            'car_models.name_en as car_models_name_en','car_models.name_ar as car_models_name_ar', 
            'car_engines.name_en as car_engines_name_en','car_engines.name_ar as car_engines_name_ar' )
            ->where('user_vehicles.id',$id)
            ->join('car_mades','car_mades.id','user_vehicles.made_id')
            ->join('car_models','car_models.id','user_vehicles.model_id')
            ->join('car_engines','car_engines.id','user_vehicles.engine_id')
            ->first();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.vehicleAll'),
            'code'=>200,
            'data'=>$car,
        ],200);

    }

    public function edit(Request $request,$id)
    {
        $car = UserVehicle::where('id',$id)->first();
        $validator = Validator::make($request->all(), [
            'made_id' => 'required|Integer',
            'model_id' => 'required|Integer',
            'engine_id' => 'required|Integer',
    
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $car->made_id=$request->input('made_id');
        $car->engine_id=$request->input('engine_id');
        $car->model_id=$request->input('model_id');
        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.vehicleUpdate'),
            'code'=>200,
            'data'=>$car,
        ],200);

    }

    public function delete($id)
    {
        $car = UserVehicle::where('id',$id)->first();
        if(!$car)
        {
            return response()->json([
                'status'=>false,
                'message'=>trans('No car found'),
                'code'=>404,
            ],404);
        }
        $car = UserVehicle::where('id',$id)->delete();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.vehicleDelete'),
            'code'=>200,
        ],200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'made_id' => 'required|Integer',
            'model_id' => 'required|Integer',
            'engine_id' => 'required|Integer',
    
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $car = new UserVehicle();
        $car->made_id = $request->made_id;
        $car->model_id = $request->model_id;
        $car->engine_id = $request->engine_id;

        $car->user_id = auth()->user()->id;
        $car->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.vehicle'),
            'code'=>200,
            'data'=>$car,
        ],200);
    }
}

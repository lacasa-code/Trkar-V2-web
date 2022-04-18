<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index($id)
    {
        $cities= City::select('id','name_'.app()->getLocale().' as name','country_id','status')->where('deleted_at',NULL)->where('country_id',$id)->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.city'),
                                'code'=>200,
                                'data'=>$cities,
                            ],200);
    }

    public function all()
    {
        $cities=City::select('id','name_'.app()->getLocale().' as name','country_id','status')->where('deleted_at',NULL)->get();
        
        return response()->json(['status'=>true,
                                'message'=>trans('app.city'),
                                'code'=>200,
                                'data'=>$cities,
                            ],200);
    }

    public function get_city($id)
    {
        $cities= City::select('id','name_'.app()->getLocale().' as name','country_id','status')->where('id',$id)->first();

        return response()->json(['status'=>true,
                                'message'=>trans('city shown successfully'),
                                'code'=>200,
                                'data'=>$cities,
                            ],200);
    }
}

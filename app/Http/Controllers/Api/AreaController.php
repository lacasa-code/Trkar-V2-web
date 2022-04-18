<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index($id)
    {
        $areas= Area::select('id','name_'.app()->getLocale().' as name','city_id','status')->where('deleted_at',NULL)->where('city_id',$id)->get();

        return response()->json(['status'=>true,
                                'message'=>trans('app.area'),
                                'code'=>200,
                                'data'=>$areas,
                            ],200);
    }

    public function all()
    {
        $areas=Area::select('id','name_'.app()->getLocale().' as name','city_id','status')->where('deleted_at',NULL)->get();
        
        return response()->json(['status'=>true,
                                'message'=>trans('app.area'),
                                'code'=>200,
                                'data'=>$areas,
                            ],200);
    }

    public function get_area($id)
    {
        $areas= Area::select('id','name_'.app()->getLocale().' as name','city_id','status')->where('id',$id)->first();

        return response()->json(['status'=>true,
                                'message'=>trans('area shown successfully'),
                                'code'=>200,
                                'data'=>$areas,
                            ],200);
    }
}


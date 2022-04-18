<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $country=Country::where('deleted_at',NULL)->select('id','name_'.app()->getLocale().' as name','country_code','iso3','numcode','phonecode','status','created_at','updated_at')->get();
        return response()->json(['status'=>true,
                                'message'=>trans('app.country'),
                                'code'=>200,
                                'data'=>$country,
                            ],200);
    }

    
    public function get_country($id)
    {

        $country = Country::where('id',$id)->select('id','name_'.app()->getLocale().' as name','country_code','iso3','numcode','phonecode','status','created_at','updated_at')->first();

        return response()->json(['status'=>true,
                                'message'=>trans('app.country'),
                                'code'=>200,
                                'data'=>$country,
                            ],200);

    }

}

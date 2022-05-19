<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TyreType;

class TyreTypesController extends Controller
{
    public function all_types()
    {
        $types=TyreType::select('id','name_'.app()->getLocale().' as name','created_at','updated_at')->get();
        return response()->json(['status'=>true,
                                'message'=>trans('tyre types have been shown successfully'),
                                'code'=>200,
                                'data'=>$types,
                            ],200);
    }
}

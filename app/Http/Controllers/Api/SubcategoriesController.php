<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function index($id)
    {
        $cat = SubCategory::where('parent_id',$id)->get();
        return response()->json(['status'=>true,
                                'message'=>trans('app.cat'),
                                'code'=>200,
                                'data'=>$cat,
                            ],200);
    }
}

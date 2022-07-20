<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\StoreBranch;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StoreBranchController extends Controller
{
    public function index($id)
    {
        $branch =StoreBranch::where('store_id',$id)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('Store branchs have been shown successfully'),
            'code'=>200,
            'data'=>$branch,
        ],200);
    }
}

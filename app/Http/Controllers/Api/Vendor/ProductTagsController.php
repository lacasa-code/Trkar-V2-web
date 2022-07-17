<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductTagsController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'product_id' => 'required|Integer',
    
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

       

        $tag = new ProductTag();
        $tag->name = $request->name;
        $tag->product_id = $request->product_id;
        $tag->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.productTag'),
            'code'=>200,
            'data'=>$tag,
        ],200);
    }
}

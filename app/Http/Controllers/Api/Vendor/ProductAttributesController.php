<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\ProductTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\Validator;

class ProductAttributesController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|string',
            'value' => 'required|string',
            'product_id' => 'required|Integer',
    
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

       

        $att = new ProductAttribute();
        $att->key = $request->key;
        $att->value = $request->value;
        $att->product_id = $request->product_id;
        $att->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.productAtt'),
            'code'=>200,
            'data'=>$att,
        ],200);
    }
}

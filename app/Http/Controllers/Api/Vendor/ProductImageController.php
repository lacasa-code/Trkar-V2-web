<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductImageController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image',
            'product_id' => 'required|Integer',
    
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }
        $product = new ProductImage();

        $uploadFolder = 'product';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $product->image=Storage::disk('public')->url($image_uploaded_path);
        $product->product_id = $request->product_id;
        $product->save();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.productimage'),
            'code'=>200,
            'data'=>$product,
        ],200);
    }
}

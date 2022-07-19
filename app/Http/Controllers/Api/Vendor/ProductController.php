<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductTag;
use App\Models\ProductWholesale;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_type_id' => 'required|Integer',
            'serial_number' => 'required|Integer',
            'name_en' => 'required|string|between:2,100',
            'name_ar' => 'required|string|between:2,100',
            'details_en' => 'required|string',
            'details_en' => 'required|string',
            'price' => 'required',
            'actual_price' => 'required',
            'discount' => 'required',
            'image' => 'required|image',
            'category_id' => 'required|Integer',
            'car_made_id' => 'required|Integer',
            'year_id' => 'required|Integer',
            'manufacturer_id' => 'required|Integer',
            'original_country_id' => 'required|Integer',
            'store_id' => 'required|Integer',
            'slug' => 'unique:products',

        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $product = new Product();
        $product->product_type_id=$request->product_type_id;
        $product->name_en=$request->name_en;
        $product->name_ar=$request->name_ar;
        $product->slug=Str::slug($request->get('name_en'));
        $product->details_ar=$request->details_ar;
        $product->details_en=$request->details_en;
        $product->price=$request->price;
        $product->actual_price=$request->actual_price;
        $product->discount=$request->discount;
        $product->serial_number=$request->serial_number;

        if($product->product_type_id == 1)
        {
            $product->uuid = 'VR'.'_'.auth('vendor')->user()->id.'_'.$request->serial_number;

        }
        if($product->product_type_id == 2)
        {
            $product->uuid = 'VW'.'_'.auth('vendor')->user()->id.'_'.$request->serial_number;

           


        }
               
        
        $uploadFolder = 'product';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $product->image=Storage::disk('public')->url($image_uploaded_path);
        
        $product->category_id=$request->category_id;
        $product->car_made_id=$request->car_made_id;
        $product->year_id=$request->year_id;
        $product->manufacturer_id=$request->manufacturer_id;
        $product->original_country_id=$request->original_country_id;
        $product->store_id=$request->store_id;
        $product->approved=0;
        
        $product->save();

        if($product->product_type_id == 2)
        {

            $validator = Validator::make($request->all(), [
                'minimum_quntity' => 'required|Integer',
                'price' => 'required',
        
            ]);
    
            if ($validator->fails()) 
            {
                return response()->json(['status'=>false,
                                        'message'=>$validator->errors(),
                                        'code'=>400],400);
            }
            $wholesale = new ProductWholesale();
            $wholesale->product_id=$product->id;
            $wholesale->minimum_quntity = $request->minimum_quntity;
            $wholesale->price = $request->price_w;
            $wholesale->save();



        }
        return response()->json([
            'status'=>true,
            'message'=>trans('app.product'),
            'code'=>200,
            'data'=>$product,
        ],200);
    }
}

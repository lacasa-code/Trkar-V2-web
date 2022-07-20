<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Product;
use App\Models\Comptabile;
use App\Models\ProductTag;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\ProductQuantity;
use App\Models\ProductQuestion;
use App\Models\ProductAttribute;
use App\Models\ProductWholesale;
use App\Http\Controllers\Controller;
use App\Models\ProductView;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_type_id' => 'required|Integer',
            'serial_number' => 'required|Integer|unique:products',
            'name_en' => 'required|string|between:2,100|unique:products',
            'name_ar' => 'required|string|between:2,100|unique:products',
            'details_en' => 'required|string',
            'details_en' => 'required|string',
            'actual_price' => 'required',
            'discount' => 'nullable',
            'image' => 'required|image',
            'category_id' => 'required|Integer',
            'subcategory_id' => 'required|Integer',
            'car_made_id' => 'nullable|Integer',
            'car_model_id' => 'nullable|Integer',
            'car_engine_id' => 'nullable|Integer',

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
        $product->price=$request->actual_price + $request->actual_price * ($request->discount / 100);
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
        $product->subcategory_id=$request->subcategory_id;
        $product->car_made_id=$request->car_made_id;
        $product->car_model_id=$request->car_model_id;
        $product->car_engine_id=$request->car_engine_id;

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
            $wholesale->price = $request->price;
            $wholesale->save();



        }
        return response()->json([
            'status'=>true,
            'message'=>trans('app.product'),
            'code'=>200,
            'data'=>$product,
        ],200);
    }

    public function index($id)
    {
        $product=Product::where('id',$id)->get();
        $att = ProductAttribute::where('product_id',$id)->get();
        $img = ProductImage::where('product_id',$id)->get();
        $tag = ProductTag::where('product_id',$id)->get();
        $wholesale= ProductWholesale::where('product_id',$id)->get(); 
        $comp = Comptabile::where('product_id',$id)
                ->join('car_models','car_models.id' ,'comptabiles.car_model_id') 
                ->get();
        $qt = ProductQuantity::where('product_id',$id)->get();
        $review=ProductReview::where('product_id',$id)->get();
        $productQuestion = ProductQuestion::where('product_id',$id)->get();
        $views=ProductView::where('product_id',$id)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.productDetails'),
            'code'=>200,
            'data'=>['product'=>$product,
                    'product attributes'=>$att,
                    'product images'=>$img,
                    'product tags'=>$tag,
                    'product wholesale'=>$wholesale,
                    'product comptailble models'=>$comp,
                    'product quantity'=> $qt,
                    'product reviews'=>$review,
                    'product question'=>$productQuestion,
                    'product views'=>$views
                ],
        ],200);
        


            

    }

    public function vendor_products()
    {
        $store = Store::where('vendor_id',auth('vendor')->user()->id)->first();
        $product=Product::where('store_id',$store->id)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('products have been shown successfully'),
            'code'=>200,
            'data'=>$product,
        ],200);
    }
}

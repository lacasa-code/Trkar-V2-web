<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Store;
use App\Models\Product;
use App\Models\Comptabile;
use App\Models\ProductTag;
use App\Models\ProductView;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\ProductQuantity;
use App\Models\ProductQuestion;
use App\Models\ProductAttribute;
use App\Models\ProductWholesale;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $product->price=$request->actual_price - $request->actual_price * ($request->discount / 100);
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

    public function category_products($id)
    {
        $product=Product::where('subcategory_id',$id)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('products have been shown successfully'),
            'code'=>200,
            'data'=>$product,
        ],200);
    }

    public function delete($id)
    {
        $product =Product::where('id',$id)->first();
        if($product == null)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('No product found'),
                'code'=>200,
            ],200);
        }
        else
        {
            $product =Product::where('id',$id)->delete();
            $att = ProductAttribute::where('product_id',$id)->get();
            if($att)
            {
                $att = ProductAttribute::where('product_id',$id)->delete();
            }
            
            $img = ProductImage::where('product_id',$id)->get();
            if($img)
            {
                $img = ProductImage::where('product_id',$id)->delete();
            }

            $tag = ProductTag::where('product_id',$id)->get();
            if($tag)
            {
                $tag = ProductTag::where('product_id',$id)->delete();
            }

            $wholesale= ProductWholesale::where('product_id',$id)->get(); 
            if($wholesale)
            {
                $wholesale= ProductWholesale::where('product_id',$id)->delete(); 
            }

            $comp = Comptabile::where('product_id',$id)
                ->join('car_models','car_models.id' ,'comptabiles.car_model_id') 
                ->get();
            if($comp)
            {
                $comp = Comptabile::where('product_id',$id)
                ->join('car_models','car_models.id' ,'comptabiles.car_model_id') 
                ->delete();            
            }

            $qt = ProductQuantity::where('product_id',$id)->get();
            if($qt)
            {
                $qt = ProductQuantity::where('product_id',$id)->delete();
            }

            $review=ProductReview::where('product_id',$id)->get();
            if($review)
            {
                $review=ProductReview::where('product_id',$id)->delete();
            }

            $productQuestion = ProductQuestion::where('product_id',$id)->get();
            if($productQuestion)
            {
                $productQuestion = ProductQuestion::where('product_id',$id)->delete();
            }

            $views=ProductView::where('product_id',$id)->get();
            if($views)
            {
                $views=ProductView::where('product_id',$id)->delete();
            }

            return response()->json([
                'status'=>true,
                'message'=>trans('app.productDelete'),
                'code'=>200,
            ],200);

        }
    }

    public function update(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();
        if(!$product)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('No product found'),
                'code'=>200,
            ],200);
        }

        $validator = Validator::make($request->all(), [
            'serial_number' => ['required', 'Integer', 'unique:products,serial_number,'.$product->id],
            'name_en' => ['required', 'string', 'unique:products,name_en,'.$product->id],
            'name_ar' => ['required', 'string', 'unique:products,name_ar,'.$product->id],

            'details_en' => 'required|string',
            'details_en' => 'required|string',
            'actual_price' => 'required',
            'discount' => 'nullable',
            'image' => 'image',
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
        $product->name_en=$request->input('name_en');
        $product->slug=Str::slug($request->input('name_en'));
        $product->name_ar=$request->input('name_ar');
        $product->details_ar=$request->input('details_ar');
        $product->details_en=$request->input('details_en');
        $product->actual_price=$request->input('actual_price');
        $product->discount=$request->input('discount');
        $product->serial_number=$request->input('serial_number');
        $product->price=$request->actual_price - $request->actual_price * ($request->discount / 100);
        if($product->product_type_id == 1)
        {
            $product->uuid = 'VR'.'_'.auth('vendor')->user()->id.'_'.$request->serial_number;

        }
        if($product->product_type_id == 2)
        {
            $product->uuid = 'VW'.'_'.auth('vendor')->user()->id.'_'.$request->serial_number;

        }
        $uploadFolder = 'product';

        if($image = $request->file('image'))
        {
            $image_uploaded_path = $image->store($uploadFolder, 'public');
            $product->image =Storage::disk('public')->url($image_uploaded_path);
        }       

        
        $product->category_id=$request->input('category_id');
        $product->subcategory_id=$request->input('subcategory_id');
        $product->car_made_id=$request->input('car_made_id');
        $product->car_model_id=$request->input('car_model_id');
        $product->car_engine_id=$request->input('car_engine_id');
        $product->year_id=$request->input('year_id');
        $product->manufacturer_id=$request->input('manufacturer_id');
        $product->original_country_id=$request->input('original_country_id');
        $product->store_id=$request->input('store_id');
        
        $product->save();
        
        return response()->json([
            'status'=>true,
            'message'=>trans('app.productUpdate'),
            'code'=>200,
            'data'=>$product,
        ],200);

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        
        $product=Product::select('products.*','categories.name_en as category_name_en','categories.name_ar as category_name_ar','categories.slug as category_slug',
                                'manufacturers.name_en as manufacturer_name_en','manufacturers.name_ar as manufacturer_name_ar',
                                'car_mades.name_en as  car_mades_name_en','car_mades.name_ar as  car_mades_name_ar','car_mades.slug as  car_mades_slug')
                ->join('categories','categories.id','products.category_id')
                ->join('manufacturers','manufacturers.id','products.manufacturer_id')
                ->join('car_mades','car_mades.id','products.car_made_id')

                ->whereHas('category', function($query) use($keyword) {
                    $query->where('categories.name_en', 'like', '%'.$keyword.'%')
                    ->orwhere('categories.name_ar', 'like', '%'.$keyword.'%')
                    ->orwhere('categories.slug', 'like', '%'.$keyword.'%');
                })
                ->orwhereHas('manufacturer', function($query) use($keyword) {
                    $query->where('manufacturers.name_en', 'like', '%'.$keyword.'%')
                    ->orwhere('manufacturers.name_ar', 'like', '%'.$keyword.'%');
                })
                ->orwhereHas('car_made', function($query) use($keyword) {
                    $query->where('car_mades.name_en', 'like', '%'.$keyword.'%')
                    ->orwhere('car_mades.name_ar', 'like', '%'.$keyword.'%')
                    ->orwhere('car_mades.slug', 'like', '%'.$keyword.'%');

                })
                
                
                
                ->orWhere('products.name_en','LIKE','%'.$keyword.'%')
                ->orWhere(DB::raw('CONCAT_WS(" ",categories.name_en,manufacturers.name_en)'), 'like', '%' . $keyword . '%')
                ->orWhere(DB::raw('CONCAT_WS(" ",categories.name_en,car_mades.name_en)'), 'like', '%' . $keyword . '%')
                ->orWhere(DB::raw('CONCAT_WS(" ",categories.name_en,products.serial_number)'), 'like', '%' . $keyword . '%')
                ->orWhere(DB::raw('CONCAT_WS(" ",products.serial_number,manufacturers.name_en)'), 'like', '%' . $keyword . '%')

                ->get();

           
        return response()->json([
                    'status'=>true,
                    'message'=>trans('search result'),
                    'code'=>200,
                    'data'=>$product,
                ],200);
        /* ->where(function ($query) use($keyword) {
            $query->where('Invoice_Number', 'like', '%' . $keyword . '%')
               ->orWhere('chassis_no', 'like', '%' . $keyword . '%')
               ->orWhere('created_at', 'like', '%' . $keyword . '%')
               ->orWhere('total_amount', 'like', '%' . $keyword . '%')
               ->orWhere('paid_amount', 'like', '%' . $keyword . '%')
               ->orWhere('reg_chars', 'like', '%' . $keyword . '%')
               ->orWhere('registeration', 'like', '%' . $keyword . '%')
               ->orWhere(DB::raw('CONCAT_WS(" ",registeration,reg_chars)'), 'like', '%' . $keyword . '%')
               ->orWhere('Status', 'like', '%' . $keyword . '%')
               ->orWhere('Customer', 'like', '%' . $keyword . '%');
        
          })->paginate($page_size);*/
  

    }
}

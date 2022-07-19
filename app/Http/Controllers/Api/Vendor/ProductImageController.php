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
    public function index($id)
    {
        $img = ProductImage::where('product_id',$id)->get();
        return response()->json([
            'status'=>true,
            'message'=>'Images of product shown successfully',
            'code'=>200,
            'data'=>$img,
        ],200);
    }
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'product_id' => 'required|Integer',
       ]);

       if ($validator->fails()) 
       {
           return response()->json(['status'=>false,'message'=>$validator->errors(),'code'=>400],400);
       }

       if(!$request->hasFile('image')) {
           return response()->json(
               ['upload_file_not_found'],
                400);
       }
       $files = $request->file('image'); 


       foreach ($files as $file) 
       {      

            foreach($request->image as $mediaFiles) {

               $uploadFolder = 'productImages';
               $image_uploaded_path = $mediaFiles->store($uploadFolder, 'public');
               $image=Storage::disk('public')->url($image_uploaded_path);
               $product_id = $request->product_id;

               $image = new ProductImage();
               $image->image = $image;
               $image->product_id = $product_id;
               $image->save();
       }
       return response()->json([
           'status'=>true,
           'message'=>trans('Image stored successfully'),
           'code'=>200,
           'data'=>$image,
       ],200); 
       
    }
             
   } 

      
   public function delete($id)
   {
       $img= ProductImage::where('id', $id)->firstorfail()->delete();
       return response()->json([
           'status'=>true,
           'message'=>'Image deleted successfully',
           'code'=>200,
       ],200);
   }

   public function mass_delete($id)
   {
       $img= ProductImage::where('product_id', $id)->delete();
       return response()->json([
           'status'=>true,
           'message'=>'Images of product deleted successfully',
           'code'=>200,
       ],200);
   }

   public function update(Request $request,$id)
   {
       $att= ProductImage::where('id',$id)->first();

       $att->key=$request->input('key');
       $att->value=$request->input('value');
       $att->save();

       return response()->json([
           'status'=>true,
           'message'=>'att updated successfully',
           'code'=>200,
           'data'=>$att,
       ],200);
   }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $cart=Cart::where('user_id',auth()->user()->id)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.cart'),
            'code'=>200,
            'data'=>$cart,
        ],200);
    }

    public function Add_to_cart(Request $request,$id)
    {  
        $cart=Cart::where('user_id',auth()->user()->id)->where('product_id',$id)->first();
        $product = Product::where('id',$id)->first();
        $tax = ProductSetting::where('key','tax')->first();
        if($cart == null)
        {

            $user_cart = new Cart();
            $user_cart->product_id = $id;
            $user_cart->user_id = auth()->user()->id ; 
            $user_cart->store_id = $product->store_id;
            $user_cart->discount = $product->discount;
            $user_cart->quantity = 1;
            $user_cart->tax = $tax->value;
            $user_cart->price=$product->price + $product->price *($tax->value / 100);
            $user_cart->save();
            return response()->json([
                'status'=>true,
                'message'=>trans('app.AddToCart'),
                'code'=>200,
                'data'=>$user_cart
            ],200);

        }
        else
        {
            $cart->update([
                'quantity'=>$cart->quantity + 1
            ]); 
            $cart->save();
            return response()->json([
                'status'=>true,
                'message'=>trans('app.AddToCart'),
                'code'=>200,
                'data'=>$cart
            ],200);
        }

    }

    public function remove_from_cart($id)
    {
        $cart= Cart::where('user_id',auth()->user()->id)->where('product_id',$id)->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.removeCart'),
            'code'=>200,
        ],200);
    }
}

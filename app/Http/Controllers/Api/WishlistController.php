<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
          $wishlist =Wishlist::where('user_id',auth()->user()->id)->get();
          return response()->json([
            'status'=>true,
            'message'=>trans('app.wishlistView'),
            'code'=>200,
            'data'=>$wishlist,
        ],200);
    }
    
    public function add_to_wishlist($id)
    {
          $wishlist = new Wishlist();
          $wishlist->product_id = $id ; 
          $wishlist->user_id =auth()->user()->id;
          $wishlist->save();
          return response()->json([
            'status'=>true,
            'message'=>trans('app.wishlist'),
            'code'=>200,
            'data'=>$wishlist,
        ],200);
    }

    public function delete($id)
    {
          $wishlist =Wishlist::where('product_id',$id)->where('user_id',auth()->user()->id)->delete();
          return response()->json([
            'status'=>true,
            'message'=>trans('app.wishlistDelete'),
            'code'=>200,
        ],200);
    }
}

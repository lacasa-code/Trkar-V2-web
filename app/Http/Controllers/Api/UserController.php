<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function index()
    {
        $user = User::where('deleted_at',Null)->get();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.getUsers'),
            'code'=>200,
            'data'=>$user,
        ],200);
    }
    public function delete(Request $request ,$id)
    {
        $user = User::where('id',$id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.deleteUser'),
            'code'=>200,
        ],200);
    }

    public function update(Request $request)
    {
        $user_update = User::find(auth()->id());
        
        $user_update->username = $request->input('username');
        $user_update->email = $request->input('email');
        $user_update->phone = $request->input('phone');
        
        $uploadFolder = 'users';
        //$image = $request->file('image');
        if($image = $request->file('image')){
            $image_uploaded_path = $image->store($uploadFolder, 'public');
            $user_update->image =Storage::disk('public')->url($image_uploaded_path);
            }
        //$image_uploaded_path = $image->store($uploadFolder, 'public');
        //$user_update->image =Storage::disk('public')->url($image_uploaded_path);

        $user_update->country_id = $request->input('country_id') ;
        $user_update->city_id = $request->input('city_id');
        $user_update->area_id = $request->input('area_id');
        $user_update->address = $request->input('address');
        $user_update->longitude = $request->input('longitude');
        $user_update->latitude = $request->input('latitude');
        $user_update->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.update_success'),
            'code'=>200,
        ],200);
    }

    public function get_user(Request $request,$id)
    {
        $user = User::where('id',$id)->first();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.getUsers'),
            'code'=>200,
            'data'=>$user,
        ],200);
    }

    public function update_password(Request $request )
    {
        $user_update = User::find(auth()->id());
        
        $user_update->update([
            'password'=>bcrypt($request->password)
        ]);        
        
        $user_update->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.updatepassword'),
            'code'=>200,
        ],200);
    }

}

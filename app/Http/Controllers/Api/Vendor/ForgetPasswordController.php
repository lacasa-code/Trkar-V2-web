<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use App\Http\Controllers\Controller;

class ForgetPasswordController extends Controller
{
    
    public function update_password(Request $request,$email )
    {
        $vendor_update = Vendor::where('email',$email)->first();
        $user_update = Vendor::where('email',$email)->first();

        $user_update->update([
            'password'=>bcrypt($request->password)
        ]);  
        $vendor_update->update([
            'password'=>bcrypt($request->password)
        ]);       
        
        $user_update->save();
        $vendor_update->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('app.updatepassword'),
            'code'=>200,
        ],200);
    }
}

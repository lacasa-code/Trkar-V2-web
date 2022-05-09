<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use App\Helpers\Helper;
use App\Models\Admin;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class AuthController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:api', ['except' => ['register','login']]);
    
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|email',
            'password' => 'required|string|min:6',
        
        ]);
        if (auth()->guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth('vendor')->user();
            if ($user->approved != 1) {
                auth('vendor')->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.not_approved'),
                    'code'=>401],401);

            }
            if ($user->in_block != Null) {
                auth('vendor')->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.blocked'),
                    'code'=>401],401);

            }
        }
        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,'message'=>$validator->errors(),'code'=>400],400);
        }
        if (! $token = auth()->guard('vendor')->attempt($validator->validated()))
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('app.log_in_error'),
                'code'=>401],401);
        }
        
        $user = auth('vendor')->user();
        $user->last_login=Carbon::now();
        return $this->createNewToken($token);

    }

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'country_id'=>'required',
            'city_id'=>'required',
            'area_id'=>'required',
            'address'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'bank_account'=>'required',
            'commercial_number'=>'required',
            'tax_card_number'=>'required',
            'phone' =>'required|unique:users',

        ]);


        if($validator->fails()){
            
            return response()->json(
                ['status'=>false,
                'message'=>$validator->errors(),
                'code'=>400],400);

        }

        $vendor = new Vendor();
        $vendor->username = $request->username;
        
        $vendor->email = $request->email;
        $vendor->uuid = Helper::IDGenerator(new Vendor(), 'uuid', 4, 'V');
        $vendor->password = bcrypt($request->password);

        $vendor->save();

        $token = auth('vendor')->attempt($validator->validated());
        
        return $this->createNewToken($token);
    }
    protected function createNewToken($token)
    {
        return response()->json([
            'status'=>true,
            'message'=>trans('app.token_success'),
            'code'=>201,
            'access_token' => $token,
            'token_type' => 'bearer',
            'data' => auth('vendor')->user()
        ],201);
    }


}

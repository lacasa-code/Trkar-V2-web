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

        $this->middleware('auth:api', ['except' => ['register','login','verify_otp']]);
    
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
            if ($user->phone_verified_at == Null) {
                auth('vendor')->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('Please verifiy your phone number'),
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
            'username' => 'required|string|between:2,100|unique:vendors',
            'email' => 'required|string|email|max:100|unique:vendors',
            'password' => 'required|string|min:6',
            'phone' =>'required|unique:vendors',

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
        $vendor->phone = $request->phone;
        $vendor->password = bcrypt($request->password);
        $vendor->last_login=Carbon::now();
        $vendor->approved=0;
        $vendor->save();

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'phone' =>'required|unique:users',

        ]);


        if($validator->fails())
        {
            
            return response()->json(
                ['status'=>false,
                'message'=>$validator->errors(),
                'code'=>400],400);

        }

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->uuid = Helper::IDGenerator(new User(), 'uuid', 4, 'C');
        $user->password = bcrypt($request->password);
        $user->save();


        $token = auth('vendor')->attempt($validator->validated());
        
        return $this->createNewToken($token);
    }

    public function isValidToken(Request $request)
    {
        
            return response()->json([
                'status'=>true,
                'message'=>trans('app.valid'),
                'code'=>200,
                'data' => auth('vendor')->check()           
            ],200); 

    }

    public function userProfile()
    {
        return response()->json([
            'status'=>true,
            'message'=>trans('app.userProfile'),
            'code'=>200,
            'data' => auth('vendor')->user()           
        ],200);
    }

    public function refresh() 
    {
        return $this->createNewToken(auth('vendor')->refresh());
    
    }

    public function logout() 
    {
        auth('vendor')->logout();
        return response()->json(['status'=>true,'message'=>trans('app.logout_success'),'code'=>200],200);
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

    public function verify_otp($otp,$mobile)
    {
        $vendor=Vendor::where('phone',$mobile)->first();
        if($vendor->phone_verified_at == NULL)
        {
            if($otp == 1234)
            {
                $vendor->phone_verified_at=Carbon::now();
                $vendor->save();
                return response()->json([
                    'status'=>true,
                    'message'=>trans('app.success_verifiy'),
                    'code'=>200,
                ],200);
            }
            else
            {
                return response()->json([
                    'status'=>false,
                     'message'=>trans('app.wrong_otp'),
                    'code'=>400,
                ],400);
            }
        }
        else
        {
            return response()->json([
                'status'=>false,
                 'message'=>trans('app.verified'),
                'code'=>400,
            ],400);
        }
    }

    
}

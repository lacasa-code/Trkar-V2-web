<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:api', ['except' => ['login', 'register','adminLogin']]);
    
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'email' => 'required|email',
            'password' => 'required|string|min:6',
        
        ]);
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth()->user();
            if ($user->in_block != Null) {
                auth()->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.blocked'),
                    'code'=>401],401);

            }
            if ($user->email_verified_at == Null) {
                /*auth()->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.verified'),
                    'code'=>401],401);*/

            }
        }
        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,'message'=>$validator->errors(),'code'=>400],400);
        }
        if (! $token = auth()->attempt($validator->validated()))
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('app.log_in_error'),
                'code'=>401],401);
        }
        
        $user = auth()->user();
        $user->last_login=Carbon::now();
        return $this->createNewToken($token);

    }

    
    public function Admin_login(Request $request)
    {
            // validate request
            $this->validate($request, [
                'email' => 'bail|required|email',
                'password' => 'bail|required|min:6',
            ]);
    
            $credentials = request(['email', 'password']);
    
            if ($token = auth()->attempt($credentials)) {
                $user = auth()->user();
                if ($user->role_id != 4) {
                    auth()->logout();
                    return response()->json([
                        'msg' => 'Incorrect login details',
                    ], 401);
                }
                return $this->createNewToken($token);
    
            } else {
                return response()->json([
                    'msg' => 'Incorrect login details',
                ], 401);
            }
        }
    
    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'phone' =>'required|unique:users',
            'image'=>'required',
            'country_id'=>'required',
            'city_id'=>'required',
            'area_id'=>'required',
            'address'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
        ]);


        if($validator->fails()){
            
            return response()->json(
                ['status'=>false,
                'message'=>$validator->errors(),
                'code'=>400],400);

        }
        $uploadFolder = 'users';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
    
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;

        //$user->image=Storage::disk('public')->url($image_uploaded_path);
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file=$file->storeAs('public/',$filename);
        $user->image=$request->file;

        $user->country_id = $request->country_id;
        $user->city_id = $request->city_id;
        $user->area_id = $request->area_id;
        $user->address = $request->address;
        $user->longitude = $request->longitude;
        $user->latitude = $request->latitude;
        $user->email = $request->email;
        $user->uuid = Helper::IDGenerator(new User(), 'uuid', 4, 'C');
        $user->password = bcrypt($request->password);
        $user->last_login=Carbon::now();

        $user->save();
        $user->attachRole('user');

        $token = auth()->attempt($validator->validated());
        
        return $this->createNewToken($token);
    }

    public function logout() 
    {
        auth()->logout();
        return response()->json(['status'=>true,'message'=>trans('app.logout_success'),'code'=>200],200);
    }

    public function refresh() 
    {
        
        return $this->createNewToken(auth()->refresh());
    
    }

    protected function createNewToken($token)
    {
        return response()->json([
            'status'=>true,
            'message'=>trans('app.token_success'),
            'code'=>201,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'data' => auth()->user()
        ],201);
    }

    public function userProfile()
    {
        return response()->json([
            'status'=>true,
            'message'=>trans('app.userProfile'),
            'code'=>200,
            'data' => auth()->user()           
        ],200);
    }

    public function isValidToken(Request $request)
    {
        
            return response()->json([
                'status'=>true,
                'message'=>trans('app.valid'),
                'code'=>200,
                'data' => auth()->check()           
            ],200); 

    }

    

}

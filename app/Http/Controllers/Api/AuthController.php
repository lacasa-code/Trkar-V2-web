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
use Mail;
class AuthController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    
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
            /*if ($user->email_verified_at == Null) {
                auth()->logout();
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.not_verified'),
                    'code'=>401],401);

            } */
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

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);


        if($validator->fails()){
            
            return response()->json(
                ['status'=>false,
                'message'=>$validator->errors(),
                'code'=>400],400);

        }

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;

        /*
        $uploadFolder = 'users';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $user->image=Storage::disk('public')->url($image_uploaded_path);

        $user->country_id = $request->country_id;
        $user->city_id = $request->city_id;
        $user->area_id = $request->area_id;
        $user->address = $request->address;
        $user->longitude = $request->longitude;
        $user->latitude = $request->latitude;
        */
        $user->uuid = Helper::IDGenerator(new User(), 'uuid', 4, 'C');
        $user->password = bcrypt($request->password);
        $user->last_login=Carbon::now();

        $user->save();
        $token = auth()->attempt($validator->validated());
        
        
        try {     
            $code = mt_rand(1000, 9999);
          
            //User::where('email', $user->email )->update(['codeActive' => $code]);

            $myemail = $user->email ;
            $user->activation_code = $code;
            $user->save();

            Mail::send([], [], function ($message) use ($myemail,$code) {
                $message->to($myemail)
                ->subject('Account activation code')
                ->from('info@lacasacode.com')
                ->setBody("<h1>The account activation code has been sent</h1><font color='red'> $code </font>", 'text/html');
                });
        } catch (Exception $e) {
           
        } catch (JWTException $e) {
      
        }
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

    public function verifiy(Request $request, $email)
    {
        $code= $request->code;
        $user = User::where('email',$email)->first();
        if($user->email_verified_at != NULL)
        {
            return response()->json([
                'status'=>false,
                'message'=>trans('app.email_verified'),
                'code'=>401],401);
        }
        else{
            if( $code == $user->activation_code)
            {
                $user->email_verified_at =Carbon::now();
                return response()->json([
                    'status'=>true,
                    'message'=>trans('app.success_verifiy_email'),
                    'code'=>200],200);
            }
            else 
            {
                return response()->json([
                    'status'=>false,
                    'message'=>trans('app.wrong_code'),
                    'code'=>401],401);
            }
        }
    }

    

    

}

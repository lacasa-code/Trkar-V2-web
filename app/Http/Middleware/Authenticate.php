<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate extends Middleware
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            return response()->json(['status'=>false,
                                    'message'=>trans('app.validation_error'),
                                    'code'=>401],
                                    401);
        }

        return $next($request);
    }
}

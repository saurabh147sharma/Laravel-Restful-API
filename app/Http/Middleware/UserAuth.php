<?php

namespace App\Http\Middleware;

use App\Models\AccessToken;
use Closure;
use App\Http\Controllers\BaseApiController;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(empty($request->header('accessToken'))){
            return BaseApiController::errorResponse([],'Unauthorized',[],Response::HTTP_UNAUTHORIZED);
        }
        else if(!empty($request->header('accessToken'))){
           $isAuthorized =  AccessToken::select('id')->where('accessToken',$request->header('accessToken'))->first();
            if(empty($isAuthorized)) {
                return BaseApiController::errorResponse([],'Unauthorized',[],Response::HTTP_UNAUTHORIZED);
            }
        }
        return $next($request);
    }
}
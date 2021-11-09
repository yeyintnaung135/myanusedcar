<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //if user is request backend pages check follow
        //this if is for user is not authenciated redirect to login
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                //user request url has user it will redirect to user/login else login .It is divided user or admin
                if(str_contains($request->url(),'user')){
                    return redirect()->guest('mm/user/login');
                }
                return redirect()->guest('login');
            }
        }
        else {
            //this if is for although user is authenciated his role is member redirect to front page's index
            return $next($request);

        }


    }
}

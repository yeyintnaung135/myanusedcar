<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        //if request to index page url

            //if current url has mm
            if (preg_match('/mm/', $request->path())) {
                //set mm to session locale
                Session::put('locale', 'mm');
            } elseif (preg_match('/en/', $request->path())) {
                //set en to session locale
                Session::put('locale', 'en');
            }

        //set session locale value to language config with app setlocale method
        App::setlocale(Session::get('locale'));
        return $next($request);
    }
}

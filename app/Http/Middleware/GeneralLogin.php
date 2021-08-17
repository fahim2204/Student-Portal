<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GeneralLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('uname')) {
            return $next($request)->header('Access-Control-Allow-Origin', '*');;
        } else {
            return redirect()->route('login.index');
        }

    }
}

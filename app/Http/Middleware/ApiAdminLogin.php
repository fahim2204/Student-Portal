<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAdminLogin
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
        if($request->user->type !== 'admin') {
            return response()->json(['error' => 'Access denied'], 400);
        }
        return $next($request)->header('Access-Control-Allow-Origin', '*');;
    }
}

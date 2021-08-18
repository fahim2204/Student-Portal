<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;



class GeneralLoginApi
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
        $authtoken = $request->bearerToken();
        $token = explode('::', $authtoken)[0];
        $user_id = explode('::', $authtoken)[1];
        $user = User::where('id', '=', $user_id)->where('token', '=', $token)->first();
        if($user !== null) {
            $request->user = $user;
            return $next($request)
              ->header('Access-Control-Allow-Origin', '*')
              ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
              ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        } else {
            return response()->json([
                'error' => 'Authentication failed'
            ]);
        }

    }
}

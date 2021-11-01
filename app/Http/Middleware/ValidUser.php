<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidUser
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
        if($request->session()->get('user_id')){
            return $next($request);
        }
        return redirect()->route('login');
        
    }
}

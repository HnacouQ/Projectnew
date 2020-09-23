<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware
{   
    private $cus;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'cus')
    {
        if(Auth::guard('cus')->check()){
            return $next($request);
        }

        return redirect()->route('home_login')->with('Bạn cần phải đăng nhập!');
    }
}

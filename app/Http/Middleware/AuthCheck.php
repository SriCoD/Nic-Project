<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('loginID')){
            return redirect()->route('login')->with('fail','You must login to access this page.');
        }
        return $next($request)->header('Cashe-Control','no-cashe, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cashe')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
    
}

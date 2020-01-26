<?php

namespace App\Http\Middleware;

use Closure;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()->id != 1){

            return redirect('/')->with('error', 'Not authorized to access this page');
        }
        return $next($request);
    }
}

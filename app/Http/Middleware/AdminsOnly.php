<?php

namespace App\Http\Middleware;

use Closure;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * 
     *  Checks if user logged in is an admin or not.
     *  If they are not, they are redirected to / 
     * 
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

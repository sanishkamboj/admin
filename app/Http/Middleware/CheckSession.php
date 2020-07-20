<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class CheckSession
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
        if(!$request->session()->has('admin')){
            return redirect('admin')->with('status', 'warning')->with('message', 'Please login to view page');
        }
        return $next($request);
    }
}

<?php

namespace BoilerSource\Http\Middleware;

use Closure;

class Owner
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
        if(Auth::check()){
            if(Auth::user()->roleId == 1){
                return $next($request);
            } elseif (Auth::user()->roleId == 0){
                return redirect('/panel/admin/profile');
            }else{
                return redirect('/panel/user/profile');
            }
        }
        return redirect('/');

    }
}

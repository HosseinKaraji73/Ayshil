<?php


namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request , Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->roleId == 0){
                return $next($request);
            }
            elseif(Auth::user()->roleId == 1){
                return redirect('/panel/owner/profile');
            }
            else{
                return redirect('/panel/user/profile');
            }
        }
        return redirect('/');
    }
}




<?php

namespace App\Http\Middleware;

use Closure;

class BossAdminAuth
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
        if(!isset($_SESSION)) { session_start();}

        if(isset($_SESSION["user_id"])){
            if($_SESSION["user_level"]==1){
                return $next($request);
            }
            else{
                return redirect("back/user/error");
            }
        }else{
            return redirect("back/login");
        };
    }
}

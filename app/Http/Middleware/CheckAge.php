<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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

        if ($request->age<18)
        {
            echo "<b style='background: yellow;color:red;padding:25px'>18'den küççüksün, büyü de gel abisi.<br></b>";
        }
        return $next($request);
    }
}

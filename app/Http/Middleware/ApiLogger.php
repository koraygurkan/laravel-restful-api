<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiLogger
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
        return $next($request);
    }

    public function terminate(Request $request, Response $response){
        $startTime=LARAVEL_START;
        $endTime=microtime(true);
        $log='['.date('Y-m-d H:i:s'). ']';
        $log .='['. ($endTime-$startTime)*100 . 'ms]';
        $log .='['. $request->ip() . ']';
        $log .='['. $request->method() . ']';
        $log .='['. $request->fullUrl() . ']';
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('something visited'.$request->method().' '.$request->path());
        return $next($request);
    //    $user = Auth::user();
    //    if($user->user_type !=="Teacher"){
    //     return redirect('/');
    //     return $next($request);
    //    }
    }
}

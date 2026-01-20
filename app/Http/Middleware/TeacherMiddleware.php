<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
// use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $user = Auth::user();
       if($user->user_type ==='Teacher'){
        return redirect('/');
       }
        return $next($request);
    }
}

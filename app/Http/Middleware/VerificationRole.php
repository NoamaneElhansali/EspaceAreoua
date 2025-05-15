<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificationRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {
        if(!auth()->check()){
            return redirect()->route('home-page')->with('login',true);
        }

        if(!auth()->user()->hasRole($role)){
            abort(403);
        }
        return $next($request);
    }
}

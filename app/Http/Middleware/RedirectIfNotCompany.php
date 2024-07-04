<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotCompany
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, $guard = 'company'): Response
    // {
    //     if (!Auth::guard($guard)->check()) {
    //         return redirect()->route('company.login');
    //     }

    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('company')->check()) {
            return redirect()->route('company.login');
        }

        return $next($request);
    }
}

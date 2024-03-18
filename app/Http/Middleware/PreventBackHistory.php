<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        $excludedRoutes = ['admin.dashboard', 'service.dashboard'];

        if (Auth::guard($guard)->check() && !in_array($request->route()->getName(), $excludedRoutes)) {
            $url = '';

            if ($request->user()->role === 'admin') {
                $url = 'admin.dashboard';
            } elseif ($request->user()->role === 'service') {
                $url = 'service.dashboard';
            }

            return redirect()->route($url);
        }

        return $next($request);
    }
}
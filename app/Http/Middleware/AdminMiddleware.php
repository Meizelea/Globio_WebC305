<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check if user is logged in
        // 2. Check if user is an admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // If not admin, kick them out to login page
        return redirect()->route('admin.login')->with('error', 'Access Denied. Admins only.');
    }
}
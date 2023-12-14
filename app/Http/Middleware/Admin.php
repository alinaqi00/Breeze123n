<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect(route('login_form'))->with('error', 'Please log in');
        }

        return $next($request);
    }
}

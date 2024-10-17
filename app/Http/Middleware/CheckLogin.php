<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::check());
        if (Auth::check() && Auth::user()->user_type == 'business') {
            // dd(1);
            return redirect()->route('your_listing');
            // dd(1);
            // Log::info('User not authenticated, redirecting...');
            // return redirect()->route('website_index')->with('error', 'You must be logged in to access this page.');
        }

        return $next($request);
    }
}

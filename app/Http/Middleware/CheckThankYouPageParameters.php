<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckThankYouPageParameters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty($request->get('v')) || !in_array($request->get('v'), config('custom.verticals'))) {
            Log::error('Thank You Page not accessed from an existing funnel.');
            return redirect('/');
        }
        return $next($request);
    }
}

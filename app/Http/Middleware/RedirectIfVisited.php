<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfVisited
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->is('/')) {
            if (str_contains($request->getHost(), 'smartconsumerinsights')) {
                $cookieValue = $request->cookie('visited_page');

                $pages = [
                    'solar', 'tubs', 'windows', 'roofing'
                ];

                if (in_array($cookieValue, $pages)) {
                    return redirect("/" . $cookieValue);
                }
            }
        }
        return $next($request);
    }
}

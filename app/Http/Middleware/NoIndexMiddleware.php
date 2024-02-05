<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoIndexMiddleware
{

    /**
     * The URIs that should be indexable by search engines.
     *
     * @var array
     */
    protected $except = [
        '/'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Check if the current URI is not in the $except array
        foreach ($this->except as $route) {
            if ($request->is($route)) {
                return $response; // Do nothing if the page is indexable
            }
        }
        // Add the X-Robots-Tag header to prevent indexing
        $response->headers->set('X-Robots-Tag', 'noindex, nofollow');
        return $response;
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class SiteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(bool) site() || !(bool) site('status')) {
            abort(404, 'There is no page at this url, sorry about that');
        }
        
        // If login as ADMIN, even though status is inactive still can see.
        if (auth()->user()) {
            return $next($request);
        }

        return $next($request);
    }
}

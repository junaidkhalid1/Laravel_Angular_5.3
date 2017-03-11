<?php

namespace App\Http\Middleware;

use Closure;

/**
 * To handle an incoming request from angularjs which is frontend.
 *
 */


class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * setting headers on a response
     * '*' in response header means any client/domain can access the routes
     * setting in headers which http methods are allowed
     * OPTIONS method extra request which is in sent
     * setting which headers which client can sent
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization, X-Request-With')
            ->header('Access-Control-Allow-Credentials', true);


    }
}

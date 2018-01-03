<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // print_r($request->headers->all());die('local server here');

        /**
         * When user does not have JWT token then redirect it to the login page
         * else forward the request
         */
        if($request->header('x-anonymous-consumer'))
        {
            return view('login');
        }
        return $next($request);
    }
}

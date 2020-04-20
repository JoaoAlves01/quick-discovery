<?php

namespace App\Http\Middleware;

use Closure;

class AddToken
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
        $token = isset($_COOKIE["jwt_token"]) ? $_COOKIE["jwt_token"] : "";
        $request->headers->set("Authorization", "Bearer $token");
        $response = $next($request);

        return $response;
    }
}

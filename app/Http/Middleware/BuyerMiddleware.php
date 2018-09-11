<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class BuyerMiddleware
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
        if ($request->user() && $request->user()->usertype_id  != '3')
        {
            return new Response(view('unauthorized')->with('role', 'BUYER'));
        }
        return $next($request);
    }
}

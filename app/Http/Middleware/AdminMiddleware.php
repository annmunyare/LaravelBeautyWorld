<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use App\Category;

class AdminMiddleware
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
        if ($request->user() && $request->user()->usertype_id != '1')
        {
            return new Response(view('unauthorized')->with('role', 'ADMIN'));
        }
      
        return $next($request);
      
    }
}

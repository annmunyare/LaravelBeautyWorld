<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use App\Category;
use App\Product;

class SellerMiddleware
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
        if ($request->user() && $request->user()->usertype_id  != '2'){

            return new Response(view('unauthorized')->with('role', 'BUYER'));
       
        }
        return $next($request);
 
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use App\Category;

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
        // { $categories = Category::all();
        //     return new Response(view('categories.index', compact('categories'))->with('role', 'SELLER'));
        }
        return $next($request);
    }
}

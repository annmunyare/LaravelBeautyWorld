<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function admin(Request $req){
        // return view('middleware')->withMessage("Admin");
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function seller(Request $req){
        // return view('middleware')->withMessage("Seller");
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function buyer(Request $req){
        return view('middleware')->withMessage("Buyer");
    }
}

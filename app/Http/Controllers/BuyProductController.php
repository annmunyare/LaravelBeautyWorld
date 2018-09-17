<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BuyProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $products = Product::all();
        return view('buyers.index', compact('products'));
    }
    public function show($id)
    {
        //
        $products = Product::all();
        $product = Product::find($id);
        return view('buyers.show', compact('products', 'product'));
    }
}

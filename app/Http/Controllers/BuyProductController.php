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

    public function Index()
    {
      $products = Product::all();
      return view('buyers.index', compact('products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Feature;
use App\FeatureVariation;

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
        $features = Feature::all();
        
        $featureVariations = FeatureVariation::all();
        return view('buyers.index', compact('products', 'features', 'featureVariations'));
    }
    public function show($id)
    {
        //
        $products = Product::all();
        $product = Product::find($id);
        $features = Feature::all();
        $featureVariation = FeatureVariation::find($id);    
        $featureVariations = FeatureVariation::all();
        return view('buyers.show', compact('products', 'product', 'features', 'featureVariations', 'featureVariation'));
    }
}

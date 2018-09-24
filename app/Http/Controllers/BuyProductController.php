<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Feature;
use App\FeatureVariation;
use App\ProductFeature;
use App\ProductImage;
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
        $productImages = ProductImage::all();
        
        $featureVariations = FeatureVariation::all();
        return view('buyers.index', compact('products', 'features', 'featureVariations', 'productImages'));
    }
    public function show($id)
    {
        $featureVariations = FeatureVariation::all();
        $features = Feature::all();
        $productImages = ProductImage::all();
        $product = Product::find($id);
       
        $products = Product::all();
        // // $productfeature = ProductFeature::where("product_id", $id)->get();
       
        // // foreach($productfeature as $feature ){

        // //     $featureid= $feature->feature_id;
        // //     $feature = Feature:: where("id", $featureid)->get();
        // //     foreach($feature as $featurev ){
        // //         $featureidd =$featurev->id;
        // //         $featureVariation = FeatureVariation::where("feature_id",  $featureidd )->get();
        // //         foreach($featureVariation as $featurevt ){
        // //             // dd($featurevt);
        // //         }
        // //     }


            
        // }

   
        return view('buyers.show', compact('products', 'product','features', 'featureVariations', 'productImages'));
    }
}

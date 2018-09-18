<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\ProductFeature;
use App\Product;
use App\Feature;

class ProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $productfeatures = ProductFeature::all();
        return view('productfeatures.index', compact('productfeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        $features= Feature::all();
        $productfeatures = ProductFeature::all();
        return view('productfeatures.create', compact('productfeatures', 'features', 'products'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //
        $this->validate(request(),[
            'feature_id'=>'required',
            'product_id'=>'required',
           
        ]);
        $productfeatures = ProductFeature::all();

        ProductFeature::create(request(['feature_id', 'product_id']));
        return view('productfeatures.index', compact('productfeatures'));

        // session()->flash("success_message", "You have created a new category");
        // return redirect('/productfeatures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productfeature = Productfeature::find($id);
        $products = Product::all();
        $features= Feature::all();
        $product = Product::find($id);
        $feature = Feature::find($id);
      
        return view('productfeatures.edit', compact('productfeature', 'features', 'products','feature', 'product' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(request(),[
            'feature_id'=>'required',
            'product_id'=>'required',
        ]);
        
        ProductFeature::where('id', $id)
        ->update(request(['feature_id', 'product_id' ]));
        $productfeatures = ProductFeature::all();
        return view('productfeatures.index', compact('productfeatures'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ProductFeature::where('id', $id)
        ->delete();
        $productfeatures = ProductFeature::all();
        return view('productfeatures.index', compact('productfeatures'));
    }
}

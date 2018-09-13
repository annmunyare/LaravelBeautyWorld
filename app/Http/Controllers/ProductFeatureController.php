<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
        // $productfeatures = ProductFeature::all();
        // return view('productfeatures.index', compact('productfeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productfeatures = ProductFeature::all();
        return view('productfeatures.create', compact('productfeatures'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(),[
            'product_name'=>'required',
            'product_status'=>'required',
            'product_price'=>'required',
            'category_id'=>'required',
            'product_description'=>'required',
        ]);

        ProductFeature::create(request(['product_name', 'product_status', 'product_price', 'category_id', 'product_description',]));

        // session()->flash("success_message", "You have created a new category");
        return redirect('/productfeatures');
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
      
        $productfeatures = ProductFeature::find($id);
        return view('productfeatures.edit', compact('productfeatures'));
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

            'product_name'=>'required',
            'product_status'=>'required',
            'product_price'=>'required',
             'product_description'=>'required',
        ]);
        
        ProductFeature::where('id', $id)
        ->update(request(['product_name', 'product_status', 'product_price', 'product_description' ]));
        return redirect('/productfeatures');
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
        return redirect('/productfeatures');
    }
}

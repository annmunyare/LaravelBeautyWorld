<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\FeatureVariation;



class FeatureVariationController  extends Controller
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
        
        $featureVariations = FeatureVariation::all();
        return view('featurevariations.index', compact('featureVariations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
      
        $featureVariations = FeatureVariation::all();
        $feature = Feature::find($id);
        return view('featurevariations.create', compact('featureVariations',  'feature'));
     
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
           
           
        ]);
        $featureVariations = FeatureVariation::all();
        FeatureVariation::create(request(['feature_id', 'variation_name', 'variation_price']));
        return view('featurevariations.index', compact('featureVariations'));

        // session()->flash("success_message", "You have created a new category");
        // return redirect('/featureVariations');
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
        $featureVariation = FeatureVariation::find($id);
        $feature = Feature::find($id);
        return view('featurevariations.edit', compact('featureVariation', 'feature' ));
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
          
        ]);
        
        FeatureVariation::where('id', $id)
        ->update(request(['feature_id',  'variation_name', 'variation_price']));
        $featureVariations = FeatureVariation::all();
        return view('featurevariations.index', compact('featureVariations'));
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
        FeatureVariation::where('id', $id)
        ->delete();
        $featureVariations = FeatureVariation::all();
        return view('featurevariations.index', compact('featureVariations'));
    }
}

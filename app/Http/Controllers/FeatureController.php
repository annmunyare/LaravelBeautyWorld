<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Category;
use Auth;

class FeatureController extends Controller
{
   //for auth
   public function __construct()
   {
       $this->middleware('auth');
   }
   

   public function index()
   {
       //
       $features = Feature::all();
       return view('features.index', compact('features'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       $features = Feature::all();
       return view('features.create', compact('features'));
    
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
           'feature_name'=>'required',
       ]);
       $user_id = Auth::user()->id;
       $feature = Feature::create(
        array(
        'feature_name'=>$request->feature_name,
        'user_id'=>$user_id,

        ));

    //    Feature::create(request(['feature_name']));

       // session()->flash("success_message", "You have created a new category");
       return redirect('/features');
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
       $feature = Feature::find($id);
       return view('features.edit', compact('feature'));
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
            'feature_name'=>'required',
          
       ]);
       
       Feature::where('id', $id)
       ->update(request(['feature_name']));
       return redirect('/features');
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
       Feature::where('id', $id)
       ->delete();
       return redirect('/features');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;

class ProductImageController extends Controller
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
        
        $productImages = ProductImage::all();
        return view('productimages.index', compact('productImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
      
        $productImages = ProductImage::all();
        $product = Product::find($id);
        return view('productimages.create', compact('productImages',  'product'));
     
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
            'product_id'=>'required',
           
           
        ]);
        $productImages = ProductImage::all();
        ProductImage::create(request(['product_id', 'image']));
        return view('productimages.index', compact('productImages'));

        // session()->flash("success_message", "You have created a new category");
        // return redirect('/productImages');
   
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
  
        //
        {
            //
            $productImage = ProductImage::find($id);
            $product = Product::find($id);
            return view('productimages.edit', compact('productImage', 'product' ));
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
                'product_id'=>'required',
              
            ]);
            
            ProductImage::where('id', $id)
            ->update(request(['product_id',   'image']));
            $productImages = ProductImage::all();
            return view('productimages.index', compact('productImages'));
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
            ProductImage::where('id', $id)
            ->delete();
            $productImages = ProductImage::all();
            return view('productimages.index', compact('productImages'));
        }
}

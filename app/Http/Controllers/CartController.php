<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart_products = Cart::all();
        $cart_total=Cart::with('Products')->sum('total');
        
    if(!$cart_products){

        return view('carts.index')->with('error','Your cart is empty');
      }
        return view('carts.index', compact('cart_products', 'cart_total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            // 'user_id'=>'required',
            'product_id'=>'required',
            'amount'=>'required',
            'total'=>'required',
        ]);
        // $user_id = Auth::user()->id;
        $product = Product::find($product_id);
        $product_id = Input::get('product');
        $amount = Input::get('amount');
        $total = $amount*$product->product_price;
        $cart_products = Cart::all();
        $cart_total=Cart::with('Products')->sum('total');
  
        


        Category::create(request(['product_id', 'amount', 'total']));
        return view('carts.index', compact('product_id', 'amount', 'total', 'product', 'cart_products', 'cart_total'));

        // session()->flash("success_message", "You have created a new category");
        // return redirect('/categories');
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
        Cart::where('id', $id)
        ->delete();
        return redirect('/carts');
        // return redirect('/categories');
    }
}

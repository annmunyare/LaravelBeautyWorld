<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Product;
use Auth;

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
        $user_id = Auth::user()->id;
        // $cart_products=Cart::with('products')
        //             ->where('user_id','=',$user_id)
        //             ->get();
        // // $product_id = $request->product_id;
        // dd($cart_products);
       
        // $cart_products = Cart::all();
        $cart_products=Cart::with('products');
        $cart_total=Cart::with('products')->sum('total');
        // $cart_total = 100;
        
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
            // 'id'=>'required',
            // 'amonunt'=>'required',
   
        ]);
     
      
        $product_id = $request->product_id;
        $amount = $request->amount;
    
        $user_id = Auth::user()->id;
      

      
        $product = Product::find($product_id);
        $total = $amount*($product->product_price);

        $count = Cart::where('product_id','=',$product_id)->where('user_id','=',$user_id)->count();

        if($count){
            $products = Product::all();
 
            return view('buyers.index', compact('products'))->with('error','The product is already in your cart.');
        }

      
      
            Cart::create(
              array(
            'user_id'=>$user_id,
              'product_id'=>$product_id,
              'amount'=>$amount,
              'total'=>$total
              ));
              $products = Product::all();
              return view('buyers.index', compact('products'))->with('message', 'Add to cart successful');;
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

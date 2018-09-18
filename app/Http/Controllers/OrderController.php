<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use App\Product;
use App\OrderProduct;
class OrderController extends Controller
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
      
        $orders = Order::all();
        $order_products = OrderProduct::all();
        // dd($orders);
        return view('orders.index', compact('orders', 'order_products'));
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


    public function store()
  {
    

    $this->validate(request(),[
        
    
    ]);
    
    $cart_total=Cart::with('products')->sum('total');

   
    $order = Order::create(
        array(
   
        'total'=>$cart_total,
        'order_status'=>"Placed"
        ));

      
  
    $orders = Order::all();
    $order_products = OrderProduct::all();
      return view('orders.index', compact('orders', 'order_products'));
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
        Order::where('id', $id)
        ->delete();
        return view('orders.index', compact('orders'));
    
    }
}

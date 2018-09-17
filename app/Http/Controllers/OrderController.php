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


    public function postOrder()
  {
    

    $this->validate(request(),[
        
    
    ]);

    Product::create(request(['total', 'product_status', 'product_price', 'category_id', 'product_description','image']));

     

    //    $cart_total=Cart::with('Books')->where('member_id','=',$member_id)->sum('total');

        $order = Order::create(
        array(
        'member_id'=>$member_id,
        'address'=>$address,
        'total'=>$cart_total
        ));

      foreach ($cart_books as $order_books) {

        $order->orderItems()->attach($order_books->book_id, array(
          'amount'=>$order_books->amount,
          'price'=>$order_books->Books->price,
          'total'=>$order_books->Books->price*$order_books->amount
          ));

      }
      
      Cart::where('member_id','=',$member_id)->delete();

      return Redirect::route('index')->with('message','Your order processed successfully.');
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

@extends('layouts.navigationbuyer')
@section('content')
<div class="container">
   <div class="span12">
      <div class="row">
   
            @foreach($products as $product)
           
               <div class="product-images-wrapper img-thumbnail" style="padding: 25px; margin: 25px;">
                  <div class="main-media" style="display: block">
                     <img src="/images/{{$product->image}}" alt="{{$product->product_name}}"     style="max-height: 300px;"
                        class="card-img-top img-fluid" usemap="#planetmap" >
                        <map name="planetmap">
                            <area shape="rect" coords="0,0,82,126" alt="See More" href="/buyershow/{{$product->id}}"> 
                            <area shape="circle" coords="90,58,3" alt="See" href="/buyershow/{{$product->id}}">
                            <area shape="circle" coords="124,58,8" alt="See" href="/buyershow/{{$product->id}}">
                         </map>

                     <div class="caption">
                        <h3>{{$product->product_name}}</h3>
                        <p>Price KES : <b>{{$product->product_price}}</b></p>
                        <form action="/carts/add" name="add_to_cart" method="POST" accept-charset="UTF-8">
                           {{ csrf_field() }}
                           <input type="hidden" name="product_id" value="{{$product->id}}" >
                           <select name="amount" style="width: 100%;">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                           <p align="center"><button type="submit"  class="btn btn-info btn-block">Add to Cart</button></p>
                        </form>
                     </div>
                  </div>
               </div>
           
           
            @endforeach
   
      </div>
   </div>
</div>
@endsection
@extends('layouts.navigationbuyer')
@section('content')
<div class="container">
   <div class="span12">
      <div class="row">
        <div class="col-md-6">  
           
           
               <div class="product-images-wrapper img-thumbnail" style="padding: 25px; margin: 25px;">
                  <div class="main-media" style="display: block">
                     <img src="/images/{{$product->image}}" alt="{{$product->product_name}}"     
                        class="card-img-top img-fluid" >
              

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
               </div>
               <div class="col-md-6">
   <div class="card" style="padding: 25px; margin: 25px;">
      <div class="card-header">{{ __('Description') }}</div>
      <div class="card-body">
         {{$product->product_description}} 
      </div>
   </div>
</div>
</div  >
       
   
      </div>
   </div>
</div>
@endsection


@extends('layouts.navigationbuyer')

@section('content')

<div class="container">
  <div class="span12">
    <div class="row">
      <ul class="thumbnails">
        @foreach($products as $product)
        <li class="span4">
          

          <div class="product-images-wrapper">
        <div class="main-media" style="display: block">
   
            <img src="/images/{{$product->image}}" alt="{{$product->product_name}}"     style="max-height: 300px;"
                 class="card-img-top img-fluid">
            <div class="caption">
              <h3>{{$product->product_name}}</h3>
               <p>Price KES : <b>{{$product->product_price}}</b></p>
              <form action="/carts" name="add_to_cart" method="POST" accept-charset="UTF-8">
              {{ csrf_field() }}
            
                <input type="hidden" name="product" value="{{$product->id}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              <p align="center"><button class="btn btn-info btn-block"  type="submit" >Add to Cart</button></p>
            </form>
            </div>
          </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
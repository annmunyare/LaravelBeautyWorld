
@extends('layouts.navigationbuyer')

@section('content')

<div class="container">
  <div class="span12">
    <div class="row">
      <ul class="thumbnails">
        @foreach($products as $product)
        <li class="span4">
          <div class="thumbnail">
            <img src="/images/{{$product->cover}}" alt="ALT NAME">
            <div class="caption">
              <h3>{{$product->product_name}}</h3>
               <p>Price : <b>{{$product->product_price}}</b></p>
              <form action="/carts/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                    @csrf
                <input type="hidden" name="product" value="{{$product->id}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
@extends('layouts.navigationbuyer')

@section('content')

<div class="container" style="width:60%">
  <h1>My Cart</h1>
  <table class="table table-condensed table-striped table-bordered table-hover">
    <tbody>
      <tr>
        <td>
          <b>Title</b>
        </td>
        <td>
          <b>Amount</b>
        </td>
        <td>
          <b>Price</b>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>Delete</b>
        </td>
      </tr>
      @foreach($cart_products as $cart_item)
        <tr>
          <td>{{$cart_item->product->product_name}}</td>
          <td>
           {{$cart_item->amount}}
          </td>
          <td>
            {{$cart_item->product->product_price}}
          </td>
          <td>
           {{$cart_item->total}}
          </td>
          <td>
          <td> <a href = "/carts/delete/{{$cart_item->id}} " onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>

           
          </td>
        </tr>
      @endforeach
      <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>{{$cart_total}}</b>
        </td>
        <td>
        </td>        
      </tr>
    </tbody>
  </table>
  <form action="/orders" method="post" accept-charset="UTF-8">
  {{ csrf_field() }}
  
  <button type="submit" class="btn btn-block btn-primary btn-large">Place</button>
   
  </form>
</div>
@endsection





@extends('layouts.navigationbuyer')
@section('content')
<div class="container" style="width:60%">
<h3>My Orders</h3>
<div class="menu">
  <div class="accordion">
@foreach($orders as $order)
 <div class="accordion-group">

      <div id="order{{$order->id}}" class="accordion-body collapse">
        <div class="accordion-inner">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
              <th>
              Title
              </th>
              <th>
              Amount
              </th>
              <th>
              Price
              </th>
              <th>
              Total
              </th>
              </tr>
            </thead>   
            <tbody>
            @foreach($order->orderItems as $orderitem)
              <tr>
                <td>{{$orderitem->title}}</td>
                <td>{{$orderitem->pivot->amount}}</td>
                <td>{{$orderitem->pivot->price}}</td>
                <td>{{$orderitem->pivot->total}}</td>
              </tr>
            @endforeach
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><b>{{$order->total}}</b></td>
              </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>
@endforeach
</div>
</div>
@endsection
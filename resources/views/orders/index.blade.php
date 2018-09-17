@extends('layouts.navigationbuyer')
@section('content')
<div class="container" style="width:60%">
<h3>My Orders</h3>
<div class="menu">
  <div class="accordion">

 <div class="accordion-group">
        <div class="accordion-inner">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
              <th>
                #
              </th>
              <th>
                Order Id
              </th>
              <th>
                Product 
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
            @foreach($order_products as $orderp)
              <tr>
                <td>{{$orderp->id}}</td>
                <td>{{$orderp->order_id}}</td>
                <td>{{$orderp->product->product_name}}</td>
                <td>{{$orderp-> amount}}</td>
                <td>{{$orderp->price}}</td>
                <td>{{$orderp->total}}</td>
              </tr>
              @endforeach
          
          </tbody>
          </table>
        </div>
    
    </div>

</div>
</div>
</div>
@endsection
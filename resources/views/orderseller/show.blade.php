@extends('layouts.navigationseller')
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
              Status
              </th>
        
              <th>
              Total
              </th>
              </tr>
            </thead>   
            <tbody>
            @foreach($orders as $order)
              <tr>
                <td>{{$order->id}}</td>
              <td>{{$order->order_status}}</td>
                <td>{{$order->total}}</td>
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

 
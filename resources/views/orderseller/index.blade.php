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
              <th colspan = '2'>Actions</th>
              </tr>
            </thead>   
            <tbody>
            @foreach($orders as $order)
              <tr>
                <td>{{$order->id}}</td>
              <td>{{$order->order_status}}</td>
                <td>{{$order->total}}</td>
                <td>
            <a href="/ordershow/{{$order->id}}" class="btn btn-sm btn-primary">View</a>
            </td>
            <td>
            <form action="/orders/{{$order->id}}" name="complet_order" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="user_id" value="{{$order->user_id}}" >
            <input type="hidden" name="order_id" value="{{$order->id}}" >
            <input type="hidden" name="order_status" value="{{$order->order_status}}" >
            <input type="hidden" name="total" value="{{$order->total}}" >
                           {{ csrf_field() }}
                           <button  type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Complete</button>
                        
                        </form>
           
            </td>
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

 
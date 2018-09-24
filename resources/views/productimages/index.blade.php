@extends('layouts.navigationseller')

@section('content')

<div id="main" class="row">
   <div id="content" class="col-md-8">
      <a href = "/products/create " class="btn btn-warning">Add</a>
      <table class="table table-condensed table-striped table-bordered table-hover ">
         <tr>
            <th>#</th>
            
            
           
          
            <th > Product Image</th>
          
           
           
 
          
            <th colspan = "3"> Actions</th>
         </tr>
         @foreach($productImages as $productImage)
         <tr>
            <td>{{$productImage->id}}</td>
            <td>{{$productImage->image}}</td>
          
            
           
            <td> <a href = "/productImages/edit/{{$productImage->id}}" class="btn btn-sm btn-primary">Edit</a></td>
            <td> <a href = "/productImages/delete/{{$productImage->id}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
         </tr>
         @endforeach
      </table>
   </div>

</div>
@endsection



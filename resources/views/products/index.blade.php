@extends('layouts.navigationseller')

@section('content')

<div id="main" class="row">
   <div id="content" class="col-md-8">
      <a href = "/products/create " class="btn btn-sm btn-success">Add</a></td>
      <table class = "table table-condensed table stripped table-bordered table-hover">
         <tr>
            <th>#</th>
            <th> Title</th>
            <th >Category</th>
            <th >Product Name</th>
            <th >Product Price</th>
            <th >Product Description</th>
            <th >Product Status</th>
            <th >Created at</th>
            <th >Created By</th>
          
            <th colspan = "3"> Actions</th>
         </tr>
         @foreach($products as $product)
         <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->category->category_name }}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
             <td>{{$product->product_description}}</td>
            <td>{{$product->product_status}}</td>
            <td>{{$product->created_at->toFormattedDateString()}}</td>
            <td>{{$product->user->name}}</td>
           
            <td> <a href = "/products/edit/{{$product->id}} " class="btn btn-sm btn-primary">Edit</a></td>
            <td> <a href = "/products/delete/{{$product->id}} " onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
            <td> <a href = "/products/comments/{{$product->id}} " class="btn btn-sm btn-success">Comment</a></td>
         </tr>
         @endforeach
      </table>
   </div>

</div>
@endsection


@extends('layouts.navigationseller')

@section('content')
<div id="main" class="row">
   <div id="content" class="col-md-8">
      <a href = "/productfeatures/create " class="btn btn-warning">Add</a></td>
      <table class="table table-condensed table-striped table-bordered table-hover ">
         <tr>
            <th>#</th>
            <th> Title</th>
            <th >Product Name</th>
            <th >Feature Name</th>
            <th colspan = "3"> Actions</th>
         </tr>
         @if(array($product->features))
            @foreach($product->features as $feature)
            <tr>
            <td>{{ $product['product_name'] }}</td>
            <td>{{ $feature['feature_name'] }}</td>
            <td>
            <td> <a href = "/productfeatures/edit/{{$productfeature->id}} " class="btn btn-sm btn-primary">Edit</a></td>
            <td> <a href = "/productfeatures/delete/{{$productfeature->id}} " onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
         </tr>
         @endforeach
        @endif
      </table>
   </div>

</div>
@endsection





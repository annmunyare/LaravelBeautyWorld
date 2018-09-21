@extends('layouts.navigationseller')

@section('content')

<div id="main" class="row">
   <div id="content" class="col-md-8">
      <table class="table table-condensed table-striped table-bordered table-hover ">
         <tr>
            <th>#</th>
            <th > Feature Variation Name</th>
            <th > Price</th>
            <th >Created at</th>
            <th colspan = "3"> Actions</th>
         </tr>
         @foreach($featureVariations as $featureVariation)
         <tr>
            <td>{{$featureVariation->id}}</td>
            <td>{{$featureVariation->variation_name}}</td>
            <td>{{$featureVariation->variation_price}}</td>
            <td>{{$featureVariation->created_at->toFormattedDateString()}}</td>
         
            <td> <a href = "/featureVariations/delete/{{$featureVariation->id}} " onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
            
            </tr>
         @endforeach
      </table>
      
   </div>

</div>
@endsection



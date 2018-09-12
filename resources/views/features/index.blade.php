@extends('layouts.navigationseller')

@section('content')
<div id="main" class="row">
   <div id="content" class="col-md-8">
      <a href = "/features/create " class="btn btn-sm btn-success">Add</a></td>
      <table class = "table table-condensed table stripped table-bordered table-hover">
         <tr>
            <th>#</th>
            <th> Title</th>
            <th >Feature Name</th>
            <th >Created at</th>
            <th >Created By</th>          
            <th colspan = "3"> Actions</th>
         </tr>
         @foreach($features as $feature)
         <tr>
            <td>{{$feature->id}}</td>
            <td>{{$feature->title}}</td>
            <td>{{$feature->feature_name}}</td>
            <td>{{$feature->created_at->toFormattedDateString()}}</td>
            <td>{{$feature->user->name}}</td>
           
            <td> <a href = "/features/edit/{{$feature->id}} " class="btn btn-sm btn-primary">Edit</a></td>
            <td> <a href = "/features/delete/{{$feature->id}} " onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
            <td> <a href = "/features/comments/{{$feature->id}} " class="btn btn-sm btn-success">Comment</a></td>
         </tr>
         @endforeach
      </table>
   </div>

</div>
@endsection


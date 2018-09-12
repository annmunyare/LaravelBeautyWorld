<!-- @extends('layout') -->
@include('layouts.navigationadmin')
<div class = "container">
   @section('content')
   <a href="/users/create" class="btn btn-warning">Add User</a>
   <table class="table table-condensed table striped table-bordered table-hover ">
      <tr>
         <th>#</th>
         <th>User Name</th>
         <th>User Parent</th>
         <th>Created On</th>
         <th colspan = '4'>Actions</th>
      </tr>
      @foreach ($users as $user)
      <tr>
         <td>{{$user->id}} </td>
         <td>{{$user->name}} </td>
         <td>
            @foreach ($users as $parent)
            @if($parent->id == $user->usertype_id)
            {{$parent->name}}
            @endif
            @endforeach
         </td>
         <td>{{$user->created_at->toFormattedDateString()}} </td>
         <td>
         <td>
            <a href="/users/edit/{{$user->id}}" class="btn btn-sm btn-primary">Edit</a>
         </td>
         <td>
            <a href="/users/delete/{{$user->id}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
         </td>
      </tr>
      @endforeach
   </table>
   @endsection
</div>
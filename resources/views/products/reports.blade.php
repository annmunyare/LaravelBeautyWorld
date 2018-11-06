@extends('layouts.navigationseller')
 
@section('content')
<table class = "table table-condensed table-striped table-bordered table-hover">
<tr>
<th>Category</th>
<th>Number of products</th>
</tr>
@foreach($products as $value)
<tr>
<td>{{ $value->category_name }}</td>
<td>{{$value->category}}</td>
 
</tr>
@endforeach
@endsection
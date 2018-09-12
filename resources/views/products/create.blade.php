@extends('layouts.navigationseller')

@section('content')
<form class = "form-horizontal" action="/products" method = "POST">   
    {{ csrf_field() }}
    
    <div class="form-group">
    <label for="title">Category </label>
    <select name="category_id" id=""  class="form-control">
      <option value="">---Category---</option>
      @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="product_name">Product Name <Title></Title></label>
    <input type="text" class="form-control" name="product_name"  placeholder="Enter Product Name">
   </div>

  <div class="form-group">
    <label for="product_status">Product Status <Title></Title></label>
    <input type="number" class="form-control" name="product_status"  placeholder="Enter Product Status">
   </div>
  <div class="form-group">
    <label for="product_price">Price <Title></Title></label>
    <input type="number" class="form-control" name="product_price"  placeholder="Enter Price">
   </div>

  <div class="form-group">
    <label for="body">Description</label>
    <textarea  class="form-control" name="product_description" placeholder=" Enter Description"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

@endsection

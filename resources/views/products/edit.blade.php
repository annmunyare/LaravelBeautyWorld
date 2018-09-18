@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Edit Products') }}</div>

                <div class="card-body">
                    <form method="POST" action="/products/{{$product-> id}}" >
                        <!-- @csrf -->
                        {{ csrf_field() }}
                         {{ method_field('PATCH') }}
    
                        <div class="form-group row">
                            <label for="title"class="col-md-4 col-form-label text-md-right">{{ __('Product Category') }}</label>
                            <div class="col-md-6">
                            
  
                            
                                <input type="text" class="form-control" name="category_id" value ="{{$category->category_name}}" readonly>
                              
                          
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_name"  value ="{{$product->product_name}}" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_status" class="col-md-4 col-form-label text-md-right">{{ __('Product Status') }}</label>
                            <div class="col-md-6">
                                <select name="product_status" id="type" class="form-control">
                                
                                  @foreach ($products as $product)
                                  
                                  <option value="{{$product->product_status}}">{{$product->product_status}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Product Price') }}</label>

                            <div class="col-md-6">
                                <input id="product_price" type="n" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_price"  value ="{{$product->product_price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="product_description" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_description" > {{$product->product_description}}</textarea>
                            </div>
                        </div>
                                                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                            <a href = "/products " class="btn btn-warning">Back</a></td>
                            <button type="submit" class="btn btn-primary"> Edit Product</button>
                            </div>
                        </div>

                        </div>



                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






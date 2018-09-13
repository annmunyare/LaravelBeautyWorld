

@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    <form method="POST" action="/products" >
                        @csrf
                        <div class="form-group row">
                            <label for="title"class="col-md-4 col-form-label text-md-right">{{ __('Product Category') }}</label>
                            <div class="col-md-6">
                            <select name="category_id" id=""  class="form-control">
                              <option value="" class="col-md-4 col-form-label text-md-right">Category</option>
                              @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                              @endforeach
                            </select>
                            </div>
                            </div>

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_name"  placeholder="Enter Product Name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_status" class="col-md-4 col-form-label text-md-right">{{ __('Product Status') }}</label>
                            <div class="col-md-6">
                                <select name="product_status" id="type" class="form-control">
                                <option value="">Product Status</option>
                                <option value="Instock">In stock</option>
                                <option value="Soldout">Sold out</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Product Price') }}</label>

                            <div class="col-md-6">
                                <input id="product_price" type="number" step="0.01" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_price"  placeholder="Enter Product Price" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="product_description" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_description"  placeholder="Enter Product Description" required autofocus></textarea>
                            </div>
                        </div>

                        </div>
                        <div class="form-group row">
                              <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Product Image') }}</label>
                              
                            <div class="col-md-6">
                              <input type="file" name="image" class="form-control">
                              </div>
                        </div>
                     

                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





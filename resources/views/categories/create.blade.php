<!-- @extends('layout') -->
@include('layouts.navigationadmin')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    <form method="POST" action="/categories" >
                        {{csrf_field()}}
          
                        <div class="form-group row">
                            <label for="category_parent" class="col-md-4 col-form-label text-md-right">{{ __('Category Parent') }}</label>
                            <div class="col-md-6">
                                <select name="category_parent" id="type" class="form-control">
                                <option value="">Category Parent</option>
                                  @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="category_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="category_name"  placeholder="Enter Category Name" required autofocus>

                            </div>
                        </div>
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Category') }}
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













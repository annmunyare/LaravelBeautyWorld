


@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Product Features') }}</div>

                <div class="card-body">
                    <form method="POST" action="/productfeatures" >
                        <!-- @csrf -->
                        {{ csrf_field() }}
          

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="product_id">
                                <option value="">Product Name</option>
                                @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="feature_name" class="col-md-4 col-form-label text-md-right">{{ __('Feature Name') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="feature_id">
                            <option value="">Feature Name</option>
                                @foreach ($features as $feature)
                                <option value="{{ $feature->id }}">{{ $feature->feature_name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Product Feature') }}
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










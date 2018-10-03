

@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Images') }}</div>

                <div class="card-body">
                    <form method="POST" action="/productImages">
                        @csrf
                       
                        <div class="form-group row">
                              <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Product Image') }}</label>
                              
                            <div class="col-md-6">
                              <input type="file" name="image" class="form-control">
                              </div>
                        </div>
                     <input type="hidden"  name ="product_id"value="{{$product->id}}"> 
                     

                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Product Image') }}
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





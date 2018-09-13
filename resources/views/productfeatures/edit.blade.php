@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Features') }}</div>

                <div class="card-body">
                    <form method="POST" action="/features" >
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
          

                        <div class="form-group row">
                            <label for="feature_name" class="col-md-4 col-form-label text-md-right">{{ __('Feature Name') }}</label>

                            <div class="col-md-6">
                                <input id="feature_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="feature_name"  value ="{{$feature->feature_name}}"  >
                            </div>
                        </div>
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Feature') }}
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











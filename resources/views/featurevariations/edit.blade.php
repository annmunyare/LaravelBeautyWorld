@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Edit Feature Variation') }}</div>

                <div class="card-body">
                    <form method="POST" action="/featureVariations/{{$featureVariation-> id}}" >
                        <!-- @csrf -->
                        {{ csrf_field() }}
                         {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="variation_name" class="col-md-4 col-form-label text-md-right">{{ __('Feature Variation Name') }}</label>
                            <div class="col-md-6">
                                <input id="variation_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="variation_name" value="{{$featureVariation->variation_name}}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Feature Variation Price') }}</label>
                            <div class="col-md-6">
                                <input id="variation_price" type="number" step="0.01" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="variation_price"  value="{{$featureVariation->variation_price}}" >
                            </div>
                        </div>
                        <input type="hidden" name ="feature_id" value="{{$feature->id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <a href = "/featureVariations" class="btn btn-warning">Back</a></td>
                                <button type="submit" class="btn btn-primary"> Edit Feature Variation</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






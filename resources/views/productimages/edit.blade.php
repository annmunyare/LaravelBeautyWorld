@extends('layouts.navigationseller')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Edit Products') }}</div>

                <div class="card-body">
                    <form method="POST" action="/productImages/{{$productImage-> id}}" >
                        <!-- @csrf -->
                        {{ csrf_field() }}
                         {{ method_field('PATCH') }}
                

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="image" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$productImage->}"> 
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                            <a href = "/products " class="btn btn-warning">Back</a></td>
                            <button type="submit" class="btn btn-primary"> Edit Product Image</button>
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






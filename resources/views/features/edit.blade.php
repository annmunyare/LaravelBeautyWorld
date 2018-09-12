
@include('layouts.navigationseller')


@section('content')
<form class = "form-horizontal" action="/features" method = "POST">   
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

  <div class="form-group">
    <label for="product_name">Product Name <Title></Title></label>
    <input type="text" class="form-control" name="product_name"  placeholder="Enter Product Name">
   </div>

 
  <a href = "/features " class="btn btn-sm btn-warning">Back</a></td>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

@endsection

@include('layouts.navigationseller')

@section('content')
<form class = "form-horizontal" action="/posts" method = "POST">   
    {{ csrf_field() }}
    

  <div class="form-group">
    <label for="feature_name">Feature Name <Title></Title></label>
    <input type="text" class="form-control" name="feature_name"  placeholder="Enter Feature Name">
   </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

@endsection

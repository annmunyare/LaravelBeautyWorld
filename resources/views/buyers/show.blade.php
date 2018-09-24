@extends('layouts.navigationbuyer')
@section('content')
<div class="container">
   <div class="span12">
      <div class="row">
        <div class="col-md-6">  
               <div class="product-images-wrapper img-thumbnail" style="padding: 25px; margin: 25px;">
                  <div class="main-media" style="display: block">
                     <img src="/images/{{$product->image}}" alt="{{$product->product_name}}"     
                        class="card-img-top img-fluid" >
                     <div class="caption">
                        <h3>{{$product->product_name}}</h3>
                        <p>Price KES : <b>{{$product->product_price}}</b></p>
                        <form action="/carts/add" name="add_to_cart" method="POST" accept-charset="UTF-8">
                           {{ csrf_field() }}
                           <input type="hidden" name="product_id" value="{{$product->id}}" >
                           <select name="amount" style="width: 100%;">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                           @foreach($features as $feature)
                           <p> <b>
                          {{$feature->feature_name}} </b></p>
                          @foreach($featureVariations as $featureVariation)
                          @if($feature->id == $featureVariation->feature_id)
                          <div class="form-check form-check-inline">
                          <label class="form-check-label" for="defaultCheck1">
                            {{$featureVariation->variation_name}}
                            </label>
                            <input class="form-check-input" type="checkbox"  name="variation_price"  value="{{$featureVariation->variation_price}}" >
                   
                          </div>
                          @endif
                          @endforeach

                      
                    
                    @endforeach

                           <p align="center"><button type="submit"  class="btn btn-info btn-block">Add to Cart</button></p>
                        </form>
                        </div>
          
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card" style="padding: 25px; margin: 25px;">

                      <div class="card-header">{{ __('Description') }}</div>
                        <div class="card-body">
                          {{$product->product_description}} 
                          
                          @foreach($productImages as $productImage)
                          <div class="product-images-wrapper img-thumbnail" style="padding: 25px; margin: 25px;">
                            <div class="main-media" style="display: block">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="/images/{{$productImage->image}}" alt="ALT IMAGE"     
                                      class="card-img-top img-fluid" >                                  </div>
                                
                             
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            
                                  </div>
                                 </div> 
                          @endforeach
                        </div>
                    </div>
       
                   
               
          </div> 
          
       
   
      </div>
   </div>
</div>
@endsection

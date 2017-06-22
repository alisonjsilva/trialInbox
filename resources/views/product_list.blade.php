@extends('main_layout')

@section('content')
<div class="container">
  <div class="span12">
    <div class="row">
      <ul class="thumbnails">
        @foreach($products as $count => $product)
        
        @if($count % 3 == 0)
        <div class="clearfix"></div>
        @endif
        
        <li class="span4">
          <div class="thumbnail">
            <img src="{{$product->image}}" alt="ALT NAME">
            <div class="caption">
              <h3>{{$product->title}}</h3>
              <p>{{$product->description}}</p>
              <p>Price : <b>{{$product->price}}</b></p>
              <form class="addToCart" action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="product" value="{{$product->id}}" />
                <input type="hidden" name="amount" value="1">
                {!! csrf_field() !!}
              <p align="center" class="wrapper-btn">
                <div class="alert alert-success alert-dismissable" style="display:none">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Adicionado ao seu carrinho
                </div>
                
                <button class="btn btn-info btn-block btnAddToCart" 
                data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order">Add to Cart</button>
              </p>
            </form>
            </div>
          </div>
        </li>
        
        @endforeach
      </ul>
    </div>
  </div>
</div>

@stop
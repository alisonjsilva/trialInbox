@extends('main_layout')

@section('content')

<div class="container" style="width:60%">
  <h1>Your Cart</h1>
  <table class="table">
    <tbody>
      <tr>
        <td>
          <b>Title</b>
        </td>
        <td>
          <b>Amount</b>
        </td>
        <td>
          <b>Price</b>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>Delete</b>
        </td>
      </tr>
      @foreach($cart_products as $cart_item)
        <tr>
          <td>{{$cart_item->Products->title}}</td>
          <td>
           {{$cart_item->amount}}
          </td>
          <td>
            {{$cart_item->Products->price}}
          </td>
          <td>
           {{$cart_item->total}}
          </td>
          <td>
            <a href="{{URL::route('delete_product_from_cart',array($cart_item->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
      <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>{{$cart_total}}</b>
        </td>
        <td>
        </td>
      </tr>
    </tbody>
  </table>
  <form action="/order" method="post" accept-charset="UTF-8">
    {!! csrf_field() !!}
    <button class="btn btn-block btn-primary btn-large">Buy</button>
  </form>
</div>
@stop

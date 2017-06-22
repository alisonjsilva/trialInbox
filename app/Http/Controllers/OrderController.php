<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function placeOrder()
  {
    $user_id = Auth::user()->id;

    $cart_products=Cart::with('Products')
      ->where('user_id','=',$user_id)->get();

    $cart_total=Cart::with('Products')
      ->where('user_id','=',$user_id)->sum('total');

    if($cart_products->first() == null){
      return response()->json(
        ['error' => 'your cart id empty']
      );
    } else {
      return response()->json(
        ['success' => 'true',
        'order' => $cart_products]
      );
    }
  }
}

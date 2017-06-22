<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;
use App\Product;
use App\Cart;
use View;

class OrderController extends Controller
{
  public function placeOrder()
  {
    $user_id = Auth::user()->id;

    $cart_products=Cart::with('Products')
      ->where('user_id','=',$user_id);

    $cart_total=Cart::with('Products')
      ->where('user_id','=',$user_id)->sum('total');

    if($cart_products->get()->first() == null){
      return response()->json(
        ['error' => 'your cart id empty']
      );
    } else {
      $cart_items = $cart_products->get();
      $cart_products->delete();

      return View::make('order')
            ->with('cart_products', $cart_items)
            ->with('cart_total',$cart_total);

      // return response()->json(
      //   ['success' => 'true',
      //   'order' => $cart_items,
      //   'total' => $cart_total]
      // );
    }
  }
}

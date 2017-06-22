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

class CartController extends Controller
{
    public function postAddToCart()
    {

      $user_id = Auth::user()->id;

      $product_id = Input::get('product');
      $amount = Input::get('amount');

      $product = Product::find($product_id);
      $total = $amount*$product->price;

       $this_product_in_cart = Cart::where('product_id','=',$product_id)
                  ->where('user_id','=',$user_id);

       if($this_product_in_cart->first()){

         Cart::where('product_id','=',$product_id)
                  ->where('user_id','=',$user_id)
                  ->update(
                    ['amount' => ($this_product_in_cart->first()->amount + $amount),
                    'total' => ($this_product_in_cart->first()->total + $total)]);
       } else {
         Cart::create(
          array(
          'user_id'=>$user_id,
          'product_id'=>$product_id,
          'amount'=>$amount,
          'total'=>$total
          ));
       }

       $total_in_cart = Cart::with('Products')
        ->where('user_id','=',$user_id)
        ->sum('total');

      return response()->json(
        ['total' => $total_in_cart]
        );
      //return Redirect::route('cart');
  }


  public function getIndex(){

    $user_id = Auth::user()->id;

    $cart_products=Cart::with('Products')->where('user_id','=',$user_id)->get();

    $cart_total=Cart::with('Products')->where('user_id','=',$user_id)->sum('total');

    if($cart_products->first() == null){

      return Redirect::route('index')->with('error','Your cart is empty');
    }

    return View::make('cart')
          ->with('cart_products', $cart_products)
          ->with('cart_total',$cart_total);
  }

  public function getDelete($id){

    $cart = Cart::find($id)->delete();

    return Redirect::route('cart');
  }
}

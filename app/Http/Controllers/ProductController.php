<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use View;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        
        return View::make('product_list')->with('products',$product);
    }
}

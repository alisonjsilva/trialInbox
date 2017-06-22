<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['middleware' => 'guest', 'uses' => 'ProductController@index'])->name('index')->middleware('checkLogin');

//Route::get('user/register', 'UserController@getRegister');
//Route::post('user/register', 'UserController@postRegister');
Route::get('/login', 'UserController@loginForm')->name('loginPage');
Route::post('user/login', 'UserController@doLogin');
Route::get('user/logout', 'UserController@doLogout');

Route::get('/cart', array('as'=>'cart','uses'=>'CartController@getIndex'))->middleware('checkLogin');
Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart'))->middleware('checkLogin');
Route::get('/cart/delete/{id}', array('as'=>'delete_product_from_cart','uses'=>'CartController@getDelete'))->middleware('checkLogin');

Route::post('/send', 'EmailController@send');
Route::post('/order', 'OrderController@placeOrder')->middleware('checkLogin');

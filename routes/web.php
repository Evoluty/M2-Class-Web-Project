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
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'HomeController@render')->middleware('auth');

Route::get('/cart', 'Store\CartController@render')->middleware('auth');
Route::get('/cart/addItem/{itemId}', 'Store\CartController@addItem');
Route::get('/cart/empty', 'Store\CartController@empty')->middleware('auth');
Route::get('/cart/updateItem/{itemId}/{number}', 'Store\CartController@updateItem');
Route::get('/cart/deleteItem/{itemId}', 'Store\CartController@deleteItem')->middleware('auth');

Route::get('/products/{category}', 'Products\ProductsController@render')->middleware('auth');
Route::post('/products/search', 'Products\SearchController@render')->middleware('auth');

Route::get('/my-account', 'Users\AccountController@render')->middleware('auth');
Route::post('/products/orders', 'Store\OrderController@newOrder')->middleware('auth');

Route::post('/newsletter', 'Users\NewsletterController@newSubscription')->middleware('auth');

Route::get('/products/bestseller/{itemId}/{count}', 'Products\BestSellers@addValueToItem');

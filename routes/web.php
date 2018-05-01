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

Route::get('/cart', 'CartController@render')->middleware('auth');
Route::get('/cart/addItem/{itemId}', 'CartController@addItem')->middleware('auth');
Route::get('/cart/empty', 'CartController@empty')->middleware('auth');
Route::get('/cart/deleteItem/{itemId}', 'CartController@deleteItem')->middleware('auth');

Route::get('/products/woman', 'Products\WomanController@render')->middleware('auth');
Route::get('/products/men', 'Products\MenController@render')->middleware('auth');
Route::get('/products/sale', 'Products\SaleController@render')->middleware('auth');
Route::get('/products/accessories', 'Products\AccessoriesController@render')->middleware('auth');
Route::get('/products/vip', 'Products\VIPController@render')->middleware('auth');
Route::post('/products/search', 'Products\SearchController@render')->middleware('auth');

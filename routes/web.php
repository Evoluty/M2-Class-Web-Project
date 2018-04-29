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

Auth::routes();

Route::get('/', 'HomeController@render')->middleware('auth');

Route::get('/cart', 'CartController@render')->middleware('auth');
Route::post('/cart/{itemId}', 'CartController@addItem')->middleware('auth');
Route::delete('/cart', 'CartController@empty')->middleware('auth');
Route::delete('/cart/{itemId}', 'CartController@deleteItem')->middleware('auth');

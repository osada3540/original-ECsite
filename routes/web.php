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

Route::get('/', 'ItemController@index');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//ログイン認証
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');
//商品詳細ページ
Route::get('/item/{item}', 'ItemController@show');
Route::post('/item/{item}', 'CartItemController@store');
Route::post('/item/{item}', 'LikeItemController@store');

//cart_item
Route::post('/cartitem', 'CartItemController@store'); 
Route::get('/cartitem', 'CartItemController@index');
Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');
Route::put('/cartitem/{cartItem}', 'CartItemController@update');

//購入
Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');

//気になる
Route::post('/likeitem', 'LikeItemController@store');
Route::get('/likeitem', 'LikeItemController@index');
Route::delete('/likeitem/{likeItem}', 'LikeItemController@destroy');
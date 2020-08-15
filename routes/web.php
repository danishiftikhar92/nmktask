<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'MyCartController@index')->name('cart');
Route::get('/checkout', 'MyCartController@checkOut')->name('cart');

Auth::routes();
Route::get('/products/list', 'ProductController@index')->name('products');
Route::get('/products/add', 'ProductController@create')->name('addproduct');
Route::post('/products/add', 'ProductController@store')->name('store');
Route::get('/orders/list', 'OrderController@index')->name('orders');


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

Route::get('/', 'ClientController@index')->name('clienthome');
Route::get('/shop', 'ClientController@shop')->name('shop');
Route::get('/cart', 'ClientController@cart')->name('cart');
Route::get('/checkout', 'ClientController@checkout')->name('checkout');

// Routes for admin panner
Route::get('/admin', 'AdminController@dashboard')->name('admin');
Route::resource('/admin/categories', 'CategoryController');
Route::resource('/admin/products', 'ProductController');
Route::get('/admin/slider/create', 'SliderController@create')->name('slider.create');
Route::get('/admin/slider', 'SliderController@index')->name('slider.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

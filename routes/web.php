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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@adminProducts')->middleware('is_admin')->name('admin.products');
Route::get('/admin/orders', 'AdminController@adminOrders')->middleware('is_admin')->name('admin.orders');
Route::post('/admin/orders', 'AdminController@finishOrder')->middleware('is_admin')->name('admin.finishOrder');
Route::post('/admin/delete', 'AdminController@deleteProduct')->middleware('is_admin')->name('admin.deleteProduct');
Route::post('/admin/edit', 'AdminController@editProduct')->middleware('is_admin')->name('admin.editProduct');
Route::post('/admin/add', 'AdminController@addProduct')->middleware('is_admin')->name('admin.addProduct');
Route::post('/','ProductController@addToCart')->name('user.addToCart');
Route::get('/cart','ProductController@index')->name('cart.index');
Route::post('/checkout','ProductController@store')->name('user.store');
Route::post('/cart','ProductController@update')->name('user.updateCart');

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
/**php artisan make:migration create_pizza_table */

Route::get('/', 'AccueilController@index')->name('accueil');
Route::get('/burger','BurgerController@index')->name('burger.index');
Route::post('/orders','BurgerController@store')->name('burger.store');
Route::post('/burger/comment/{id}','BurgerController@storeComment')->name('burger.storeComment');
Route::get('/orders/{id}','BurgerController@getOrder')->name('burger.getorder');
Route::get('/burger/order/{topic}','BurgerController@setOrder')->name('burger.order');
Route::get('/burger/cart','BurgerController@checkout')->name('burger.checkout');
Route::get('/burger/payment','BurgerController@pay')->name('burger.pay');
Route::get('/burger/{id}','BurgerController@show')->name('burger.show');
Route::get('/burger/remove/{id}','BurgerController@remove')->name('burger.remove');
Route::get('/burger/substract/{id}','BurgerController@substract')->name('burger.substract');
Route::get('/burger/add/{id}','BurgerController@add')->name('burger.add');

//npm install --save @fortawesome/fontawesome-free php artisan db:seed --class=InsertTypeBurger    




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/post', 'HomeController@post')->name('adminPost');
Route::post('/admin/product', 'HomeController@saveProduct')->name('adminSaveProduct');
Route::post('/admin/typeproduct', 'HomeController@saveType')->name('adminSaveType');



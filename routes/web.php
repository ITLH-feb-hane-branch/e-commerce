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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/list', 'UsersController@index');


//Route::get('/update', 'AdminsController@index');

//route for viewing order details
Route::get('/orders','OrderDetailsController@index');
//route for viewing shipping details
Route::get('/shipping','ShippingDetailsController@index');
//route for editing orders
Route::get('/orders/edit/{id}','OrderDetailsController@edit');
//route for updating orders
Route::put('/orders/update/{id}','OrderDetailsController@update');

Route::get('/edit', function () {
    return view('edit');
});

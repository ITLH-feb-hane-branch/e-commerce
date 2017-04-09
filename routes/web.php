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
//route for viewing users data
Route::get('/users', 'UsersController@index');
// route for editing users data
Route::get('/users/edit/{id}', 'UsersController@edit');
//route for updating users data
Route::put('/users/update/{id}', 'UsersController@update');
//route for creating users
Route::get('/users/create', 'UsersController@create');
//route is to store user data
Route::put('/users/store', 'UsersController@store');
//route is to delete a user
Route::get('/users/delete/{id}', 'UsersController@destroy');


//route for viewing order details
Route::get('/orders', 'OrderDetailsController@index');
//route for viewing shipping details
Route::get('/shipping', 'ShippingDetailsController@index');
//route for editing orders
Route::get('/orders/edit/{id}', 'OrderDetailsController@edit');
//route for updating orders
Route::put('/orders/update/{id}', 'OrderDetailsController@update');


//Routes for category_details
Route::get('/category/list', 'CategoryDetailsController@index');

Route::get('/category/edit/{id}', 'CategoryDetailsController@edit');

Route::put('/category/update/{id}', 'CategoryDetailsController@update');

Route::get('/category/create', 'CategoryDetailsController@create');

Route::put('/category/store', 'CategoryDetailsController@store');

Route::get('/category/delete/{id}','CategoryDetailsController@destroy');



//Routes for material_details
Route::get('/material/list', 'MaterialDetailsController@index');

Route::get('/material/edit/{id}', 'MaterialDetailsController@edit');

Route::put('/material/update/{id}', 'MaterialDetailsController@update');

Route::put('/material/update/{id}', 'MaterialDetailsController@update');

Route::get('/material/create', 'MaterialDetailsController@create');

Route::put('/material/store', 'MaterialDetailsController@store');

Route::get('/material/delete/{id}','MaterialDetailsController@destroy');

//routes for product_details
Route::get('/products/list', 'ProductDetailsController@index');

Route::get('/products/edit/{id}', 'ProductDetailsController@edit');

Route::put('/products/update/{id}', 'ProductDetailsController@update');

Route::get('/products/create', 'ProductDetailsController@create');

Route::put('/products/store', 'ProductDetailsController@store');

Route::get('/products/delete/{id}','ProductDetailsController@destroy');

//routes for product_details
Route::get('/models/list', 'ModelDetailsController@index');

Route::get('/models/edit/{id}', 'ModelDetailsController@edit');

Route::put('/models/update/{id}', 'ModelDetailsController@update');

Route::get('/models/create', 'ModelDetailsController@create');

Route::put('/models/store', 'ModelDetailsController@store');

Route::get('/models/delete/{id}','ModelDetailsController@destroy');
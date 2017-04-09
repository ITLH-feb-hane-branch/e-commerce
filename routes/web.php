
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
Route::get('/admin/users', 'UsersController@index');
// route for editing users data
Route::get('/admin/users/edit/{id}', 'UsersController@edit');
//route for updating users data
Route::put('/admin/users/update/{id}', 'UsersController@update');
//route for creating users
Route::get('/admin/users/create', 'UsersController@create');
//route is to store user data
Route::put('/admin/users/store', 'UsersController@store');
//route is to delete a user
Route::get('/admin/users/delete/{id}', 'UsersController@destroy');


//route for viewing order details
Route::get('/admin/orders', 'OrderDetailsController@index');
//route for viewing shipping details
Route::get('/admin/shipping', 'ShippingDetailsController@index');
//route for editing orders
Route::get('/admin/orders/edit/{id}', 'OrderDetailsController@edit');
//route for updating orders
Route::put('/admin/orders/update/{id}', 'OrderDetailsController@update');


//Routes for category_details
Route::get('/admin/category/list', 'CategoryDetailsController@index');

Route::get('/admin/category/edit/{id}', 'CategoryDetailsController@edit');

Route::put('/admin/category/update/{id}', 'CategoryDetailsController@update');

Route::get('/admin/category/create', 'CategoryDetailsController@create');

Route::put('/admin/category/store', 'CategoryDetailsController@store');

Route::get('/admin/category/delete/{id}','CategoryDetailsController@destroy');



//Routes for material_details
Route::get('/material/list', 'MaterialDetailsController@index');

Route::get('/admin/material/edit/{id}', 'MaterialDetailsController@edit');

Route::put('/admin/material/update/{id}', 'MaterialDetailsController@update');

Route::put('/admin/material/update/{id}', 'MaterialDetailsController@update');

Route::get('/admin/material/create', 'MaterialDetailsController@create');

Route::put('/admin/material/store', 'MaterialDetailsController@store');

Route::get('/admin/material/delete/{id}','MaterialDetailsController@destroy');

//routes for product_details
Route::get('/admin/products/list', 'ProductDetailsController@index');

Route::get('/admin/products/edit/{id}', 'ProductDetailsController@edit');

Route::put('/admin/products/update/{id}', 'ProductDetailsController@update');

Route::get('/admin/products/create', 'ProductDetailsController@create');

Route::put('/admin/products/store', 'ProductDetailsController@store');

Route::get('/admin/products/delete/{id}','ProductDetailsController@destroy');

//routes for product_details
Route::get('/admin/models/list', 'ModelDetailsController@index');

Route::get('/admin/models/edit/{id}', 'ModelDetailsController@edit');

Route::put('/admin/models/update/{id}', 'ModelDetailsController@update');

Route::get('/admin/models/create', 'ModelDetailsController@create');

Route::put('/admin/models/store', 'ModelDetailsController@store');

Route::get('/admin/models/delete/{id}','ModelDetailsController@destroy');


//Routes for wishlist_details
Route::get('/admin/wishlist/list', 'WishlistsController@index');

Route::get('/admin/wishlist/delete/{id}', 'WishlistsController@delete');

//Routes for cart_details
Route::get('/admin/cart/list', 'CartsController@index');

Route::get('/admin/cart/edit/{id}', 'CartsController@edit');

Route::get('/admin/cart/delete/{id}', 'CartsController@delete');

Route::put('/admin/cart/update/{id}', 'CartsController@update');

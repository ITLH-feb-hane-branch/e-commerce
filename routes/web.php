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

Route::get('products/list', 'ProductDetailsController@index');

Route::get('products/edit/{id}', 'ProductDetailsController@edit');

Route::put('update/{id}', 'ProductDetailsController@update');
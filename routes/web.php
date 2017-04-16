<?php

Auth::routes();

// Admin Routes Grouping added
Route::group(array('prefix' => 'admin'), function() {
    Route::get('/', 'HomeController@index');

    // Users Route Grouping 
    Route::group(array('prefix' => 'users'), function() {
        Route::get('/', 'HomeController@index');
        Route::get('edit/{id}', 'UsersController@edit');
        Route::put('update/{id}', 'UsersController@update');
        Route::get('create', 'UsersController@create');
        Route::put('store', 'UsersController@store');
        Route::get('delete/{id}', 'UsersController@destroy');
    });

    // Orders Route Grouping
    Route::group(array('prefix' => 'orders'), function() {
        Route::get('/', 'OrderDetailsController@index');
        Route::get('edit/{id}', 'OrderDetailsController@edit');
        Route::get('update/{id}', 'OrderDetailsController@update');
    });

    // Categories Route Grouping
    Route::group(array('prefix' => 'category'), function() {
        Route::get('list', 'CategoryDetailsController@index');
        Route::get('edit/{id}', 'CategoryDetailsController@edit');
        Route::put('update/{id}', 'CategoryDetailsController@update');
        Route::get('create', 'CategoryDetailsController@create');
        Route::put('store', 'CategoryDetailsController@store');
        Route::get('delete/{id}', 'CategoryDetailsController@destroy');
    });

    //route for viewing shipping details
    Route::get('shipping', 'ShippingDetailsController@index');

    // Material Route Grouping
    Route::group(array('prefix' => 'material'), function() {
        Route::get('list', 'MaterialDetailsController@index');
        Route::get('edit/{id}', 'MaterialDetailsController@edit');
        Route::put('update/{id}', 'MaterialDetailsController@update');
        Route::put('update/{id}', 'MaterialDetailsController@update');
        Route::get('create', 'MaterialDetailsController@create');
        Route::put('store', 'MaterialDetailsController@store');
        Route::get('delete/{id}', 'MaterialDetailsController@destroy');
    });

    // Products Route Grouping
    Route::group(array('prefix' => 'products'), function() {
        Route::get('list', 'ProductDetailsController@index');
        Route::get('edit/{id}', 'ProductDetailsController@edit');
        Route::put('update/{id}', 'ProductDetailsController@update');
        Route::get('create', 'ProductDetailsController@create');
        Route::put('store', 'ProductDetailsController@store');
        Route::get('delete/{id}', 'ProductDetailsController@destroy');
    });

    // Models Route Grouping
    Route::group(array('prefix' => 'models'), function() {
        Route::get('list', 'ModelDetailsController@index');
        Route::get('edit/{id}', 'ModelDetailsController@edit');
        Route::put('update/{id}', 'ModelDetailsController@update');
        Route::get('create', 'ModelDetailsController@create');
        Route::put('store', 'ModelDetailsController@store');
        Route::get('delete/{id}', 'ModelDetailsController@destroy');
    });

    // Wishlist Route Grouping
    Route::group(array('prefix' => 'wishlist'), function() {
        Route::get('list', 'WishlistsController@index');
        Route::get('delete/{id}', 'WishlistsController@delete');
    });

    // cart Route Grouping
    Route::group(array('prefix' => 'cart'), function() {
        Route::get('list', 'CartsController@index');
        Route::get('edit/{id}', 'CartsController@edit');
        Route::get('delete/{id}', 'CartsController@delete');
        Route::put('update/{id}', 'CartsController@update');
    });
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::resource('products', 'ProductController');
Route::resource('pharmacies', 'PharmacyController');

Route::view('/pharmacies/add/product', 'pharmacies.add_product');
Route::post('pharmacies/add/product', 'PharmacyController@addProduct')
    ->name('pharmacies.products.add');
Route::delete('pharmacies/remove/product', 'PharmacyController@removeProduct')
    ->name('pharmacies.products.remove');
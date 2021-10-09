<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::resource('products', 'ProductController');
Route::resource('pharmacies', 'PharmacyController');
Route::post('pharmacies/add/product', 'PharmacyController@addProduct');
Route::delete('pharmacies/remove/product', 'PharmacyController@removeProduct');
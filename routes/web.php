<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::resource('products', 'ProductController');
Route::resource('pharmacies', 'PharmacyController')->except(['show']);
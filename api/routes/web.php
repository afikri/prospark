<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('api/products', 'App\Http\Controllers\API\ProductController@getAllProducts');
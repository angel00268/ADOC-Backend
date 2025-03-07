<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('contact', 'App\Http\Controllers\ContactController@store');
    Route::get('products', 'App\Http\Controllers\ProductController@index');
});

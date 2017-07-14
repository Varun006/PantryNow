<?php

Route::prefix('admin')->group(function () {
    Route::resource('category','CategoryController');
    Route::resource('subCategory','SubCategoryController');
    Route::resource('variations','VariationsController');
    Route::resource('products','ProductController');
});

Route::get('/', function() {
   return view('welcome');
});

Route::post('posted','PostedController@store');
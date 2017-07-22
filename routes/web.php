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

Route::get('faq', function() {
    return view('faq');
});

Route::post('posted','PostedController@store');
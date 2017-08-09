<?php

Route::prefix('admin')->group(function () {
    Route::resource('category','CategoryController');
    Route::resource('subCategory','SubCategoryController');
    Route::resource('variations','VariationsController');
    Route::resource('products','ProductController');
    Route::post('product/delete/','ProductController@destroy');
    Route::post('category/delete/','CategoryController@destroy');
});

Route::get('/', function() {
   return view('welcome');
});

Route::get('faq', function() {
    return view('faq');
});

Route::get('categories', function(){
    return view('categories');
});

Route::get('cart', function(){
    return view('cart');
});

Route::get('checkout', function(){
    return view('checkout');
});

Route::post('posted','PostedController@store');

Route::get('search',function(){
    return view('search');
});
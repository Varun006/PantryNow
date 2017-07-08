<?php

Route::prefix('admin')->group(function () {
    Route::resource('category','CategoryController');
    Route::resource('subCategory','SubCategoryController');
    Route::resource('variations','VariationsController');
    Route::resource('products','ProductController');
});
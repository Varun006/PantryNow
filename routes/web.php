<?php
use Carbon\Carbon;

Route::prefix('admin')->group(function () {
    Route::resource('category', 'CategoryController');
    Route::resource('subCategory', 'SubCategoryController');
    Route::resource('variations', 'VariationsController');
    Route::resource('products', 'ProductController');
    Route::post('product/delete/', 'ProductController@destroy');
    Route::post('category/delete/', 'CategoryController@destroy');
    Route::get('instantOrders','OrderController@instantList');
    Route::get('scheduledOrders','OrderController@scheduledList');
    Route::get('order/details/{order_no}','OrderController@orderDetails');
    Route::get('order/complete/{order_no}','OrderController@complete');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('category/{category}', 'CategoryController@showProducts');

Route::get('cart', function () {
    return view('cart');
});

//Route::get('checkout', function () {
//    return view('checkout');
//});

Route::post('posted', 'PostedController@store');

Route::get('search', function () {
    return view('search');
});

Route::get('products/{product}', 'ProductController@single');

Route::post('checkIfItemInCart', 'CartController@check');

Route::post('addItemToCart', 'CartController@store');

Route::post('getCartItems', 'CartController@getCartItems');

Route::post('getAllProducts', 'FilterController@getAllProducts');

Route::post('filter', 'FilterController@filter');

Route::post('searchByKeyWord', 'FilterController@searchByKeyWord');

Route::post('updateQuantity', 'CartController@updateQuantity');

Route::post('getCartTotal', 'CartController@getCartTotal');

Route::post('removeItemFromCart', 'CartController@delete');

Route::post('validateCoupon', 'CouponController@validateCoupon');

Route::post('checkIfCouponApplied', 'CouponController@check');

Route::get('checkout', 'CheckOutController@checkout');

Route::post('setTime', 'ScheduleController@setTime');

Route::post('getScheduleTime', 'ScheduleController@getTime');

Route::post('placeOrder', 'OrderController@placeOrder');

Route::get('thankYou', 'ThankYouController@show');

Route::get('home', function () {
    return redirect('/');
});

Route::get('scheduled', function () {
// today at 8pm
    $today = Carbon::now()->startOfDay()->addHours(20);

// tomorrow 9am
    $tomorrow = Carbon::parse('tomorrow')->startOfDay()->addHours(9);

// Now
    $now = Carbon::now();

    if ($now->gte($today) && $now->lte($tomorrow)) {
        //now is between today/8pm and tomorrow/9am
        dd('here');
    }
});

Auth::routes();


Route::post('toLogin', function() {
    session(['redirect' => session('_previous')['url']]);

    return response()->json([
        'success' => true,
    ]);
});

Route::get('shipping','ShippingAddressController@show');

Route::post('updateShipping','ShippingAddressController@update');

Route::get('myOrders','OrderController@showOrders');

Route::get('index1',  function (){
   return view('index1');
});

Route::post('checkZip','ZipcodeController@check');

Route::get('about', function() {
   return view('about');
});

Route::get('searchHeader',function(){
    return view('searchHeader');
});

Route::get('invoice/{number}','InvoiceController@show');

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('pdf',function(){
//    $pdf = App::make('dompdf.wrapper');
//    $pdf->loadHTML('<h1>Test</h1>');
//    return $pdf->stream();
//});
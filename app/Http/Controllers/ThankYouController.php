<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankYouController extends Controller
{
    public function show()
    {
        request()->session()->forget('coupon');
        request()->session()->forget('couponCode');
        request()->session()->forget('schedule');
        request()->session()->forget('scheduleTime');

         if(session('success')){
             return view('thankYou');
         }
    }
}

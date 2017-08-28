<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    public function validateCoupon()
    {
        $couponApplied = request('coupon');

        $validity = !!Coupon::whereName($couponApplied)->count();

        if ($validity) {
            session(['couponCode' => $couponApplied, 'coupon' => true]);
        }

        return response()->json([
            'success' => $validity,
            'code' => session('couponCode' , '')
        ]);
    }

    public function check()
    {
      return response()->json([
            'isApplied' => session()->has('coupon'),
            'code' => session('couponCode' , '')
        ]);
    }
}

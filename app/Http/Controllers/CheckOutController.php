<?php

namespace App\Http\Controllers;

use App\ShippingAddress;

class CheckOutController extends Controller
{
    public function checkout()
    {
        $costBreakUp = CartController::shareCartTotal();

        $items = CartController::shareCartItems();

        $address = ShippingAddress::where('user_id', auth()->id())->first();

        return view('checkout', compact('costBreakUp', 'items', 'address'));
    }
}

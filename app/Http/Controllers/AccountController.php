<?php

namespace App\Http\Controllers;

use App\InstantOrder;
use App\ScheduledOrder;
use App\ShippingAddress;

class AccountController extends Controller
{
    public function show()
    {
        $address = ShippingAddress::where('user_id',auth()->id())->first();

        $instantOrders = InstantOrder::where('user_id', auth()->id())->get();

        $scheduledOrders = ScheduledOrder::where('user_id', auth()->id())->get();

        return view('account',compact('address','instantOrders','scheduledOrders'));
    }
}

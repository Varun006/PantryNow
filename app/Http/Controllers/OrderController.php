<?php

namespace App\Http\Controllers;

use App\Cart;
use App\InstantOrder;
use App\Order;
use App\Product;
use App\ScheduledOrder;
use App\ShippingAddress;
use App\ShippingOrder;
use App\User;

class OrderController extends Controller
{
    public $items = '';

    public $total = '';

    public function __construct()
    {
        $this->items = CartController::shareCartItems();

        $this->total = CartController::shareCartTotal();
    }

    public function placeOrder()
    {
        if (session('schedule')) {
            return $this->scheduleOrder();
        } else {
            return $this->instantOrder();
        }
    }

    protected function scheduleOrder()
    {
        $costBreakUp = CartController::shareCartTotal();

        $order_no = ScheduledOrder::create([
            'order_no' => time(),
            'coupon' => session('couponCode', 'none'),
            'discount' => $costBreakUp['discountReceived'],
            'total' => $costBreakUp['total'],
            'completed' => 'no',
            'delivery_time' => session('scheduleTime'),
            'user_id' => auth()->id()
        ])->order_no;

        return $this->storeToOrdersTable($order_no);
    }

    protected function instantOrder()
    {
        $costBreakUp = CartController::shareCartTotal();

        $order_no = InstantOrder::create([
            'order_no' => time(),
            'coupon' => session('couponCode', 'none'),
            'discount' => $costBreakUp['discountReceived'],
            'total' => $costBreakUp['total'],
            'completed' => 'no',
            'user_id' => auth()->id()
        ])->order_no;

        return $this->storeToOrdersTable($order_no);
    }

    protected function storeToOrdersTable($order_no)
    {
        $items = CartController::shareCartItems();

        $store = $items->each(function ($item) use ($order_no) {

            Order::create([
                'order_id' => $order_no,
                'item' => $item->id,
                'quantity' => $item->quantity,
                'price' => $item->price
            ]);

        });

        if ($store) {
            CartController::deleteCartItems();

            $shipping = ShippingAddress::where('user_id',auth()->id())->first();

            ShippingOrder::create([
                'order_no' => $order_no,
                'user_id' => auth()->id(),
                'building_details' => $shipping->building_details,
                'street' => $shipping->street,
                'city' => $shipping->city,
                'zip' => $shipping->zip,
                'landmark' => $shipping->landmark,
            ]);
        }

        return redirect('/thankYou')->with('success', true);
    }

    public function showOrders()
    {
        $instantOrders = InstantOrder::where('user_id', auth()->id())->get();

        $scheduledOrders = ScheduledOrder::where('user_id', auth()->id())->get();

        return view('myOrders', compact('instantOrders', 'scheduledOrders'));
    }

    public function instantList()
    {
        $orders = InstantOrder::all();

        return view('admin.instantOrders.orders', compact('orders'));
    }

    public function scheduledList()
    {
        $orders = ScheduledOrder::all();

        return view('admin.scheduledOrders.orders', compact('orders'));
    }

    public function orderDetails($order)
    {
        $items = Order::where('order_id', $order)->get()->each(function ($d) {
            $d->name = Product::where('id', $d->item)->value('name');
            $d->price = Product::where('id', $d->item)->value('price');
        });

        $type = $this->getOrderType($order);

        if ($type == 'InstantOrder') {
            $details = InstantOrder::where('order_no', $order)->first();
        } else {
            $details = ScheduledOrder::where('order_no', $order)->first();
        }

        $shipping = ShippingAddress::where('user_id',$details['user_id'])->first();

        $user = User::where('id',$details['user_id'])->value('name');

        return view('admin.orderDetails', compact('items', 'type', 'details','shipping','user'));
    }

    public function complete($order)
    {
        $type = $this->getOrderType($order);

        if ($type == 'InstantOrder') {
            InstantOrder::where('order_no', $order)->update(['completed' => 'yes']);
        } else {
            ScheduledOrder::where('order_no', $order)->update(['completed' => 'yes']);
        }

        return back()->with('success',true);
    }

    protected function getOrderType($order_no)
    {
        return InstantOrder::where('order_no', $order_no)->exists() ? 'InstantOrder' : 'ScheduledOrder';
    }
}

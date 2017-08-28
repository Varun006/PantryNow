<?php

namespace App\Http\Controllers;

use App\InstantOrder;
use App\Order;
use App\Product;
use App\ScheduledOrder;
use App\ShippingAddress;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\Snappy\Facades\SnappyPdf;

class InvoiceController extends Controller
{
    public function show($invoice)
    {
        $orderType = $this->getOrderType($invoice);

        $items = Order::where('order_id', $invoice)->get()->each(function ($d) {
            $d->name = Product::where('id', $d->item)->value('name');
            $d->price = Product::where('id', $d->item)->value('price');
        });

        $shipping = ShippingAddress::where('user_id', auth()->id())->first();

        $orderDetails = $this->getOrderDetails($invoice);

        $data = [
            'orderType' => $orderType,
            'shipping' => $shipping,
            'orderDetails' => $orderDetails,
            'items' => $items
        ];

//        dd($data);

        $pdf = PDF::loadView('test', array('data' => $data));
//        $pdf = SnappyPdf::loadView('invoice', array('data' => $data));

        return $pdf->stream();
    }

    protected function getOrderType($invoice)
    {
        return InstantOrder::where('order_no', $invoice)->exists() ? 'InstantOrder' : 'ScheduledOrder';
    }

    protected function getOrderDetails($invoice)
    {
        $type = $this->getOrderType($invoice);

        if ($type == 'InstantOrder') {
            return InstantOrder::where('order_no', $invoice)->first();
        } else {
            return ScheduledOrder::where('order_no', $invoice)->first();
        }
    }
}

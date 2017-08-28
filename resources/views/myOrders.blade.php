@extends('layouts.public.main')

@section('title')
    <title>My Orders</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>My Orders</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">My Orders</li>
            </ol>
        </div>
    </section>
@stop

@section('content')
    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <h4>Instant Orders</h4>
                @if($instantOrders->count() !== 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="center">Order No</th>
                                <th class="center">Coupon discount</th>
                                <th class="center">Total After discount</th>
                                <th class="center">Order Completed</th>
                                <th class="center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instantOrders as $order)
                                <tr>
                                    <td class="center">{{ $order->order_no }}</td>
                                    <td class="center">{{ $order->discount }}</td>
                                    <td class="center">{{ $order->total }}</td>
                                    <td class="center">{{ $order->completed }}</td>
                                    <td class="center"><a href="/invoice/{{$order->order_no}}"
                                                          class="button button-3d button-small button-rounded button-green">View
                                            bill</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive --><br><br>
                @else
                    <div class="style-msg infomsg">
                        <div class="sb-msg"><i class="icon-info-sign"></i><strong>Info!</strong> You have no instant
                            order placed!
                        </div>
                    </div>
                @endif

                <h4>Scheduled Orders</h4>
                @if($scheduledOrders->count() !== 0)

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="center">Order No</th>
                                <th class="center">Coupon discount</th>
                                <th class="center">Total After discount</th>
                                <th class="center">Order Completed</th>
                                <th class="center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($scheduledOrders as $order)
                                <tr>
                                    <td class="center">{{ $order->order_no }}</td>
                                    <td class="center">{{ $order->discount }}</td>
                                    <td class="center">{{ $order->total }}</td>
                                    <td class="center">{{ $order->completed }}</td>
                                    <td class="center"><a href="/invoice/{{$order->order_no}}"
                                                          class="button button-3d button-small button-rounded button-green">View
                                            bill</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                @else
                    <div class="style-msg infomsg">
                        <div class="sb-msg"><i class="icon-info-sign"></i><strong>Info!</strong> You have no scheduled
                            orders!
                        </div>
                    </div>
                @endif
            </div>

        </div>

    </section>
@stop
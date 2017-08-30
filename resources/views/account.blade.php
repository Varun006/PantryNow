@extends('layouts.public.main')

@section('title')
    <title>My Account</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>My Account</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </section>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="tabs side-tabs nobottommargin clearfix" id="tab-6">

                    <ul class="tab-nav tab-nav2 clearfix">
                        <li><a href="#tabs-22">Shipping Address</a></li>
                        <li><a href="#tabs-23">Instant Orders</a></li>
                        <li><a href="#tabs-24">Scheduled Orders</a></li>
                    </ul>

                    <div class="tab-container">
                        <div class="tab-content clearfix" id="tabs-22">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <form id="billing-form" name="billing-form" class="nobottommargin" action="/updateShipping"
                                          method="post">

                                        {{ csrf_field() }}

                                        <div class="col_full">
                                            <label for="billing-form-name">
                                                Name:
                                            </label>
                                            <input type="text" id="billing-form-name" name="name" value="{{ auth()->user()->name }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="col_full">
                                            <label for="billing-form-address">Address:</label>
                                            <input type="text" id="billing-form-address" name="building_details"
                                                   value="{{ $address->building_details }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="col_half">
                                            <label for="billing-form-email">Street</label>
                                            <input type="text" id="street" name="street"
                                                   value="{{ $address->street }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="col_half col_last">
                                            <label for="billing-form-email">Zip Code</label>
                                            <input type="text" id="street" name="zip"
                                                   value="{{ $address->zip }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="col_full">
                                            <label for="billing-form-address">Landmark:</label>
                                            <input type="text" id="billing-form-address2" name="landmark"
                                                   value="{{ $address->landmark }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="col_full">
                                            <label for="billing-form-city">City / Town</label>
                                            <input type="text" id="billing-form-city" name="city"
                                                   value="{{ $address->city }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="col_half">
                                            <label for="billing-form-email">
                                                Email Address:
                                            </label>
                                            <input type="email" id="billing-form-email" name="email"
                                                   value="{{ auth()->user()->email }}"
                                                   class="sm-form-control"
                                                   data-toggle="tooltip"
                                                   title="Email address cannot be edited! Create a new account if you wish to use alternate email address."
                                                   readonly/>
                                        </div>

                                        <div class="col_half col_last">
                                            <label for="billing-form-phone">Phone:</label>
                                            <input type="text" id="billing-form-phone" name="phone"
                                                   value="{{ $address->phone }}"
                                                   class="sm-form-control"/>
                                        </div>

                                        <div class="col_full">
                                            <button style="widows: 100%;" name="submit" type="submit" id="submit-button"
                                                    tabindex="5" value="Submit" class="button btn-lg button-3d nomargin">Update
                                                Address
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="tab-content clearfix" id="tabs-23">
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
                        </div>
                        <div class="tab-content clearfix" id="tabs-24">
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

                </div>
            </div>
        </div>
    </section>
@stop
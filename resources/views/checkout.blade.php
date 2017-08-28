@extends('layouts.public.main')

@section('title')
    <title>Checkout</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Checkout</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Checkout</li>
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

                <div class="style-msg infomsg">
                    <div class="sb-msg"><i class="icon-info-sign"></i><strong>Heads up!</strong> Want it to get delivered at a different address? Click 
                        <a style="cursor:pointer;" href="/shipping">here</a>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6">
                        <h3>Shipping Address</h3>

                        <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">

                            <div class="col_full">
                                <label for="billing-form-name">Name:</label>
                                <input type="text" id="billing-form-name" name="billing-form-name" value="{{ auth()->user()->name }}"
                                       class="sm-form-control" readonly/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="billing-form-address">Address:</label>
                                <input type="text" id="billing-form-address" name="billing-form-address"
                                       value="{{ $address->building_details }}"
                                       class="sm-form-control" readonly/>
                            </div>

                            <div class="col_full">
                                <label for="billing-form-address">Landmark:</label>
                                <input type="text" id="billing-form-address2" name="billing-form-adress"
                                       value="{{ $address->landmark }}"
                                       class="sm-form-control" readonly/>
                            </div>

                            <div class="col_full">
                                <label for="billing-form-city">City / Town</label>
                                <input type="text" id="billing-form-city" name="billing-form-city"
                                       value="{{ $address->city }}"
                                       class="sm-form-control" readonly/>
                            </div>

                            <div class="col_half">
                                <label for="billing-form-email">Email Address:</label>
                                <input type="email" id="billing-form-email" name="billing-form-email"
                                       value="{{ auth()->user()->email }}"
                                       class="sm-form-control" readonly/>
                            </div>

                            <div class="col_half col_last">
                                <label for="billing-form-phone">Phone:</label>
                                <input type="text" id="billing-form-phone" name="billing-form-phone"
                                       value="{{ $address->phone }}"
                                       class="sm-form-control" readonly/>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h3>Checkout</h3>
                        <div class="accordion accordion-border clearfix nobottommargin">
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                        class="acc-open icon-remove-circle"></i>Order Details
                            </div>
                            <div class="acc_content clearfix">
                                <div class="table-responsive clearfix">
                                    <table class="table cart">
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="notopborder cart-product-name">
                                                <strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="notopborder cart-product-name">
                                                <span class="amount">{{ $costBreakUp['subTotal'] }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <strong>Shipping</strong>
                                            </td>
                                            <td class="cart-product-name">
                                                <span class="amount">{{ $costBreakUp['shipping'] }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <strong>Coupon Discount Received</strong>
                                            </td>
                                            <td class="cart-product-name">
                                                <span class="amount">{{ $costBreakUp['discountReceived'] }}</span>
                                            </td>
                                        </tr>
                                        @if(session('schedule'))
                                            <tr class="cart_item">
                                                <td class="cart-product-name">
                                                    <strong>Delivery Scheduled between</strong>
                                                </td>
                                                <td class="cart-product-name">
                                                    <span class="amount color lead"> {{ session('scheduleTime') }}
                                                        <a href="#" @click.prevent="reschedule">(Change Time)</a>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <strong>Total Payable</strong>
                                            </td>
                                            <td class="cart-product-name">
                                                <span class="amount color lead">RS. {{ $costBreakUp['total'] }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="notopborder cart-product-name">
                                            </td>
                                            <td class="notopborder cart-product-name">
                                                <a href="/cart" class="button button-3d fright" style="color: white;">Update
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                        class="acc-open icon-remove-circle"></i>Place Order
                            </div>
                            <div class="acc_content clearfix">
                                <form action="/placeOrder" method="post">
                                    {{ csrf_field() }}
                                    <div class="col_half nobottommargin">
                                        <input id="radio-10" class="radio-style" name="radio-group-3" type="radio"
                                               checked="">
                                        <label for="radio-10" class="radio-style-3-label">Pay Using CCAvenue</label>
                                    </div>

                                    <div class="col_half">
                                        <input id="radio-10" class="radio-style" name="radio-group-3" type="radio"
                                               checked="">
                                        <label for="radio-10" class="radio-style-3-label">COD</label>
                                    </div>
                                    <button class="button button-3d fright" type="submit">
                                        Place Order
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clear bottommargin"></div>
                </div>
                <modal-box></modal-box>
            </div>

        </div>

    </section><!-- #content end -->

@stop


@if(session()->has('success'))
@section('extra-js')
    <script type="text/javascript">
        $(document).ready(function () {
            toastr["success"]("Shipping address updated.");
        });
    </script>
@stop
@endif
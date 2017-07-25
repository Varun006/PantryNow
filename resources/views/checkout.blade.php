@extends('layouts.public.main')

@section('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
@stop

@section('title')
    <title>Checkout</title>
@stop

@section('content')
    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-md-6">
                        <h3>Shipping Address</h3>

                        <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">

                            <div class="col_half">
                                <label for="billing-form-name">Name:</label>
                                <input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="billing-form-lname">Last Name:</label>
                                <input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="billing-form-address">Address:</label>
                                <input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-city">City / Town</label>
                                <input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
                            </div>

                            <div class="col_half">
                                <label for="billing-form-email">Email Address:</label>
                                <input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="billing-form-phone">Phone:</label>
                                <input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="shipping-form-message">Notes <small>*</small></label>
                                <textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="6" cols="30"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Checkout</h3>
                        <div class="accordion accordion-border clearfix nobottommargin">
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Order Items</div>
                            <div class="acc_content clearfix">
                                <div class="table-responsive clearfix">
                                    <table class="table cart">
                                        <thead>
                                        <tr>
                                            <th class="cart-product-thumbnail">&nbsp;</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-quantity">Quantity</th>
                                            <th class="cart-product-subtotal">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-thumbnail">
                                                <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress"></a>
                                            </td>

                                            <td class="cart-product-name">
                                                <a href="#">Pink Printed Dress</a>
                                            </td>

                                            <td class="cart-product-quantity">
                                                <div class="quantity clearfix">
                                                    1x2
                                                </div>
                                            </td>

                                            <td class="cart-product-subtotal">
                                                <span class="amount">$39.98</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-thumbnail">
                                                <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes"></a>
                                            </td>

                                            <td class="cart-product-name">
                                                <a href="#">Checked Canvas Shoes</a>
                                            </td>

                                            <td class="cart-product-quantity">
                                                <div class="quantity clearfix">
                                                    1x1
                                                </div>
                                            </td>

                                            <td class="cart-product-subtotal">
                                                <span class="amount">$24.99</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-thumbnail">
                                                <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/tshirt-2.jpg" alt="Pink Printed Dress"></a>
                                            </td>

                                            <td class="cart-product-name">
                                                <a href="#">Blue Men Tshirt</a>
                                            </td>

                                            <td class="cart-product-quantity">
                                                <div class="quantity clearfix">
                                                    1x3
                                                </div>
                                            </td>

                                            <td class="cart-product-subtotal">
                                                <span class="amount">$41.97</span>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Place Order</div>
                            <div class="acc_content clearfix">
                                <form>
                                    <div class="col_half nobottommargin">
                                        <input id="radio-10" class="radio-style" name="radio-group-3" type="radio" checked="">
                                        <label for="radio-10" class="radio-style-3-label">Pay Using CCAvenue</label>
                                    </div>

                                    <div class="col_half">
                                        <input id="radio-10" class="radio-style" name="radio-group-3" type="radio" checked="">
                                        <label for="radio-10" class="radio-style-3-label">COD</label>
                                    </div>
                                    <a href="#" class="button button-3d fright">Place Order</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clear bottommargin"></div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@stop
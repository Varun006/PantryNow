@extends('layouts.public.main')

@section('title')
    <title>Shipping Address</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Edit Shipping Address</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Shipping</li>
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
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h3>Shipping Address</h3>

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
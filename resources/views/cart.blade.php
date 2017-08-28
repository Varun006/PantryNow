@extends('layouts.public.main')

@section('extra-css')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>--}}
@stop

@section('title')
    <title>Your Cart</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Cart</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </section>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive bottommargin">
                    <cart-table></cart-table>
                </div>

                <div class="row clearfix">
                    <div class="col-md-12 clearfix">
                        <div class="table-responsive">
                            <h4>Cart Totals</h4>
                            <cart-totals></cart-totals>
                        </div>
                    </div>
                </div>
                <modal-box></modal-box>
            </div>
        </div>
    </section>
@stop
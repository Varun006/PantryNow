@extends('layouts.admin.main')

@section('page-level-css')
    <link href="{{@asset('admin/assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Order no : <span class="text-primary">{{$details['order_no']}}</span>
                            </h4>
                            <h4>Order Placed on: {{$details->created_at->toFormattedDateString()}}</h4>
                            <h4>Order Type:<span class="text-primary">{{$type}}</span></h4>
                            @if($type == 'ScheduledOrder')
                                <h4>Delivery Time:<span class="text-primary">{{$details['delivery_time']}}</span></h4>
                            @endif
                            <h4>Order Completed: <span class="text-primary">{{$details['completed']}}</span></h4>
                            <h4>Coupon Applied: <span class="text-primary">{{$details['coupon']}}</span></h4>
                            <h4>Discount: <span class="text-primary">{{$details['discount']}}</span></h4>
                            <h4>Total Receivable: <span class="text-primary">{{$details['total']}} INR</span></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @if($details['completed'] == 'no')
                                <a href="/admin/order/complete/{{$details['order_no']}}">
                                    <button type="button" class="btn btn-success w-md m-b-5">Mark Order as complete
                                    </button>
                                </a>
                            @else
                                <p class="text-success">Order is completed!</p>
                            @endif

                            @if($details['completed'] == 'no')
                                <div class="peragraph_ex">
                                    <h4>Delivery Address</h4>
                                    <p>
                                        {{ $user }} ({{$shipping['phone']}})<br><br>
                                        {{$shipping['building_details']}},<br>
                                        {{$shipping['street']}},<br>
                                        {{$shipping['landmark']}},<br>
                                        {{$shipping['zip']}}<br>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('page-level-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
@stop

@section('page-level-js')
    <script>
        $(function () {
            @if(session('success'))
                swal('success', 'Order Marked as complete', 'success');
            @endif
        });
    </script>
@stop

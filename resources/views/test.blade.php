<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>
<body>
<h3>Item details</h3>
<table>
    <tr>
        <th>Item</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Item Total</th>
    </tr>
    @foreach($data['items'] as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price * $item->quantity }}</td>
        </tr>
    @endforeach
</table><br><br>

<h3>Bill Details</h3>
<table style="width:100%">
    <tr>
        <th>Order Number:</th>
        <td>{{ $data['orderDetails']['order_no']}}</td>
    </tr>
    <tr>
        <th>Order Type:</th>
        <td>{{ $data['orderType']}}</td>
    </tr>
    <tr>
        <th>Coupon Applied:</th>
        <td>{{ $data['orderDetails']['coupon'] }}</td>
    </tr>
    <tr>
        <th>Coupon Discount Received:</th>
        <td>{{ $data['orderDetails']['discount'] }} INR</td>
    </tr>
    <tr>
        <th>Shipping:</th>
        <td>{{ $data['orderDetails']['total'] > 200 ? '0' : '20'}} INR</td>
    </tr>
    <tr>
        <th>Bill amount after discount</th>
        <td>{{ $data['orderDetails']['total'] }} INR</td>
    </tr>
</table><br><br>

<h3>Order Shipped At</h3>
<address>
    {{$data['shipping']->building_details}},<br>
    {{$data['shipping']->street}},<br>
    {{$data['shipping']->landmark}},<br>
    {{$data['shipping']->city}},<br>
    {{$data['shipping']->zip}}<br>
</address>
</body>
</html>

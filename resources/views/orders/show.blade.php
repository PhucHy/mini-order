<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Order Detail</h1>
    <table>
    <tr><th>ID</th><td>{{ $order->id }}</td></tr>
    <tr><th>Customer ID</th><td>{{ $order->customer_id }}</td></tr>
    <tr><th>Total Amount</th><td>{{ $order->total_amount }}</td></tr>
    <tr><th>Status</th><td>{{ $order->status }}</td></tr>
    <tr><th>Order Date</th><td>{{ $order->order_date }}</td></tr>
</table>
<h4>Order Items</h4>
<table>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    @foreach($order->items as $item)
        <tr>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
        </tr>
    @endforeach
</table>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders List</a>
</div>
</body>
</html>
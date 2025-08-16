<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Orders</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order Name</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- Example row --}}
                <tr>
                    <td>1</td>
                    <td>Sample Order</td>
                    <td>John Doe</td>
                    <td>2024-06-01</td>
                    <td>Pending</td>
                </tr>
                {{-- @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->customer }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</body>
</html>
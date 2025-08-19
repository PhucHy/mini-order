<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="number" class="form-control" id="customer_id" name="customer_id" required>
        </div>
        <div class="mb-3">
            <label for="order_date" class="form-label">Order Date</label>
            <input type="date" class="form-control" id="order_date" name="order_date" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="pending" selected>Pending</option>
                <option value="paid">Paid</option>
                <option value="shipped">Shipped</option>
            </select>
        </div>
        <h4>Order Items</h4>
        <div id="items">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" class="form-control" name="items[0][product_name]" placeholder="Product Name" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="items[0][quantity]" placeholder="Quantity" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="items[0][price]" placeholder="Price" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
</div>
</body>
</html>
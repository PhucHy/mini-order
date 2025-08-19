<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Customer Detail</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <td>{{ $customer->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $customer->created_at }}</td>
        </tr>
    </table>
    <a href="{{ route('customers.index') }}">Back to Customers List</a>
</body>
</html>

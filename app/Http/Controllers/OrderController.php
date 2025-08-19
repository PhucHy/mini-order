<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(StoreOrderRequest $request)
    {
        // Tính tổng tiền từ các item
        $total = collect($request->items)->sum(function ($item) {
            return $item['quantity'] * $item['price'];
        });

        // Tạo đơn hàng
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'order_date' => $request->order_date,
            'total_amount' => $total,
            'status' => $request->status ?? 'pending',
        ]);

        // Lưu các item
        foreach ($request->items as $item) {
            $order->items()->create($item); // Nếu quan hệ là items thì sửa lại tên hàm trong model
        }

        // Nếu có upload invoices thì xử lý ở đây (tùy yêu cầu)

        return redirect()->route('orders.show', $order->id)->with('success', 'Order created successfully.');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }  
}

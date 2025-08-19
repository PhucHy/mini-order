<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function index() {
        return response()->json([
            ['id'=>1,'customer_id'=>1,'total_amount'=>1000,'status'=>'pending']
        ]);
    }

    public function show($id) {
        return response()->json([
            'id'=>$id, 'customer_id'=>1, 'total_amount'=>1000, 'status'=>'pending',
            'items'=>[['product_name'=>'Sample','quantity'=>2,'price'=>500]]
        ]);
    }

    public function store(Request $request) {
        return response()->json(['message'=>'Order created (fake)']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;

class CustomerApiController extends Controller
{
    public function index() {
        return CustomerResource::collection([
            (object)['id'=>1,'name'=>'Test','email'=>'t@test.com','phone'=>'1111']
        ]);
    }

    public function store(Request $request) {
        return new CustomerResource((object)[
            'id'=>2,'name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone
        ]);
    }

    public function update(Request $request, $id) {
        return response()->json(['message'=>'Customer updated (fake)', 'id'=>$id]);
    }

    public function destroy($id) {
        return response()->json(['message'=>'Customer deleted (fake)', 'id'=>$id]);
    }
}

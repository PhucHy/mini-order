<?php

use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\OrderApiController;

Route::middleware('auth:sanctum')->group(function(){
  Route::apiResource('customers', CustomerApiController::class);
  
  Route::get('orders', [OrderApiController::class,'index']);
  Route::get('orders/{order}', [OrderApiController::class,'show']);
  Route::post('orders', [OrderApiController::class,'store']);
});

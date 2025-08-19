<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware(['auth'])->group(function(){

  // Customers
  Route::get('/customers', [CustomerController::class,'index'])->name('customers.index');
  Route::get('/customers/create', [CustomerController::class,'create'])->middleware('role:Admin|Staff')->name('customers.create');
  Route::post('/customers', [CustomerController::class,'store'])->middleware('role:Admin|Staff')->name('customers.store');
  Route::get('/customers/{customer}', [CustomerController::class,'show'])->name('customers.show');

  // Admin
  Route::middleware('role:Admin')->group(function(){
    Route::get('/customers/{customer}/edit', [CustomerController::class,'edit'])->name('customers.edit');
    Route::put('/customers/{customer}', [CustomerController::class,'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomerController::class,'destroy'])->name('customers.destroy');
  });

  // Orders
  Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
  Route::get('/orders/create', [OrderController::class,'create'])->name('orders.create');
  Route::post('/orders', [OrderController::class,'store'])->name('orders.store');
  Route::get('/orders/{order}', [OrderController::class,'show'])->name('orders.show');
});

require __DIR__.'/auth.php';

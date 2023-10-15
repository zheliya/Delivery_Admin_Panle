<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function (){
    return view("dashboard.dashboard");
});
Route::get('/orders', function (){
    return view("orders.orders");
});
Route::get('/zone_price', function (){
    return view("zonePrice.zonePrice");
});
Route::get('/delivery_type', function (){
    return view("deliveryType.deliveryType");
});
Route::get('/employees', function (){
    return view("employees.employees");
});
Route::get('/finance', function (){
    return view("finance.finance");
});

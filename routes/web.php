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


Route::get('/dashbord', function (){
    return view("dashboard.dashboard");
});
Route::get('/orders', function (){
    return view("dashboard.dashboard");
});
Route::get('/zone_price', function (){
    return view("dashboard.dashboard");
});
Route::get('/delivery_type', function (){
    return view("dashboard.dashboard");
});
Route::get('/empolyees', function (){
    return view("dashboard.dashboard");
});
Route::get('/finance', function (){
    return view("dashboard.dashboard");
});

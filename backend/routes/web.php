<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Lib\Ec\Domain\Order\Order;
Route::get('/', function () {
    // failed to open stream: No such file or directory が出る場合は make cache
    return (new Order('test'))->orderId();
    return view('welcome');
});

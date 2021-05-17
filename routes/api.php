<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('customers')->group(function () {
    Route::get('/customers', [CustomersController::class, 'index']);
});

Route::prefix('goods')->group(function () {
    Route::get('/goods', [GoodsController::class, 'index']);
});

Route::prefix('orders')->group(function () {
    Route::get('/orders', [OrdersController::class, 'index']);
});

Route::prefix('payments')->group(function () {
    Route::get('/payments', [PaymentsController::class, 'index']);
}); 
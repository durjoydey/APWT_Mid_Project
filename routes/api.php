<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DmanController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\MyorderController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/list',[DmanController::class,'APIList']);
Route::post('/user/create',[DmanController::class,'APIPost']);
Route::get('/deliverycon/list',[DeliveryController::class,'APIList']);
Route::post('/deliverycon/create',[DeliveryController::class,'APIPost']);
Route::get('/product/list',[ProductController::class,'APIList']);
Route::post('/product/create',[ProductController::class,'APIPost']);
Route::get('/orderdetail/list',[OrderdetailController::class,'APIList']);
Route::post('/orderdetail/create',[OrderdetailController::class,'APIPost']);
Route::get('/myorder/list',[MyorderController::class,'APIList']);
Route::post('/myorder/create',[MyorderController::class,'APIPost']);

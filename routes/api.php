<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DmanControllerAPI;
use App\Http\Controllers\DeliveryControllerAPI;
use App\Http\Controllers\ProductControllerAPI;
use App\Http\Controllers\OrderdetailControllerAPI;
use App\Http\Controllers\MyorderControllerAPI;
use App\Http\Controllers\LoginControllerAPI;

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
Route::get('/user/list',[DmanControllerAPI::class,'APIList'])->middleware('APIAuth');
Route::post('/user/create',[DmanControllerAPI::class,'APIPost']);

Route::get('/deliverycon/list',[DeliveryControllerAPI::class,'APIList'])->middleware('APIAuth');
Route::post('/deliverycon/create',[DeliveryControllerAPI::class,'APIPost']);

Route::get('/product/list',[ProductControllerAPI::class,'APIList'])->middleware('APIAuth');
Route::post('/product/create',[ProductControllerAPI::class,'APIPost']);

Route::get('/orderdetail/list',[OrderdetailControllerAPI::class,'APIList'])->middleware('APIAuth');
Route::post('/orderdetail/create',[OrderdetailControllerAPI::class,'APIPost']);

Route::get('/myorder/list',[MyorderControllerAPI::class,'APIList'])->middleware('APIAuth');
Route::post('/myorder/create',[MyorderControllerAPI::class,'APIPost']);

Route::get('/editorder/{id}',[MyorderControllerAPI::class,'edit']);
Route::post('/updateorder/{id}',[MyorderControllerAPI::class,'update']);


Route::post('/login',[LoginControllerAPI::class,'login']);

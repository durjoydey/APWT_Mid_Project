<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DmanController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyorderController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PagesController::class,'home'])->name('home');



//deliveryman routes
Route::get('/user/create',[DmanController::class,'create'])->name('user.create');
Route::post('/user/create',[DmanController::class,'createSubmit'])->name('user.create');
Route::get('/user/list',[DmanController::class,'list'])->name('user.list');
Route::get('/user/edit/{id}/{name}',[DmanController::class,'edit']);
Route::post('/user/edit',[DmanController::class,'editSubmit'])->name('user.edit');
Route::get('/user/delete/{id}/{name}',[DmanController::class,'delete']);

//delivery routes
Route::get('/deliverycon/create',[DeliveryController::class,'create'])->name('deliverycon.create');
Route::post('/deliverycon/create',[DeliveryController::class,'createSubmit'])->name('deliverycon.create');
Route::get('/deliverycon/list',[DeliveryController::class,'list'])->name('deliverycon.list');
Route::get('/deliverycon/edit/{id}/{name}',[DeliveryController::class,'edit']);
Route::post('/deliverycon/edit',[DeliveryController::class,'editSubmit'])->name('deliverycon.edit');
Route::get('/deliverycon/delete/{id}/{name}',[DeliveryController::class,'delete']);

//product routes
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('product.create');
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/edit/{id}/{name}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('product.edit');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);

//order routes
Route::get('/myorder/create',[MyorderController::class,'create'])->name('myorder.create');
Route::post('/myorder/create',[MyorderController::class,'createSubmit'])->name('myorder.create');
Route::get('/myorder/list',[MyorderController::class,'list'])->name('myorder.list');
Route::get('/myorder/edit/{id}/{name}',[MyorderController::class,'edit']);
Route::post('/myorder/edit',[MyorderController::class,'editSubmit'])->name('myorder.edit');
Route::get('/myorder/delete/{id}/{name}',[MyorderController::class,'delete']);

//orderdetail routes
Route::get('/orderdetail/create',[OrderdetailController::class,'create'])->name('orderdetail.create');
Route::post('/orderdetail/create',[OrderdetailController::class,'createSubmit'])->name('orderdetail.create');
Route::get('/orderdetail/list',[OrderdetailController::class,'list'])->name('orderdetail.list');
Route::get('/orderdetail/edit/{id}/{name}',[OrderdetailController::class,'edit']);
Route::post('/orderdetail/edit',[OrderdetailController::class,'editSubmit'])->name('orderdetail.edit');
Route::get('/orderdetail/delete/{id}/{name}',[OrderdetailController::class,'delete']);


//Login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//Userdash
Route::get('/user/dash', [PagesController::class,'userdash'])->name('userdash')->middleware('ValidUser');


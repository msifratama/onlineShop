<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/products', [ProductController::class, 'index'])->name('product-index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product-store');
Route::get('/product/edit{id}', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product-update');
Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product-delete');

Route::get('/costumers', [CostumerController::class, 'index'])->name('costumer-index');
Route::get('/costumers/create', [CostumerController::class, 'create'])->name('costumer-create');
Route::post('/costumers/store', [CostumerController::class, 'store'])->name('costumer-store');
Route::get('/costumers/edit/{id}', [CostumerController::class, 'edit'])->name('costumer-edit');
Route::put('/costumers/update/{id}', [CostumerController::class, 'update'])->name('costumer-update');
Route::delete('/costumers/delete/{id}', [CostumerController::class, 'delete'])->name('costumer-delete');

Route::get('/reports', [ReportController::class, 'index'])->name('report-index');

Route::get('/orders', [OrderController::class, 'index'])->name('order-index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('order-create');
Route::post('/orders/store', [OrderController::class, 'store'])->name('order-store');
Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])->name('order-edit');
Route::put('/orders/update{id}', [OrderController::class, 'update'])->name('order-update');
Route::delete('/orders/delete{id}', [OrderController::class, 'delete'])->name('order-delete');

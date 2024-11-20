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

Route::get('/costumers', [CostumerController::class, 'index'])->name('costumer-index');

Route::get('/reports', [ReportController::class, 'index'])->name('report-index');

Route::get('/orders', [OrderController::class, 'index'])->name('order-index');

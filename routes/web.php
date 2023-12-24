<?php

use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Order\AdminOrderController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Customer\AdminCustomerController;
use App\Http\Controllers\Admin\Sales\AdminSalesController;
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

Route::prefix("admin")->group(function () {

    //admin-dashboard


    Route::get("/", [AdminDashboardController::class, "index"])->name("admin.dashboard");

    //admin-user
    Route::prefix('user')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.user.index');
        Route::delete('/destroy/{user}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy');
    });

    //admin-order
    Route::prefix('order')->group(function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('admin.order.index');
        Route::delete('/destroy/{order}', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');
        Route::get('/change-status/{order}', [AdminOrderController::class, 'changeStatus'])->name('admin.order.changeStatus');
    });

    //admin-product
    Route::prefix('product')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [AdminProductController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{product}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/update/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/destroy/{product}', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');
        Route::get('/change/{product}', [AdminProductController::class, 'change'])->name('admin.product.change');
    });

    //admin-customer
    Route::prefix('customer')->group(function () {
        Route::get('/', [AdminCustomerController::class, 'index'])->name('admin.customer.index');
        Route::get('/create', [AdminCustomerController::class, 'create'])->name('admin.customer.create');
        Route::post('/store', [AdminCustomerController::class, 'store'])->name('admin.customer.store');
        Route::get('/edit/{customer}', [AdminCustomerController::class, 'edit'])->name('admin.customer.edit');
        Route::put('/update/{customer}', [AdminCustomerController::class, 'update'])->name('admin.customer.update');
        Route::delete('/destroy/{customer}', [AdminCustomerController::class, 'destroy'])->name('admin.customer.destroy');
    });


    //admin-sales
    Route::prefix('sales')->group(function () {
        Route::get('/', [AdminSalesController::class, 'index'])->name('admin.sales.index');
        Route::get('/create', [AdminSalesController::class, 'create'])->name('admin.sales.create');
        Route::post('/store', [AdminSalesController::class, 'store'])->name('admin.sales.store');
        Route::get('/edit/{sales}', [AdminSalesController::class, 'edit'])->name('admin.sales.edit');
        Route::put('/update/{sales}', [AdminSalesController::class, 'update'])->name('admin.sales.update');
        Route::delete('/destroy/{sales}', [AdminSalesController::class, 'destroy'])->name('admin.sales.destroy');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Order\AdminOrderController;
use App\Http\Controllers\Admin\Product\AdminProductController;
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

Route::prefix("admin")->group(function (){

    //admin-dashboard
    Route::get("/",[AdminDashboardController::class,"index"])->name("admin.dashboard");

    //admin-user
    Route::prefix('user')->group(function(){
        Route::get('/' , [AdminUserController::class , 'index'])->name('admin.user.index');
        Route::delete('/destroy/{user}' , [AdminUserController::class , 'destroy'])->name('admin.user.destroy');
    });


     //admin-order
    Route::prefix('order')->group(function (){
        Route::get('/' , [AdminOrderController::class , 'index'])->name('admin.order.index');
        Route::delete('/destroy/{order}' , [AdminOrderController::class , 'destroy'])->name('admin.order.destroy');
        Route::get('/change-status/{order}', [AdminOrderController::class , 'changeStatus'])->name('admin.order.changeStatus');
    });


    //admin-product
    Route::prefix('product')->group(function (){
        Route::get('/' , [AdminProductController::class , 'index'])->name('admin.product.index');
        Route::get('/create' , [AdminProductController::class , 'create'])->name('admin.product.create');
        Route::post('/store' , [AdminProductController::class , 'store'])->name('admin.product.store');
        Route::get('/edit/{product}' , [AdminProductController::class , 'edit'])->name('admin.product.edit');
        Route::put('/update/{product}' , [AdminProductController::class , 'update'])->name('admin.product.update');
        Route::delete('/destroy/{product}' , [AdminProductController::class , 'destroy'])->name('admin.product.destroy');
        Route::get('/change/{product}' , [AdminProductController::class , 'change'])->name('admin.product.change');
    });


});

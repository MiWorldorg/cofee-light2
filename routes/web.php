<?php

use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Order\AdminOrderController;
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


});

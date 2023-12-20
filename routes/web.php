<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\userController;

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
    //Route::get("/",[AdminDashboardController::class,"index"]);

    //admin-user
    Route::prefix('user')->group(function(){
        Route::get('/' , [userController::class , 'index'])->name('admin.category.index');
        Route::delete('/destroy/{user}' , [userController::class , 'destroy'])->name('admin.user.destroy');

    });


});

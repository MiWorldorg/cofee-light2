<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOurController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register auth routes for your application.
|
|
|
*/



Route::prefix("auth")->group( function (){

    Route::get("loginForm",[LoginController::class,"ShowForm"])->name("loginForm");
    Route::post("login",[LoginController::class,"login"])->name("login");



    Route::get("logOut",[LogOurController::class,"logOut"])->name("logOut");
});

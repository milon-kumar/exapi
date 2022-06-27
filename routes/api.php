<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/v1/register",[AuthController::class,'register'])->name('register');

Route::post('/v1/verification',[AuthController::class,'verification'])->name('verification');

Route::post("/v1/login",[AuthController::class,'login'])->name('login');

Route::group(['middleware'=>'auth:api'],function (){
    Route::get("/v1/users",[AuthController::class,'users'])->name('users');
});


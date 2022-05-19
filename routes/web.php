<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\DB;

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


Route::get("/",[UsersController::class,'showLoginPage']);
Route::post('login', [UsersController::class,'checkLogin']);

Route::get("/dashboard",function (){
    return view("dashboard");
});




Route::get('/create',function (){
    return view('create');
});

//Route::post("create",[UsersController::class,'newData']);
Route::post('save',[UsersController::class,'newData']);



Route::get("show",[UsersController::class,'syntax']);


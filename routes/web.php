<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'login']);
Route::post('/',[AuthController::class,'auth_login']);


Route::group(['middleware'=>'adminuser'],function(){
    Route::get('admin/dahboard',[DashboardController::class,'dashboard']);
    Route::get('role',[RoleController::class,'list1']);
    Route::get('add',[RoleController::class,'add']);
    Route::post('role/add',[RoleController::class,'insert']);
    Route::get('role/delete/{id}',[RoleController::class,'delete']);
    Route::get('role/edit/{id}',[RoleController::class,'edit']);
    Route::post('role/update/{id}',[RoleController::class,'update']);
    Route::get('user',[DashboardController::class,'userview']);
    Route::get('category',[UserController::class,'category']);
});

Route::get('logout',[AuthController::class,'logout'])->name('logout');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;




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

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
=======
    Route::get('/', function () {
        return view('index');
    });  
    

    
Route::get('/user', [UserController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/register', [HomeController::class, 'register']);
Route::get('/login', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);


>>>>>>> edfa13072f4159bbe4372570fad9c8279e769c68

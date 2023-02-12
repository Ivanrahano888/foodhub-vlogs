<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExploreController;

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


    Route::get('/', function () {
        return view('index');
    });  
    
Route::get('/guest', [GuestController::class, 'index']);
Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);


Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);





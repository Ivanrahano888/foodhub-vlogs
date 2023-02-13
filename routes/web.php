<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VloggerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FileUploadController;

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
    
Route::get('/vlogger', [VloggerController::class, 'vlogger']);
Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'home']);


Route::get('/explore', [ExploreController::class, 'explore']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('video-upload', [FileUploadController::class, 'getVideoUploadForm'])->name('get.video.upload');
Route::post('video-upload', [FileUploadController::class, 'uploadVideo'])->name('store.video');
Route::get('play-video', [FileUploadController::class, 'play-video'])->name('play.video');


Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ImageUploadController;


    Route::get('/', function () {
        return view('index');
    });  

Route::get('/home', [HomeController::class, 'home']);
Route::get('/login', [CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/userdashboard',[CustomAuthController::class,'userdashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('video-upload', [ FileUploadController::class, 'video' ])->name('get.video.upload');
Route::post('video-upload', [ FileUploadController::class, 'uploadVideo' ])->name('store.video');
Route::get('image-upload', [ ImageUploadController::class, 'imageupload' ])->name('get.imageupload');
Route::post('image-upload', [ ImageUploadController::class, 'store' ])->name('store.image');




//Route::get('/admin', [AdminController::class, 'admin']);
//Route::get('/register', [RegisterController::class, 'index']);
//Route::get('/login', [LoginController::class, 'index']);
//Route::get('/explore', [ExploreController::class, 'index']);
//Route::get('/about', [AboutController::class, 'index']);





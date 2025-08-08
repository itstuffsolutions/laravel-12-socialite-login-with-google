<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleAuthController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 
Route::get('/auth/google', [GoogleAuthController::class,'redirectToGoogle'])->name('auth.google');
 
Route::get('/auth/google/callback',[GoogleAuthController::class,'loginWithGoogle']);


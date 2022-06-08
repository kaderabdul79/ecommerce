<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/admins', [AdminController::class,'index'])->name('admins');
Route::get('/dashboard', [AdminController::class,'dashboard']);
Route::post('/admin-dashboard', [AdminController::class,'show_dashboard'])->name('admin-dashboard');


Route::get('/', [HomeController::class,'index']);

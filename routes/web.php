<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;



Route::get('/admins', [AdminController::class,'index'])->name('admins');
Route::get('/dashboard', [SuperAdminController::class,'dashboard']);
Route::post('/admin-dashboard', [AdminController::class,'show_dashboard'])->name('admin-dashboard');
Route::get('/logout', [SuperAdminController::class,'logout'])->name('logout');


Route::get('/', [HomeController::class,'index']);

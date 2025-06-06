<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\hewanController;
use App\Http\Controllers\penjualController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/',[userController::class,'index'])->name('beranda');
Route::get('/layanan',[userController::class,'layanan'])->name('beranda.layanan');
Route::get('/produk',[userController::class,'hewan'])->name('beranda.produk');
Route::get('/login',[userController::class,'loginform'])->name('login');

Route::post('/login',[userController::class, 'login'])->name('login_submit');


Route::get('/admin/{id}', [AdminController::class,'index'])->name('beranda.admin');
// coba kamu tambahkan id si penjual yang baru di tambahkan
Route::get('/penjual',[penjualController::class,'index'])->name('beranda.penjual');

Route::get('/hewan',[hewanController::class,'create'])->name('create.hewan');
Route::post ('/hewan',[hewanController::class,'store'])->name('store.hewan');
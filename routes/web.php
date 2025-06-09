<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\hewanController;
use App\Http\Controllers\penjualController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/',[userController::class,'index'])->name('beranda');
Route::get('/layanan',[userController::class,'layanan'])->name('beranda.layanan');


Route::get('/produk',[userController::class,'hewan'])->name('beranda.produk');
Route::get('/produk/{id}',[userController::class,'show'])->name('detail.produk');


Route::get('/login',[userController::class,'loginform'])->name('login');
Route::get('/register',[userController::class,'registerform'])->name('register');

Route::post('/login',[userController::class, 'login'])->name('login_submit');
Route::post('/register',[userController::class, 'register'])->name('register_submit');
Route::get('/logout',[userController::class,'logout'])->name('logout');


Route::get('/admin', [AdminController::class,'index'])->name('beranda.admin');
// coba kamu tambahkan id si penjual yang baru di tambahkan


Route::get('/penjual',[penjualController::class,'index'])->name('beranda.penjual');
Route::get('/penjual/hewan',[penjualController::class, 'hewan'])->name('hewan.penjual');
Route::get('/penjual/hewan/{id}',[penjualController::class, 'showHewan'])->name('hewan.detail');

Route::get('/hewan/create',[hewanController::class,'create'])->name('create.hewan');
Route::post ('/hewan/create',[hewanController::class,'store'])->name('store.hewan');
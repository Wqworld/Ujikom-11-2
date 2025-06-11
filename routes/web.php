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
Route::get('/admin/hewan',[AdminController::class, 'hewan'])->name('admin.hewan');
Route::get('/admin/penjual',[AdminController::class, 'penjual'])->name('admin.penjual');
// coba kamu tambahkan id si penjual yang baru di tambahkan


Route::get('/penjual',[penjualController::class,'index'])->name('beranda.penjual');
Route::get('/penjual/profile',[penjualController::class,'profile'])->name('profile.penjual');
Route::get('/penjual/profile/{id}/edit',[penjualController::class,'profileEdit'])->name('profile.edit');
Route::put('/penjual/profile/{id}/edit',[penjualController::class,'updateProfile'])->name('profile.update');


Route::get('/penjual/hewan',[penjualController::class, 'hewan'])->name('hewan.penjual');
Route::get('/penjual/hewan/{id}',[penjualController::class, 'showHewan'])->name('hewan.detail');
Route::get('/penjual/hewan/{id}/edit',[penjualController::class,'edit'])->name('hewan.edit');
Route::put('/penjual/hewan/{id}/edit',[penjualController::class,'update'])->name('hewan.update');
Route::delete('/penjual/hewan/{id}',[penjualController::class, 'destroy'])->name('hewan.delete');

Route::get('/hewan/create',[hewanController::class,'create'])->name('create.hewan');
Route::post ('/hewan/create',[hewanController::class,'store'])->name('store.hewan');
<?php

use App\Http\Controllers\hewanController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/',[userController::class,'index'])->name('beranda');

Route::get('/produk',[hewanController::class,'index'])->name('beranda.produk');
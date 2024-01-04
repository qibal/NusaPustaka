<?php

use Illuminate\Support\Facades\Route;


// admin
use App\Http\Controllers\admin\fakultasController;

// user
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\user\keranjangController;


Route::get('/', function () {
    return view('user.HomeUser');
});


//admin fakultas
Route::get('/fakultas',[fakultasController::class,'fakultasRead'])->name('fakultasRead');
Route::post('/fakultas-Add',[fakultasController::class,'fakultasAdd'])->name('fakultasAdd');
Route::get('/fakultas-Delete/{id}',[fakultasController::class,'fakultasDelete'])->name('fakultasDelete');
Route::get('/fakultas-Edit/{id}',[fakultasController::class,'fakultasEdit'])->name('fakultasEdit');
Route::post('/fakultas-Update/{id}',[fakultasController::class,'fakultasUpdate'])->name('fakultasUpdate');

// user login
Route::get('/login',[loginController::class,'login'])->name('login');
Route::get('/KeranjangPeminjaman',[keranjangController::class,'Keranjang'])->name('KeranjangPeminjaman');



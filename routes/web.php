<?php

use Illuminate\Support\Facades\Route;


// admin
use App\Http\Controllers\admin\fakultasController;
use App\Http\Controllers\admin\prodiController;

// user
use App\Http\Controllers\auth\loginController;

Route::get('/', function () {
    return view('user.HomeUser');
});


//admin fakultas
Route::get('/fakultas',[fakultasController::class,'fakultasRead'])->name('fakultas');
Route::post('/fakultas-Add',[fakultasController::class,'fakultasAdd'])->name('fakultasAdd');
Route::get('/fakultas-Delete/{id}',[fakultasController::class,'fakultasDelete'])->name('fakultasDelete');
Route::get('/fakultas-Edit/{id}',[fakultasController::class,'fakultasEdit'])->name('fakultasEdit');
Route::post('/fakultas-Update/{id}',[fakultasController::class,'fakultasUpdate'])->name('fakultasUpdate');

// user login
Route::get('/login',[loginController::class,'login'])->name('login');


// prodi
Route::get('/prodi',[prodiController::class,'prodiRead'])->name('prodiRead');
Route::post('/prodi-Add',[prodiController::class,'prodiAdd'])->name('prodiAdd');
Route::get('/prodi-Delete/{id}',[prodiController::class,'prodiDelete'])->name('prodiDelete');
Route::get('/prodi-Edit/{id}',[prodiController::class,'prodiEdit'])->name('prodiEdit');
Route::post('/prodi-Update/{id}',[prodiController::class,'prodiUpdate'])->name('prodiUpdate');

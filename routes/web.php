<?php

use Illuminate\Support\Facades\Route;


// admin
use App\Http\Controllers\admin\fakultasController;
use App\Http\Controllers\admin\prodiController;
use App\Http\Controllers\admin\bukuController;
// user
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\user\keranjangController;


Route::get('/', function () {
    return view('user.HomeUser');
});
Route::get('/katalog', function () {
    return view('user.PinjamBuku.KatalogBuku');
});


//admin fakultas
Route::get('/fakultas',[fakultasController::class,'fakultasRead'])->name('fakultas');
Route::post('/fakultas-Add',[fakultasController::class,'fakultasAdd'])->name('fakultasAdd');
Route::get('/fakultas-Delete/{id}',[fakultasController::class,'fakultasDelete'])->name('fakultasDelete');
Route::get('/fakultas-Edit/{id}',[fakultasController::class,'fakultasEdit'])->name('fakultasEdit');
Route::post('/fakultas-Update/{id}',[fakultasController::class,'fakultasUpdate'])->name('fakultasUpdate');

// user login
Route::get('/login',[loginController::class,'login'])->name('login');

Route::get('/KeranjangPeminjaman',[keranjangController::class,'Keranjang'])->name('KeranjangPeminjaman');




// prodi
Route::get('/prodi',[prodiController::class,'prodiRead'])->name('prodiRead');
Route::post('/prodi-Add',[prodiController::class,'prodiAdd'])->name('prodiAdd');
Route::get('/prodi-Delete/{id}',[prodiController::class,'prodiDelete'])->name('prodiDelete');
Route::get('/prodi-Edit/{id}',[prodiController::class,'prodiEdit'])->name('prodiEdit');
Route::post('/prodi-Update/{id}',[prodiController::class,'prodiUpdate'])->name('prodiUpdate');


// buku
Route::get('/buku',[bukuController::class,'bukuRead'])->name('bukuRead');
Route::post('/buku-Add',[bukuController::class,'bukuAdd'])->name('bukuAdd');
Route::get('/buku-Delete/{id}',[bukuController::class,'bukuDelete'])->name('bukuDelete');
Route::get('/buku-Edit/{id}',[bukuController::class,'bukuEdit'])->name('bukuEdit');
Route::post('/buku-Update/{id}',[bukuController::class,'bukuUpdate'])->name('bukuUpdate');


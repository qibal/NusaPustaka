<?php

use Illuminate\Support\Facades\Route;
//admin controller
    //manajemen buku
use App\Http\Controllers\Admin\ManajemenBuku\BukuController;
use App\Http\Controllers\Admin\ManajemenBuku\FakultasController;
use App\Http\Controllers\Admin\ManajemenBuku\KategoriBukuController;
use App\Http\Controllers\Admin\ManajemenBuku\KelasController;
use App\Http\Controllers\Admin\ManajemenBuku\ProdiController;
use App\Http\Controllers\Admin\ManajemenBuku\RakBukuController;
    //manajemen user
use App\Http\Controllers\Admin\ManajemenUser\RegisterMahasiswaController;




//auth controller for user
use App\Http\Controllers\auth\loginController;

//user controller
use App\Http\Controllers\user\keranjangController;


Route::get('/', function () {
    return view('user.LayoutUser');
});
Route::get('/katalog', function () {
    return view('user.PinjamBuku.KatalogBuku');
});


// Auth
Route::get('/login/Mahasiswa', [loginController::class, 'loginUser'])->name('loginMahasiswa');

// Admin route

//admin fakultas
Route::get('/fakultas', [fakultasController::class, 'fakultasRead'])->name('fakultas');
Route::post('/fakultas-Add', [fakultasController::class, 'fakultasAdd'])->name('fakultasAdd');
Route::get('/fakultas-Delete/{id}', [fakultasController::class, 'fakultasDelete'])->name('fakultasDelete');
Route::get('/fakultas-Edit/{id}', [fakultasController::class, 'fakultasEdit'])->name('fakultasEdit');
Route::post('/fakultas-Update/{id}', [fakultasController::class, 'fakultasUpdate'])->name('fakultasUpdate');
// prodi
Route::get('/prodi', [prodiController::class, 'prodiRead'])->name('prodiRead');
Route::post('/prodi-Add', [prodiController::class, 'prodiAdd'])->name('prodiAdd');
Route::get('/prodi-Delete/{id}', [prodiController::class, 'prodiDelete'])->name('prodiDelete');
Route::get('/prodi-Edit/{id}', [prodiController::class, 'prodiEdit'])->name('prodiEdit');
Route::post('/prodi-Update/{id}', [prodiController::class, 'prodiUpdate'])->name('prodiUpdate');
// buku
Route::get('/buku', [bukuController::class, 'bukuRead'])->name('bukuRead');
Route::post('/buku-Add', [bukuController::class, 'bukuAdd'])->name('bukuAdd');
Route::get('/buku-Delete/{id}', [bukuController::class, 'bukuDelete'])->name('bukuDelete');
Route::get('/buku-Edit/{id}', [bukuController::class, 'bukuEdit'])->name('bukuEdit');
Route::post('/buku-Update/{id}', [bukuController::class, 'bukuUpdate'])->name('bukuUpdate');
//manajemen User
Route::get('/registerMahasiswa', [RegisterMahasiswaController::class, 'registerMahasiswaRead'])->name('registerMahasiswa');
Route::post('/registerMahasiswa-Add', [RegisterMahasiswaController::class, 'registerMahasiswaAdd'])->name('registerMahasiswaAdd');
Route::get('/registerMahasiswa-Delete/{id}', [RegisterMahasiswaController::class, 'registerMahasiswaDelete'])->name('registerMahasiswaDelete');
Route::get('/registerMahasiswa-Edit/{id}', [RegisterMahasiswaController::class, 'registerMahasiswaEdit'])->name('registerMahasiswaEdit');
Route::post('/registerMahasiswa-Update/{id}', [RegisterMahasiswaController::class, 'registerMahasiswaUpdate'])->name('registerMahasiswaUpdate');



//User
Route::get('/KeranjangPeminjaman', [keranjangController::class, 'Keranjang'])->name('KeranjangPeminjaman');

Route::get('/buku', [bukuController::class, 'bukuRead'])->name('bukuRead');
Route::post('/buku-Add', [bukuController::class, 'bukuAdd'])->name('bukuAdd');
Route::get('/buku-Delete/{id}', [bukuController::class, 'bukuDelete'])->name('bukuDelete');
Route::get('/buku-Edit/{id}', [bukuController::class, 'bukuEdit'])->name('bukuEdit');
Route::post('/buku-Update/{id}', [bukuController::class, 'bukuUpdate'])->name('bukuUpdate');

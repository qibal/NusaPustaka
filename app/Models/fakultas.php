<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'fakultas_id',
        'nama_prodi',
    ];
    // public function prodi():HasMany
    // {
    //     return $this->hasMany(prodi::class);
    // }
    // public function buku()
    // {
    //     return $this->hasMany(buku::class);
    // }
    // public function dataPeminjam()
    // {
    //     return $this->hasMany(dataPeminjam::class);
    // }

    // // tabel user adalah mahasiswa
    // public function mahasiswa()
    // {
    //     return $this->hasMany(User::class);
    // }
}

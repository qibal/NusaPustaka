<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
     use HasFactory;
     protected $fillable = [
        'fakultas_id',
        'nama_prodi',
    ];
    public function prodi(){
        return $this->hasMany(prodi::class);
    }
    public function buku(){
        return $this->hasMany(buku::class);
    }
    public function dataPeminjam(){
        return $this->hasMany(data_peminjam::class);
    }

    // tabel user adalah mahasiswa
    public function mahasiswa(){
        return $this->hasMany(User::class);
    }

}

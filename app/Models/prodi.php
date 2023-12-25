<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
     use HasFactory;
     protected $fillable = [
        'fakultas_id',
        'nama_prodi',
    ];

    public function fakultas(){
        return $this->belongsTo(fakultas::class);
    }
    public function kelas(){
        return $this->hasMany(kelas::class);
    }
    public function mahasiswa(){
        return $this->hasMany(User::class);
    }
    public function buku(){
        return $this->hasMany(buku::class);
    }
    public function dataPeminjaman(){
        return $this->hasMany(data_peminjam::class);
    }
}

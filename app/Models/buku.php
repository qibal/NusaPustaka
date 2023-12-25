<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
     use HasFactory;
    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'fakultas_id',
        'prodi_id',
        'kelas_id',
        'kategori_id',
        'rak_buku_id',
        'nomor_buku',
    ];



    public function fakultas(){
        return $this->belongsTo(fakultas::class);
    }
    public function prodi(){
        return $this->belongsTo(prodi::class);
    }
    public function data_peminjam(){
        return $this->belongsTo(datapeminjam::class);
    }
    public function kategori_buku(){
        return $this->belongsTo(kategoriBuku::class);
    }
    public function rak_buku(){
        return $this->belongsTo(rakbuku::class);
    }
}

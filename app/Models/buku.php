<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    // use HasFactory;
    public function fakultas(){
        return $this->belongsTo(fakultas::class);
    }
    public function prodi(){
        return $this->belongsTo(prodi::class);
    }
    public function data_peminjam(){
        return $this->belongsTo(data_peminjam::class);
    }
    public function kategori_buku(){
        return $this->belongsTo(kategori_buku::class);
    }
    public function rak_buku(){
        return $this->belongsTo(rakbuku::class);
    }
}

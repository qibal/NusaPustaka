<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPeminjam extends Model
{
     use HasFactory;
    public function fakultas(){
        return $this->belongsTo(fakultas::class);
    }
    public function prodi(){
        return $this->belongsTo(prodi::class);
    }
    public function mahasiswa(){
        return $this->belongsTo(User::class);
    }
    public function buku(){
        return $this->hasMany(buku::class);
    }
}

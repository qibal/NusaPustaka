<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    // use HasFactory;
    public function prodi(){
        return $this->belongsTo(prodi::class);
    }
    public function mahasiswa(){
        return $this->hasMany(User::class);
    }
}

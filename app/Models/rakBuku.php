<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rakBuku extends Model
{
     use HasFactory;
     protected $fillable = [
        'rak_buku',
    ];

    public function rakBuku(){
        return $this->hasMany(buku::class);
    }
}

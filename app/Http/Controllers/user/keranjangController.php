<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    //
    public function Keranjang(){
        return view('user.profileUser.KeranjangPeminjaman');
    }
}

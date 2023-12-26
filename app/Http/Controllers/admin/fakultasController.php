<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fakultas;
use App\Models\prodi;
use App\Models\kelas;
use App\Models\dataPeminjam;
use App\Models\buku;

class fakultasController extends Controller
{
    public function fakultasRead(){

        $fakultases=fakultas::all();

        return view('admin.ManajemenBuku.fakultas.Fakultas',compact('fakultases'));
    }
    public function fakultasAdd(Request $request){
        $validate=$request->validate([
            'nama_fakultas'=>'required'
        ]);

        $input=new fakultas();
        $input->nama_fakultas=$request->nama_fakultas;
        $input->save();

        if ($input) {
            return redirect()->back()->with('success','berhasil masukan data');
        }

    }
    public function fakultasDelete($id){
        $delete=fakultas::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success','berhasil hapus data');
        }

    }
    public function fakultasEdit($id){
    }
    public function fakultasUpdate(){}
}

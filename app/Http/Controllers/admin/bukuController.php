<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function bukuRead(){
        $bukuses=buku::all();
        $fakultases=fakultas::all();

        return view('admin.ManajemenBuku.buku.buku',compact('bukuses','fakultases'));
    }
    public function bukuAdd(Request $request){
        // validate jangan kosong
        $validate = $request->validate([
            'nama_fakultas' => 'required'
        ]);

        $buku = buku::where('nama_buku', $request->get('nama_buku'))->first();
        if ($buku !== null) {
            return back()->with('duplicate', 'nama buku' . $request->get('nama_buku') . ' sudah ada');
        } else {
            $input = new buku();
            $input->nama_buku = $request->nama_buku;
            $input->nama_fakultas = $request->nama_fakultas;
            $input->save();

            if ($input) {
                return redirect()->back()->with('success', 'berhasil masukan nama buku');
            }
        }
    }
    public function bukuDelete($id){
        $delete = buku::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success', 'berhasil hapus data');
        }
    }
    public function bukuEdit($id){
        $bukuEdit = buku::find($id);
        $fakultases = fakultas::all();

        if ($bukuEdit && $fakultases) {
            # code...
            return view('admin.ManajemenBuku.buku.bukuEdit', compact('bukuEdit','fakultases'));
        }
    }
    public function bukuUpdate(Request $request, $id){

        $validate = $request->validate([
            'nama_fakultas' => 'required',
            'nama_buku' => 'required'
        ]);

        $buku = buku::where('nama_buku', $request->get('nama_buku'))->first();


        if ($buku !== null) {
            return back()->with('duplicateEdit', 'nama buku' . $request->get('nama_buku') . ' sudah ada');
        } else {
            $input = buku::find($id);
            $input->nama_buku = $request->nama_buku;
            $input->update();

            if ($input) {
                return redirect('/buku')->with('success', 'berhasil masukan bukus');
            }
        }
    }
    public function bukuSearch(){}
}

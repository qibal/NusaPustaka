<?php

namespace App\Http\Controllers\Admin\ManajemenBuku;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\fakultas;
use App\Models\kategoriBuku;
use App\Models\kelas;
use App\Models\prodi;
use App\Models\rakBuku;

class ProdiController extends Controller
{
    //

    public function prodiRead(){
        $prodises=prodi::all();
        $fakultases=fakultas::all();

        return view('admin.ManajemenBuku.Prodi.Prodi',compact('prodises','fakultases'));
    }
    public function prodiAdd(Request $request){
        // validate jangan kosong
        $validate = $request->validate([
            'nama_fakultas' => 'required'
        ]);

        $prodi = prodi::where('nama_prodi', $request->get('nama_prodi'))->first();
        if ($prodi !== null) {
            return back()->with('duplicate', 'nama prodi' . $request->get('nama_prodi') . ' sudah ada');
        } else {
            $input = new prodi();
            $input->nama_prodi = $request->nama_prodi;
            $input->nama_fakultas = $request->nama_fakultas;
            $input->save();

            if ($input) {
                return redirect()->back()->with('success', 'berhasil masukan nama prodi');
            }
        }
    }
    public function prodiDelete($id){
        $delete = prodi::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success', 'berhasil hapus data');
        }
    }
    public function prodiEdit($id){
        $prodiEdit = prodi::find($id);
        $fakultases = fakultas::all();

        if ($prodiEdit && $fakultases) {
            # code...
            return view('admin.ManajemenBuku.Prodi.ProdiEdit', compact('prodiEdit','fakultases'));
        }
    }
    public function prodiUpdate(Request $request, $id){

        $validate = $request->validate([
            'nama_fakultas' => 'required',
            'nama_prodi' => 'required'
        ]);

        $prodi = prodi::where('nama_prodi', $request->get('nama_prodi'))->first();


        if ($prodi !== null) {
            return back()->with('duplicateEdit', 'nama prodi' . $request->get('nama_prodi') . ' sudah ada');
        } else {
            $input = prodi::find($id);
            $input->nama_prodi = $request->nama_prodi;
            $input->update();

            if ($input) {
                return redirect('/prodi')->with('success', 'berhasil masukan prodis');
            }
        }
    }
    public function prodiSearch(){}
}

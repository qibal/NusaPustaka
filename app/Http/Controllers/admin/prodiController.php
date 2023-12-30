<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prodi;
use App\Models\fakultas;

class prodiController extends Controller
{
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

        if ($prodiEdit) {
            # code...
            return view('admin.ManajemenBuku.Prodi.ProdiEdit', compact('prodiEdit','fakultases'));
        }
    }
    public function prodiUpdate(Request $request, $id){

        $validate = $request->validate([
            'nama_fakultas' => 'required',
            'nama_prodi' => 'required'
        ]);
        $fakultas = fakultas::where('nama_fakultas', $request->get('nama_fakultas'))->first();


        if ($fakultas !== null) {
            return back()->with('duplicateEdit', 'nama fakultas' . $request->get('nama_fakultas') . ' sudah ada');
        } else {
            $input = fakultas::find($id);
            $input->nama_fakultas = $request->nama_fakultas;
            $input->update();

            if ($input) {
                return redirect('/fakultas')->with('success', 'berhasil masukan data');
            }
        }
    }
    public function prodiSearch(){}
}

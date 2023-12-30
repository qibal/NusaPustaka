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
    public function fakultasRead()
    {

        $fakultases = fakultas::all();

        return view('admin.ManajemenBuku.fakultas.Fakultas', compact('fakultases'));
    }
    public function fakultasAdd(Request $request)
    {
        // validasi jangan kosong
        $validate = $request->validate([
            'nama_fakultas' => 'required'
        ]);
        // validasi redudansi data
        $fakultas = fakultas::where('nama_fakultas', $request->get('nama_fakultas'))->first();
        if ($fakultas !== null) {
            return back()->with('duplicate', 'nama fakultas' . $request->get('nama_fakultas') . ' sudah ada');
        } else {
            $input = new fakultas();
            $input->nama_fakultas = $request->nama_fakultas;
            $input->save();

            if ($input) {
                return redirect()->back()->with('success', 'berhasil masukan data');
            }
        }
    }
    public function fakultasDelete($id)
    {
        $delete = fakultas::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success', 'berhasil hapus data');
        }
    }
    public function fakultasEdit($id)
    {
        $fakultasEdit = fakultas::find($id);
        if ($fakultasEdit) {
            # code...
            return view('admin.ManajemenBuku.fakultas.EditFakultas', compact('fakultasEdit'));
        }
    }
    public function fakultasUpdate(Request $request, $id)
    {
        dd($request);
        // $validate = $request->validate([
        //     'nama_fakultas' => 'required'
        // ]);
        // $fakultas = fakultas::where('nama_fakultas', $request->get('nama_fakultas'))->first();
        // if ($fakultas !== null) {
        //     return back()->with('duplicateEdit', 'nama fakultas' . $request->get('nama_fakultas') . ' sudah ada');
        // } else {
        //     $input = fakultas::find($id);
        //     $input->nama_fakultas = $request->nama_fakultas;
        //     $input->update();

        //     if ($input) {
        //         return redirect('/fakultas')->with('success', 'berhasil masukan data');
        //     }
        // }
    }
}

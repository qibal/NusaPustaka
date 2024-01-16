<?php

namespace App\Http\Controllers\Admin\ManajemenUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\fakultas;
use App\Models\kategoriBuku;
use App\Models\kelas;
use App\Models\prodi;
use App\Models\rakBuku;
use App\Models\Mahasiswas;

class RegisterMahasiswaController extends Controller
{


    public function registerMahasiswaRead()
    {
        $Mahasiswases = Mahasiswas::all();
        $fakultases = fakultas::all();
        $prodises = prodi::all();
        $kelases = kelas::all();

        return view('admin.ManajemenUser.AkunMahasiswa.RegisterMahasiswa', compact('Mahasiswases', 'fakultases', 'prodises', 'kelases'));
    }

    public function registerMahasiswaAdd(Request $request)
    {
        // validate jangan kosong
        $validate = $request->validate([
            'nama_mahasiswa'=>'required',
            'npm'=>'required |max_digits:9',
            'fakultas'=>'required',
            'prodi'=>'required',
            'kelas'=>'required',
            'email'=>'required',
            'nomer_hp'=>'required |max_digits:12',
        ]);

        $input = new Mahasiswas();
        $input->nama_mahasiswa = $request->nama_mahasiswa;
        $input->npm = $request->npm;
        $input->fakultas = $request->fakultas;
        $input->prodi = $request->prodi;
        $input->kelas = $request->kelas;
        $input->email = $request->email;
        $input->nomer_hp = $request->nomer_hp;
        $input->save();

        if ($input) {
            return redirect()->back()->with('success', 'berhasil masukan judul Mahasiswa');
        }
    }
    public function registerMahasiswaDelete($id)
    {
        $delete = Mahasiswas::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success', 'berhasil hapus data');
        }
    }
    public function registerMahasiswaEdit($id)
    {
        $Mahasiswases = Mahasiswas::findOrFail($id);
        $fakultases = fakultas::all();
        $prodises = prodi::all();
        $kelases = kelas::all();


        return view('admin.ManajemenUser.AkunMahasiswa.EditDaftarMahasiswa', compact('Mahasiswases', 'fakultases', 'prodises', 'kelases'));
    }
    public function registerMahasiswaUpdate(Request $request, $id)
    {
       // validate jangan kosong
       $validate = $request->validate([
        'nama_mahasiswa'=>'required',
        'npm'=>'required |max_digits:9',
        'fakultas'=>'required',
        'prodi'=>'required',
        'kelas'=>'required',
        'email'=>'required',
        'nomer_hp'=>'required |max_digits:12',
    ]);

    $input = Mahasiswas::findOrFail($id);
    $input->nama_mahasiswa = $request->nama_mahasiswa;
    $input->npm = $request->npm;
    $input->fakultas = $request->fakultas;
    $input->prodi = $request->prodi;
    $input->kelas = $request->kelas;
    $input->email = $request->email;
    $input->nomer_hp = $request->nomer_hp;
    $input->update();

    if ($input) {
        return redirect()->back()->with('success', 'berhasil update judul Mahasiswa');
    }
    }

    public function MahasiswaSearch()
    {
    }
}

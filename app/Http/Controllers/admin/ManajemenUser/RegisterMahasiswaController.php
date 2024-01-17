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
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class RegisterMahasiswaController extends Controller
{


    public function registerMahasiswaRead()
    {
        $Mahasiswases = Mahasiswas::all();
        $fakultases = fakultas::all();
        $prodises = prodi::all();
        $kelases = kelas::all();

        // decrypt password untuk semmua data agar passwordnya di terjemahkan dulu
        // $Mahasiswases->transform(function ($mahasiswa) {
        //     $mahasiswa->password = decrypt($mahasiswa->password);
        //     return $mahasiswa;
        // });

        return view('admin.ManajemenUser.AkunMahasiswa.RegisterMahasiswa', compact('Mahasiswases', 'fakultases', 'prodises', 'kelases'));
    }

    public function registerMahasiswaAdd(Request $request)
    {
        // validate jangan kosong
        $validate = $request->validate([
            'nama_mahasiswa' => 'required',
            'npm' => 'required |max_digits:9',
            'fakultas' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'nomer_hp' => 'required |max_digits:12',

        ]);

        $input = new Mahasiswas();
        $input->nama_mahasiswa = $request->nama_mahasiswa;
        $input->npm = $request->npm;
        $input->fakultas = $request->fakultas;
        $input->prodi = $request->prodi;
        $input->kelas = $request->kelas;
        $input->email = $request->email;
        $input->nomer_hp = $request->nomer_hp;
        $input->password =Hash::make($request->npm);
        $input->save();

        if ($input) {
            return redirect()->back()->with('success', 'berhasil masukan judul Mahasiswa');
        }
    }
    public function registerMahasiswaDelete($id)
    {
        try {
            $delete = Mahasiswas::findOrFail(Crypt::decrypt($id));

            if ($delete->delete()) {
                return redirect()->back()->with('success', 'Berhasil hapus data');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus data');
            }
        } catch (DecryptException $e) {
            // ...
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function registerMahasiswaEdit($id)
    {
        try {
            $Mahasiswases = Mahasiswas::findOrFail(Crypt::decrypt($id));
            $fakultases = fakultas::all();
            $prodises = prodi::all();
            $kelases = kelas::all();

            if ($Mahasiswases) {
                return view('admin.ManajemenUser.AkunMahasiswa.EditDaftarMahasiswa', compact('Mahasiswases', 'fakultases', 'prodises', 'kelases'));
            } else {
                return redirect()->back()->with('error', 'Gagal ');
            }
        } catch (DecryptException $e) {
            // ...
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function registerMahasiswaUpdate(Request $request, $id)
    {




        try {
             // validate jangan kosong
        $validate = $request->validate([
            'nama_mahasiswa' => 'required',
            'npm' => 'required |max_digits:9',
            'fakultas' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'nomer_hp' => 'required |max_digits:12',
        ]);
            $input = Mahasiswas::findOrFail(Crypt::decrypt($id));
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
            } else {
                return redirect()->back()->with('error', 'Gagal ');
            }
        } catch (DecryptException $e) {
            // ...
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function MahasiswaSearch()
    {
    }
}

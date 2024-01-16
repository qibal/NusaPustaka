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


class BukuController extends Controller
{

    public function bukuRead()
    {
        $bukuses = buku::all();
        $fakultases = fakultas::all();
        $kategoriBukuses = kategoriBuku::all();
        $kelases = kelas::all();
        $prodises = prodi::all();
        $rakBukuses = rakBuku::all();

        return view('admin.ManajemenBuku.buku.DaftarBuku', compact('bukuses', 'fakultases', 'kategoriBukuses', 'kelases', 'prodises', 'rakBukuses'));
    }

    public function bukuAdd(Request $request)
    {
        // validate jangan kosong
        $validate = $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'nama_fakultas' => 'required',
            'nama_prodi' => 'required',
            'kelas' => 'required',
            'kategori_buku' => 'required',
            'rak_buku' => 'required',
            'kode_buku' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = new buku();
        $input->judul_buku = $request->judul_buku;
        $input->penulis = $request->penulis;
        $input->penerbit = $request->penerbit;
        $input->tahun_terbit = $request->tahun_terbit;
        $input->nama_fakultas = $request->nama_fakultas;
        $input->nama_prodi = $request->nama_prodi;
        $input->kelas = $request->kelas;
        $input->kategori_buku = $request->kategori_buku;
        $input->rak_buku = $request->rak_buku;
        $input->kode_buku = $request->kode_buku;

        // Proses pengunggahan gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambarBuku'), $namaFile);

            // Simpan nama file gambar ke dalam atribut gambar di model
            $input->gambar = $namaFile;
        }

        $input->save();

        if ($input) {
            return redirect()->back()->with('success', 'berhasil masukan judul buku');
        }
    }
    public function bukuDelete($id)
    {
        $delete = buku::findOrFail($id);
        $delete->delete();
        if ($delete) {
            # code...
            return redirect()->back()->with('success', 'berhasil hapus data');
        }
    }
    public function bukuEdit($id)
    {
        $bukuses = buku::find($id);
        $fakultases = fakultas::all();
        $kategoriBukuses = kategoriBuku::all();
        $kelases = kelas::all();
        $prodises = prodi::all();
        $rakBukuses = rakBuku::all();

        return view('admin.ManajemenBuku.buku.EditDaftarBuku', compact('bukuses', 'fakultases', 'kategoriBukuses', 'kelases', 'prodises', 'rakBukuses'));
    }
    public function bukuUpdate(Request $request, $id)
    {
        // Validasi jangan kosong
        $validate = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'nama_fakultas' => 'required|string|max:255',
            'nama_prodi' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'kategori_buku' => 'required|string|max:255',
            'rak_buku' => 'required|string|max:255',
            'kode_buku' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Temukan buku berdasarkan ID
        $buku = buku::findOrFail($id);

        // Perbarui informasi buku
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->nama_fakultas = $request->nama_fakultas;
        $buku->nama_prodi = $request->nama_prodi;
        $buku->kelas = $request->kelas;
        $buku->kategori_buku = $request->kategori_buku;
        $buku->rak_buku = $request->rak_buku;
        $buku->kode_buku = $request->kode_buku;

        // Proses pengunggahan gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambarBuku'), $namaFile);

            // Simpan nama file gambar ke dalam atribut gambar di model
            $buku->gambar = $namaFile;
        }

        // Simpan perubahan
        $buku->update();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data buku berhasil diupdate');
    }

    public function bukuSearch()
    {
    }
}

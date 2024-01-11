@extends('admin.dashboard')
@section('fakultas')
    {{-- pesan berhasil masukan data --}}
    @if (session('success'))
        <div class="text-green-600">
            {{ session('success') }}
        </div>
    @endif
    @if (session('duplicate'))
        <div class="text-red-600">
            {{ session('duplicate') }}
        </div>
    @endif
    @if (session('duplicateEdit'))
        <div class="text-red-600">
            {{ session('duplicateEdit') }}
        </div>
    @endif
    {{-- form untuk input data --}}
    <h1>Input Fakultas</h1>
    <form action="{{ url('/buku-Update/' . $bukuses->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- judul Buku --}}
        <label for="judul_buku">Judul Buku:</label>
        <br>
        <input type="text" name="judul_buku" id="judul_buku" class="border border-black" placeholder="Judul Buku"
            value="{{ $bukuses->nama_prodi }}">
        @error('judul_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        {{-- penulis --}}
        <br>
        <label for="penulis">Penulis :</label>
        <br>
        <input type="text" name="penulis" id="penulis" class="border border-black" placeholder="Penulis"
            value="{{ $bukuses->penulis }}">
        @error('penulis')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- penerbit --}}
        <label for="penerbit">penerbit :</label>
        <br>
        <input type="text" name="penerbit" id="penerbit" class="border border-black" placeholder="penerbit"
            value="{{ $bukuses->penerbit }}">
        @error('penerbit')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- tahun_terbit --}}
        <label for="tahun_terbit">tahun_terbit :</label>
        <br>
        <input type="number" name="tahun_terbit" id="tahun_terbit" class="border border-black" placeholder="tahun terbit"
            value="{{ $bukuses->tahun_terbit }}">
        @error('tahun_terbit')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- nama_fakultas --}}
        <label for="nama_fakultas">nama_fakultas :</label>
        <br>
        <select name="nama_fakultas" id="nama_fakultas">
            @foreach ($fakultases as $fakultas)
                <option value="{{ $fakultas->nama_fakultas }}">{{ $fakultas->nama_fakultas }}</option>
            @endforeach
        </select>
        @error('nama_fakultas')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- nama_prodi --}}
        <label for="nama_prodi">nama_prodi :</label>
        <br>
        <select name="nama_prodi" id="nama_prodi">
            @foreach ($prodises as $prodi)
                <option value="{{ $prodi->nama_prodi }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
        </select>
        @error('nama_prodi')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kelas --}}
        <label for="kelas">kelas :</label>
        <br>
        <input type="text" name="kelas" id="kelas" class="border border-black" placeholder="kelas"
            value="{{ $bukuses->kelas }}">
        @error('kelas')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kategori_buku --}}
        <label for="kategori_buku">kategori_buku :</label>
        <br>
        <select name="nama_fakultas" id="nama_fakultas">
            @foreach ($kategoriBukuses as $kategori)
                <option value="{{ $kategori->kategori_buku }}">{{ $fakultas->kategori_buku }}</option>
            @endforeach
        </select>
        @error('kategori_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- rak_buku --}}
        <label for="rak_buku">rak_buku :</label>
        <br>
        <input type="text" name="rak_buku" id="rak_buku" class="border border-black" placeholder="rak buku"
            value="{{ $bukuses->rak_buku }}">
        @error('rak_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kode_buku --}}
        <label for="kode_buku">kode_buku :</label>
        <br>
        <input type="text" name="kode_buku" id="kode_buku" class="border border-black" placeholder="kode buku"
            value="{{ $bukuses->kode_buku }}">
        @error('kode_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- gambar --}}
        <label for="gambar">gambar :</label>
        <br>
        <input type="file" name="gambar" id="gambar" class="border border-black" placeholder="gambar buku"
            value="{{ $bukuses->gambar }}">
        @error('gambar')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>



        <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Fakultas</button>











    </form>
@endsection

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
    <form action="{{ route('fakultasAdd') }}" method="post">
        @csrf

        {{-- judul Buku --}}
        <label for="judul_buku">Judul Buku:</label>
        <br>
        <input type="text" name="judul_buku" id="judul_buku" class="border border-black" placeholder="Judul Buku"
            value="{{ old('judul_buku') }}">
        @error('judul_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        {{-- penulis --}}
        <label for="penulis">Penulis :</label>
        <br>
        <input type="text" name="penulis" id="penulis" class="border border-black" placeholder="Penulis"
            value="{{ old('penulis') }}">
        @error('penulis')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- penerbit --}}
        <label for="penerbit">penerbit :</label>
        <br>
        <input type="text" name="penerbit" id="penerbit" class="border border-black" placeholder="penerbit"
            value="{{ old('penerbit') }}">
        @error('penerbit')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- tahun_terbit --}}
        <label for="tahun_terbit">tahun_terbit :</label>
        <br>
        <input type="text" name="tahun_terbit" id="tahun_terbit" class="border border-black" placeholder="tahun terbit"
            value="{{ old('tahun_terbit') }}">
        @error('tahun_terbit')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- nama_fakultas --}}
        <label for="nama_fakultas">nama_fakultas :</label>
        <br>
        <input type="text" name="nama_fakultas" id="nama_fakultas" class="border border-black" placeholder="nama fakultas"
            value="{{ old('nama_fakultas') }}">
        @error('nama_fakultas')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- nama_prodi --}}
        <label for="nama_prodi">nama_prodi :</label>
        <br>
        <input type="text" name="nama_prodi" id="nama_prodi" class="border border-black" placeholder="nama prodi"
            value="{{ old('nama_prodi') }}">
        @error('nama_prodi')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kelas --}}
        <label for="kelas">kelas :</label>
        <br>
        <input type="text" name="kelas" id="kelas" class="border border-black" placeholder="kelas"
            value="{{ old('kelas') }}">
        @error('kelas')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kategori_buku --}}
        <label for="kategori_buku">kategori_buku :</label>
        <br>
        <input type="text" name="kategori_buku" id="kategori_buku" class="border border-black" placeholder="kategori buku"
            value="{{ old('kategori_buku') }}">
        @error('kategori_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- rak_buku --}}
        <label for="rak_buku">rak_buku :</label>
        <br>
        <input type="text" name="rak_buku" id="rak_buku" class="border border-black" placeholder="rak buku"
            value="{{ old('rak_buku') }}">
        @error('rak_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>

        {{-- kode_buku --}}
        <label for="kode_buku">kode_buku :</label>
        <br>
        <input type="text" name="kode_buku" id="kode_buku" class="border border-black" placeholder="kode buku"
            value="{{ old('kode_buku') }}">
        @error('kode_buku')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>



        <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Fakultas</button>











    </form>


    {{-- untuk daftar fakultas semua akan tampil disini --}}
    <h1 class="text-5xl text-blue-700">daftar fakultas</h1>
    <table>
        @php
            $no = 1;
        @endphp
        @foreach ($fakultases as $fakultas)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $fakultas->nama_fakultas }}</td>
                <td><a href="{{ url('/fakultas-Edit/' . $fakultas->id) }}" class="text-blue-400">Edit</a></td>
                <td><a href="{{ url('/fakultas-Delete/' . $fakultas->id) }}" class="text-blue-400">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

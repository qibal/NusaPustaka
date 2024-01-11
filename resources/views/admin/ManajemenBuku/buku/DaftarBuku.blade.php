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
    <div class="container mx-auto">
        <form action="{{ route('bukuAdd') }}" method="post" enctype="multipart/form-data">
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
            <br>
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
            <input type="number" name="tahun_terbit" id="tahun_terbit" class="border border-black"
                placeholder="tahun terbit" value="{{ old('tahun_terbit') }}">
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
                    < value="">bahasa
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
                value="{{ old('kelas') }}">
            @error('kelas')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <br>

            {{-- kategori_buku --}}
            <label for="kategori_buku">kategori_buku :</label>
            <br>
            <select name="nama_fakultas" id="nama_fakultas">
                @foreach ($kategoriBukuses as $kategori)
                    <option value="{{ $kategori->kategori_buku }}">{{ $kategori->kategori_buku }}</option>
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

            {{-- gambar --}}
            <label for="gambar">gambar :</label>
            <br>
            <input type="file" name="gambar" id="gambar" class="border border-black" placeholder="gambar buku"
                value="{{ old('gambarr') }}">
            @error('gambar')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <br>



            <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Fakultas</button>











        </form>
    </div>


    {{-- untuk daftar fakultas semua akan tampil disini --}}
    <h1 class="text-5xl text-blue-700">daftar buku</h1>
    <table>
        @php
            $no = 1;
        @endphp
        @foreach ($bukuses as $buku)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->nama_fakultas }}</td>
                <td>{{ $buku->nama_prodi }}</td>
                <td>{{ $buku->kelas }}</td>
                <td>{{ $buku->kategori_buku }}</td>
                <td>{{ $buku->rak_buku }}</td>
                <td>{{ $buku->kode_buku }}</td>
                <td>
                    <img src="{{ asset('gambarBuku/' . $buku->gambar) }}" alt="Gambar Buku" class="w-20">

                </td>
                <td><a href="{{ url('/buku-Edit/' . $buku->id) }}" class="text-blue-400">Edit</a></td>
                <td><a href="{{ url('/buku-Delete/' . $buku->id) }}" class="text-blue-400">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

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
    {{-- form untuk input data --}}
    <h1>Input Prodi</h1>
    <form action="{{ route('prodiAdd') }}" method="post">
        @csrf

        {{-- masukan nama fakultas --}}
        <select name="nama_fakultas" id="nama_fakultas">
            @foreach ($fakultases as $fakultas)
                <option value="{{ $fakultas->nama_fakultas }}">{{ $fakultas->nama_fakultas }}</option>
            @endforeach
        </select>
        <br>
        {{-- masukan nama prodi --}}
        <label for="nama_prodi">Nama prodi:</label><br>
        <input type="text" name="nama_prodi" id="nama_prodi" class="border border-black" placeholder="nama prodi"
            value="{{ old('nama_prodi') }}">
        @error('nama_prodi')
            <div class="text-red-500">{{ $message }}</div>
        @enderror


        <br>
        <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Prodi</button>
    </form>


    {{-- untuk daftar prodi semua akan tampil disini --}}
    <h1 class="text-5xl text-blue-700">daftar prodi</h1>
    <table>
        @php
            $no = 1;
        @endphp
        @foreach ($prodises as $prodi)
            <tr>
                <td>{{ $no++ }}</td>x
                <td>{{ $prodi->nama_prodi }}</td>
                <td>{{ $prodi->nama_fakultas }}</td>
                <td><a href="{{ url('/prodi-Edit/' . $prodi->id) }}" class="text-blue-400">Edit</a></td>
                <td><a href="{{ url('/prodi-Delete/' . $prodi->id) }}" class="text-blue-400">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

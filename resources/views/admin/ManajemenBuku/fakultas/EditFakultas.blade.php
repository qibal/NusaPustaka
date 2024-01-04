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
    {{-- form untuk edit data --}}
    <h1>update Fakultas</h1>
    <form action="{{ url('/fakultas-Update/'.$fakultasEdit->id) }}" method="post">
        @csrf
        <h1>Edit fakultas</h1>
        <label for="nama_fakultas">Nama Fakultas:</label><br>
        <input type="text" name="nama_fakultas" id="nama_fakultas" class="border border-black" placeholder="nama fakultas"
            value="{{ $fakultasEdit->nama_fakultas }}">
        @error('nama_fakultas')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Fakultas</button>
    </form>
@endsection

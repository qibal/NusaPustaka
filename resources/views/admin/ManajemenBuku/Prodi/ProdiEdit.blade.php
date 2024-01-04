@extends('admin.dashboard')
@section('fakultas')
    {{-- pesan berhasil masukan data --}}
    @if (session('success'))
        <div class="text-green-600">
            {{ session('success') }}
        </div>
    @endif
    @if (session('duplicateEdit'))
        <div class="text-red-600">
            {{ session('duplicateEdit') }}
        </div>
    @endif
    {{-- form untuk edit data --}}
    <h1>update Fakultas</h1>
    <form action="{{ url('/prodi-Update/'.$prodiEdit->id) }}" method="post">
        @csrf
        <h1>Edit prodi dan fakultas</h1>
        <select name="nama_fakultas" id="nama_fakultas">
            @foreach ($fakultases as $fakultas)
                <option value="{{ $fakultas->nama_fakultas }}">{{ $fakultas->nama_fakultas }}</option>
            @endforeach
        </select>

        <br>
        <label for="nama_prodi">Nama prodi:</label><br>
        <input type="text" name="nama_prodi" id="nama_prodi" class="border border-black" placeholder="nama prodi"
            value="{{ $prodiEdit->nama_prodi }}">
        @error('nama_prodi')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <br>
        <button type="submit" class="p-3 bg-cyan-200 rounded">Tambah Fakultas</button>
    </form>
@endsection

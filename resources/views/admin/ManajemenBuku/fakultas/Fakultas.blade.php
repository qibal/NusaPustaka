@extends('admin.dashboard')
@section('fakultas')
    {{-- form untuk input data --}}
    @if(session('success'))
    <div class="text-green-600">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('fakultasAdd') }}" method="post">
        @csrf

        <label for="nama_fakultas">Nama Fakultas:</label><br>
        <input type="text" name="nama_fakultas" id="nama_fakultas" class="border border-black" placeholder="nama fakultas"
            value="{{ old('nama_fakultas') }}">
        @error('nama_fakultas')
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
                <td><a href="{{ url('/fakultas-Edit/'.$fakultas->id) }}" class="text-blue-400">Edit</a></td>
                <td><a href="{{ url('/fakultas-Delete/'.$fakultas->id) }}" class="text-red-400">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

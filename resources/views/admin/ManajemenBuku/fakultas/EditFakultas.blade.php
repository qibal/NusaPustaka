@extends('admin.dashboard')
@section('fakultas')

<form action="{{ route('fakultasEdit') }}" method="post">
    @csrf

    <label for="nama_fakultas">Nama Fakultas:</label>
    <input type="text" name="nama_fakultas" id="nama_fakultas">

    <button type="submit">Edit Fakultas</button>
</form>
@endsection


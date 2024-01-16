@extends('admin.LayoutAdmin')

@section('Admin')
{{-- h-screen berati tingginya mengikuti tinggi ukuran layar pengguna saat ini --}}
    <div class="flex flex-col sm:flex-row justify-center h-screen">
        {{-- Form di bawah atau di sebelah kanan (untuk ukuran > sm) --}}
        <div class="sm:w-1/2 bg-white p-8 rounded shadow-lg">
            <h2 class="text-2xl font-semibold mb-8 text-center">Edit Akun Mahasiswa</h2>
            @if ($errors->any())
                <div class="text-red-500 mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div  class="text-green-600 mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ url('/registerMahasiswa-Update/'.$Mahasiswases->id) }}">
                @csrf
                {{-- nama maahsiwa --}}
                <div class="mb-4">
                    <label for="nama_mahasiswa" class="block text-gray-700 text-sm font-bold mb-2">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('nama_mahasiswa', $Mahasiswases->nama_mahasiswa) }}">
                </div>
                {{-- npm --}}
                <div class="mb-4">
                    <label for="npm" class="block text-gray-700 text-sm font-bold mb-2">NPM</label>
                    <input type="number" name="npm" id="npm"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('npm',$Mahasiswases->npm) }}" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 9)">
                </div>
                {{-- fakultas --}}
                <div class="mb-4">
                    <label for="fakultas" class="block text-gray-700 text-sm font-bold mb-2">Fakultas</label>
                    <input type="text" name="fakultas" id="fakultas"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('fakultas',$Mahasiswases->fakultas) }}">
                </div>
                {{-- prodi --}}
                <div class="mb-4">
                    <label for="prodi" class="block text-gray-700 text-sm font-bold mb-2">Prodi</label>
                    <input type="text" name="prodi" id="prodi"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('prodi',$Mahasiswases->prodi) }}">
                </div>
                {{-- kelas --}}
                <div class="mb-4">
                    <label for="kelas" class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                    <input type="text" name="kelas" id="kelas"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('kelas',$Mahasiswases->kelas) }}">
                </div>
                {{-- email --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="text" name="email" id="email"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('email',$Mahasiswases->email) }}">
                </div>
                {{-- nomer hp --}}
                <div class="mb-4">
                    <label for="nomer_hp" class="block text-gray-700 text-sm font-bold mb-2">Nomer HP</label>
                    <input type="number" name="nomer_hp" id="nomer_hp"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:border-indigo-500"
                        value="{{ old('nomer_hp',$Mahasiswases->nomer_hp) }}" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 12)">
                </div>

                <div class="mb-4">
                    <button type="submit"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-full focus:outline-none hover:bg-indigo-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('user.LayoutUser')
@section('layoutUser')
    <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                <div class="relative z-10 lg:py-16">
                    <div class="relative h-64 sm:h-80 lg:h-full">
                        <img alt="Perpustakaan"
                            src="https://perpustakaan.stieimalang.ac.id/wp-content/uploads/2019/08/31879284694_bcfba14499_b.jpg"
                            class="absolute inset-0 h-full w-full object-cover" />
                    </div>
                </div>

                <div class="relative flex items-center bg-gray-100">
                    <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"></span>

                    <div class="p-8 sm:p-16 lg:p-24">
                        <h2 class="text-2xl font-bold sm:text-2xl">
                            WELCOME TO THE NUSA PUSTAKA LIBRARY
                        </h2>

                        <p class="mt-2 text-yellow-950">
                            Discover and explore our wide collection of the best books. From fiction to non-fiction,
                            from history to science, we provide reading material for every taste and interest. Enjoy an
                            immersive reading experience and gain new knowledge through our library!
                        </p>

                        <!-- Kolom Pencarian -->
                        <div class="mt-10 text-center">
                            <h2 class="text-center font-bold mb-2">Cari Buku</h2>
                            <div class="flex items-center justify-center">
                                <input type="text" class="border border-gray-300 p-2 w-3/6"
                                    placeholder="Masukkan judul buku atau penulis">
                                <button class="bg-blue-500 text-white p-2 ml-2">Cari</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <h2 class="text-center text-3xl font-bold mb-4">Rekomendasi Buku</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Buku 1 -->
        <div class="bg-white p-2 rounded-lg shadow-md">
            <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
            <img src="https://cdn.gramedia.com/uploads/items/591501041_perawan-remaja-dalam-cengkeraman-militer.jpg"
                alt="Buku1" class="w-40 h-50 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Perawan Remaja Dalam Cengkeraman Militer</h2>
            <p class="text-gray-700">Penulis: Pramoedya Ananta Toer</p>
            <p class="text-gray-700">Tahun Terbit: 2015</p>
        </div>

        <!-- Buku 2 -->
        <div class="bg-white p-2 rounded-lg shadow-md">
            <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
            <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/4/4it8hfv6f7sjwrtnewlllq.jpg" alt="Buku2"
                class="w-40 h-50 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Super Master OSN Biologi SMAHTML, PHP, dan MySQL untuk Pemula</h2>
            <p class="text-gray-700">Penulis: Jubilee Enterprise</p>
            <p class="text-gray-700">Tahun Terbit: 2023</p>
        </div>

        <!-- Buku 3 -->
        <div class="bg-white p-2 rounded-lg shadow-md">
            <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
            <img src="https://cdn.gramedia.com/uploads/items/Psikologi_Eksperimen_TeoriImplementasi.jpg" alt="Buku3"
                class="w-40 h-50 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Psikologi Eksperimen: Teori dan Implementasi</h2>
            <p class="text-gray-700">Penulis:Nuraeni, S.psi</p>
            <p class="text-gray-700">Tahun Terbit: 2021</p>
        </div>

        <!-- Buku 4 -->
        <div class="bg-white p-2 rounded-lg shadow-md">
            <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
            <img src="https://cdn.gramedia.com/uploads/items/cc4b50ae2760fda874e337470fae8474.jpg" alt="Buku4"
                class="w-40 h-50 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Konsep dan Strategi Pembelajaran di Era Revolusi Industri 4.0</h2>
            <p class="text-gray-700">Penulis: Abdul Muis Joenaidy</p>
            <p class="text-gray-700">Tahun Terbit: 2019</p>
        </div>
    </div>
@endsection

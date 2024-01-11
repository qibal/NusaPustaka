<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Login</title>
    {{-- <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-slate-700">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-24 items-center justify-between">
            <div class="md:flex md:items- md:gap-12 flex-row-reverse">
                <a class="block text-teal-600" href="/">
                    <span class="sr-only">Home</span>
                    <img src="img/LogoNusa2.png" alt="LogoNusa2">
                </a>
            </div>


            <div class="hidden md:block">
              <nav aria-label="Global">
                <ul class="flex items-center gap-6 text-sm">

                  <li>
                    <a class="text-gray-100 transition hover:text-gray-100/75" href="/"> About </a>
                  </li>

                  <li>
                    <a class="text-gray-100 transition hover:text-gray-100/75" href="/"> Buku </a>
                  </li>

                  <li>
                    <a class="text-gray-100 transition hover:text-gray-100/75" href="/"> History </a>
                  </li>


                </ul>
              </nav>
            </div>

            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                  href="/login"
                >
                  Login
                </a>

                <div class="hidden sm:flex">
                  <a
                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                    href="/"
                  >
                    Keranjang
                  </a>
                </div>
              </div>

              <div class="block md:hidden">
                <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </header>

      @yield('layoutUser')

      <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
            <div class="relative z-10 lg:py-16">
              <div class="relative h-64 sm:h-80 lg:h-full">
                <img
                  alt="Perpustakaan"
                  src="https://perpustakaan.stieimalang.ac.id/wp-content/uploads/2019/08/31879284694_bcfba14499_b.jpg"
                  class="absolute inset-0 h-full w-full object-cover"
                />
              </div>
            </div>

            <div class="relative flex items-center bg-gray-100">
              <span
                class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"
              ></span>

              <div class="p-8 sm:p-16 lg:p-24">
                <h2 class="text-2xl font-bold sm:text-2xl">
                  WELCOME TO THE NUSA PUSTAKA LIBRARY
                </h2>

                <p class="mt-2 text-yellow-950">
                    Discover and explore our wide collection of the best books. From fiction to non-fiction, from history to science, we provide reading material for every taste and interest. Enjoy an immersive reading experience and gain new knowledge through our library!
                </p>

                 <!-- Kolom Pencarian -->
              <div class="mt-10 text-center">
              <h2 class="text-center font-bold mb-2">Cari Buku</h2>
              <div class="flex items-center justify-center">
              <input type="text" class="border border-gray-300 p-2 w-3/6" placeholder="Masukkan judul buku atau penulis">
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
                <img src="https://cdn.gramedia.com/uploads/items/591501041_perawan-remaja-dalam-cengkeraman-militer.jpg" alt="Buku1" class="w-40 h-50 object-cover mb-4">
                <h2 class="text-lg font-bold mb-2">Perawan Remaja Dalam Cengkeraman Militer</h2>
                <p class="text-gray-700">Penulis: Pramoedya Ananta Toer</p>
                <p class="text-gray-700">Tahun Terbit: 2015</p>
            </div>

            <!-- Buku 2 -->
            <div class="bg-white p-2 rounded-lg shadow-md">
                <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
                <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/4/4it8hfv6f7sjwrtnewlllq.jpg" alt="Buku2" class="w-40 h-50 object-cover mb-4">
                <h2 class="text-lg font-bold mb-2">Super Master OSN Biologi SMAHTML, PHP, dan MySQL untuk Pemula</h2>
                <p class="text-gray-700">Penulis: Jubilee Enterprise</p>
                <p class="text-gray-700">Tahun Terbit: 2023</p>
            </div>

            <!-- Buku 3 -->
            <div class="bg-white p-2 rounded-lg shadow-md">
                <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
                <img src="https://cdn.gramedia.com/uploads/items/Psikologi_Eksperimen_TeoriImplementasi.jpg" alt="Buku3" class="w-40 h-50 object-cover mb-2">
                <h2 class="text-lg font-bold mb-2">Psikologi Eksperimen: Teori dan Implementasi</h2>
                <p class="text-gray-700">Penulis:Nuraeni, S.psi</p>
                <p class="text-gray-700">Tahun Terbit: 2021</p>
            </div>

            <!-- Buku 4 -->
            <div class="bg-white p-2 rounded-lg shadow-md">
                <p class="text-gray-500 mb-2">Rekomendasi Buku</p>
                <img src="https://cdn.gramedia.com/uploads/items/cc4b50ae2760fda874e337470fae8474.jpg" alt="Buku4" class="w-40 h-50 object-cover mb-2">
                <h2 class="text-lg font-bold mb-2">Konsep dan Strategi Pembelajaran di Era Revolusi Industri 4.0</h2>
                <p class="text-gray-700">Penulis: Abdul Muis Joenaidy</p>
                <p class="text-gray-700">Tahun Terbit: 2019</p>
            </div>
        </div>


        <footer class="bg-gray-100">
      <p class="mx-auto mt-28 max-w-md text-center leading-relaxed text-gray-500 py-6">
        &copy; 2024 Perpustakaan Nusa Pustaka. All rights reserved.
      </p>

      <ul class="mt- flex justify-center gap-6 md:gap-8">
        <li>
          <a
            href="/"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75"
          >
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </li>

       <li>
          <a
            href="/"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75"
          >
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </li>

        <li>
          <a
            href="/"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75"
          >
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</body>
</html>

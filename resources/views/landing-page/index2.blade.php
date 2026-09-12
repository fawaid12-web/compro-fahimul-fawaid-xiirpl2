<x-guest-layout>
<section class="text-gray-600 body-font bg-white">
  <div class="container px-5 py-24 mx-auto">

    <!-- Judul Section -->
    <div class="text-center mb-16">
      <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900 mb-2">
        Artikel Terbaru
      </h1>
      <p class="text-gray-500 max-w-xl mx-auto">
        Kumpulan artikel seputar pendidikan dan pengembangan diri
      </p>
    </div>

    <!-- Grid 3 kolom -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ($dataArticles as $dataArticle)
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl border border-gray-100 overflow-hidden transition-shadow duration-300 flex flex-col">

          <!-- Bagian Gambar / Kategori (di atas) -->
          <div class="h-40 bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center p-6">
            <span class="inline-block bg-white/20 text-white text-xs font-semibold tracking-wider uppercase px-4 py-1.5 rounded-full backdrop-blur-sm">
              {{ $dataArticle['kategori'] }}
            </span>
          </div>

          <!-- Bagian Konten (di bawah) -->
          <div class="p-6 flex flex-col flex-1">

            <span class="text-xs text-gray-400 font-medium mb-2">
              {{ now()->translatedFormat('d F Y') }}
            </span>

            <h2 class="title-font text-lg font-bold text-gray-900 mb-2 leading-snug">
              {{ $dataArticle['judul'] }}
            </h2>

            <p class="text-gray-500 leading-relaxed mb-4 text-sm flex-1">
              {{ $dataArticle['deskripsi'] }}
            </p>

            <a href="#" class="text-indigo-600 font-semibold inline-flex items-center text-sm hover:text-indigo-800 transition-colors w-fit">
              Baca Selengkapnya
              <svg class="w-4 h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>

          </div>

        </div>
      @endforeach
    </div>

  </div>
</section>
</x-guest-layout>

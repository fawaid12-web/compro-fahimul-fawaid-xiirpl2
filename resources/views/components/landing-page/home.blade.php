{{-- ================================================================= --}}
{{-- HERO SECTION                                                       --}}
{{-- ================================================================= --}}
<section id="home" class="w-full py-12 md:py-20 bg-red-50 dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        {{-- KONTEN KIRI --}}
        <div class="flex flex-col items-start">

            <span class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-red-400 mb-4">
                🌶️ Sambal Bajak Original
            </span>

            <!-- Judul Utama -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 leading-tight">
                Sensasi Pedas Juara, <span class="text-red-600">Renyahnya Bikin Nagih</span>
            </h1>

            <!-- Deskripsi -->
            <p class="text-gray-600 dark:text-gray-400 text-sm md:text-base mb-6 leading-relaxed">
                Ayam geprek adalah ayam goreng tepung khas Indonesia yang diulek bersama sambal bajak &mdash; sambal khas Jawa Tengah dan Jawa Timur dengan cita rasa manis, pedas, dan gurih dari cabai merah besar, cabai rawit, tomat, bawang merah, bawang putih, gula merah, dan terasi yang ditumis.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#product" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 transition">
                    Lihat Menu
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#article" class="py-3 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 transition inline-flex items-center justify-center">
                    Baca Artikel
                </a>
            </div>
        </div>

        {{-- GAMBAR KANAN --}}
        <div class="w-full flex justify-center items-center">
            <div class="w-full h-80 rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                <img src="{{ asset('images/home.jpg') }}" alt="Ayam Geprek" class="w-full h-full object-cover">
            </div>
        </div>

    </div>
</section>
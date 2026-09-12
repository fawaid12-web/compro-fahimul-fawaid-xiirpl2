<header class="sticky top-0 w-full z-50 bg-white shadow-sm" x-data="{ mobileOpen: false }">
    <!-- Container Utama: Menjaga semua elemen sejajar dalam 1 baris -->
    <div class="flex justify-between items-center w-full max-w-6xl mx-auto px-6 h-20">

        {{-- 1. LOGO (Di Kiri) --}}
        <a href="#home" class="flex items-center gap-2">
            <span class="text-xl font-bold text-blue-900 tracking-tight">
                Logo
            </span>
        </a>

        {{-- 2. DESKTOP NAV (Di Tengah / Kanan) --}}
        <nav class="hidden md:flex items-center gap-8 text-sm font-extrabold text-black">
            <a href="#home" class="text-black font-extrabold border-b-2 border-red-600 pb-1">Home</a>
            <a href="#profile" class="hover:text-red-600 transition">Profil</a>
            <a href="#product" class="hover:text-red-600 transition">Produk</a>
            <a href="#article" class="hover:text-red-600 transition">Artikel</a>
            <a href="#contact" class="hover:text-red-600 transition">Kontak</a>
        </nav>

        {{-- 3. TOMBOL LOGIN (Di Paling Kanan) --}}
        <div class="hidden md:flex items-center">
            <a href="/login" class="px-6 py-2 rounded-full bg-blue-600 text-white font-semibold text-sm hover:bg-blue-700 transition">
                Login
            </a>
        </div>

        {{-- 4. TOMBOL HAMBURGER (Tampil di Mobile saja) --}}
        <button type="button" class="md:hidden p-2 text-gray-700 rounded-md" @click="mobileOpen = !mobileOpen">
            <span class="text-2xl font-bold" x-text="mobileOpen ? '✕' : '☰'">☰</span>
        </button>

    </div> {{-- <-- Penutup div container utama --}}

    {{-- MENU MOBILE --}}
    <div class="md:hidden bg-white border-t border-gray-100 px-6 py-4 flex flex-col gap-3 shadow-lg" x-show="mobileOpen" x-cloak>
        <a href="#home" class="text-red-600 font-bold text-sm" @click="mobileOpen = false">Home</a>
        <a href="#profile" class="text-gray-700 hover:text-red-600 font-semibold text-sm" @click="mobileOpen = false">Profil</a>
        <a href="#product" class="text-gray-700 hover:text-red-600 font-semibold text-sm" @click="mobileOpen = false">Produk</a>
        <a href="#article" class="text-gray-700 hover:text-red-600 font-semibold text-sm" @click="mobileOpen = false">Artikel</a>
        <a href="#contact" class="text-gray-700 hover:text-red-600 font-semibold text-sm" @click="mobileOpen = false">Kontak</a>
        <a href="/login" class="w-full text-center py-2 bg-blue-600 text-white font-semibold text-sm rounded-full mt-2">Login</a>
    </div>
</header>
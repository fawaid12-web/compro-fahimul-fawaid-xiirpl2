<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Header & Action Button -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Daftar Artikel Blog</h1>
                        <p class="text-sm text-gray-500 mt-1">Kelola dan publikasikan artikel Anda di sini.</p>
                    </div>
                    <a href="/articles/create" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-sm transition duration-150 ease-in-out flex items-center gap-2">
                        <span>+</span> Buat Artikel
                    </a>
                </div>

                <!-- Alert Sukses (Sudah Ditutup dengan Benar) -->
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-r-md">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Article Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($data as $dt)
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col justify-between">
                            <div>
                                <!-- Thumbnail Gambar -->
                                <div class="relative w-full h-48 bg-gray-100">
                                    @if($dt->image)
                                        <img src="{{ Storage::url($dt->image) }}" alt="{{ $dt->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-gray-400 text-sm">
                                            Tidak ada gambar
                                        </div>
                                    @endif
                                </div>

                                <!-- Konten Card -->
                                <div class="p-5">
                                    <h2 class="text-lg font-bold text-gray-900 line-clamp-2 mb-2">
                                        {{ $dt->title }}
                                    </h2>
                                    <p class="text-gray-600 text-sm line-clamp-3 leading-relaxed">
                                        {{ Str::limit($dt->content, 120) }}
                                    </p>
                                </div>
                            </div>

                            <!-- Card Footer (Aksi) -->
                            <div class="px-5 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between mt-auto">
                                <span class="text-xs font-semibold text-gray-400">#{{ $loop->iteration }}</span>
                                <div class="flex items-center space-x-2">

                                    <!-- Tombol Readmore / Detail -->
                                    <a href="/articles/{{ $dt->id }}" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium rounded-md transition">
                                        Readmore
                                    </a>

                                    <!-- Tombol Edit -->
                                    <a href="/articles/{{ $dt->id }}/edit" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white text-xs font-medium rounded-md transition">
                                        Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="/articles/{{ $dt->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-red-600 hover:bg-red-700 text-white text-xs font-medium rounded-md transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- State Kosong -->
                        <div class="col-span-full py-12 text-center">
                            <div class="inline-block p-4 rounded-full bg-gray-100 mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-500 font-medium">Belum ada data artikel.</p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

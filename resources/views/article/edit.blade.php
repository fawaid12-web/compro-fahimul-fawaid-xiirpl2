<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Artikel</h1>
                    <a href="/articles" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white text-sm font-medium rounded-md shadow-sm transition">
                        Kembali
                    </a>
                </div>

                <form action="/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Input Judul -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Gambar -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar Artikel</label>

                        @if ($article->image)
                            <div class="my-2">
                                <p class="text-xs text-gray-500 mb-1">Gambar saat ini:</p>
                                <img src="{{ Storage::url($article->image) }}" alt="Gambar Artikel" class="w-32 h-20 object-cover rounded-md border border-gray-200">
                            </div>
                        @endif

                        <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="text-xs text-gray-400 mt-1">Kosongkan jika tidak ingin mengubah gambar.</p>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Konten -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Konten Artikel</label>
                        <textarea name="content" id="content" rows="6" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">{{ old('content', $article->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded-md shadow-sm transition">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

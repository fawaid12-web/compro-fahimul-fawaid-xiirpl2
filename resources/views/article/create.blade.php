<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-2xl font-bold text-gray-800 mb-6">Buat Artikel Baru</h1>

                    <form action="/articles" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
                            <input
                                type="text"
                                id="title"
                                name="title"
                                placeholder="Masukkan judul artikel..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            >
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar Cover</label>
                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept="image/*"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer"
                            >
                        </div>

                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten Artikel</label>
                            <textarea
                                id="content"
                                name="content"
                                rows="8"
                                placeholder="Tuliskan isi artikel di sini..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            ></textarea>
                        </div>

                        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                            <button
                                type="submit"
                                class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-md shadow-sm transition duration-150 ease-in-out cursor-pointer"
                            >
                                Simpan Artikel
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

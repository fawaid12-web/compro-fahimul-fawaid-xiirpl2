<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profil Perusahaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-md text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md text-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/update/{{ $dataCompany->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="profile" class="block text-sm font-medium text-gray-700 mb-1">
                            Deskripsi / Tentang Perusahaan
                        </label>
                        <p class="text-xs text-gray-400 mb-2">
                            Teks ini akan tampil di section "Tentang Kami" pada halaman utama website.
                        </p>
                        <textarea
                            name="profile"
                            id="profile"
                            rows="8"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20"
                            placeholder="Tuliskan profil / cerita singkat tentang perusahaan kamu di sini..."
                        >{{ old('profile', $dataCompany->profile) }}</textarea>
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="submit" class="px-5 py-2.5 rounded-full bg-primary-container text-on-primary text-sm font-semibold hover:bg-primary transition-colors">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-gray-700">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

                        
<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($articles as $article)
        <div class="border p-4 rounded-lg shadow">
            <!-- 1. Kolom image -->
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-40 object-cover mb-3 rounded">
            @endif

            <!-- 2. Kolom title -->
            <h3 class="font-bold text-lg mb-2">{{ $article->title }}</h3>

            <!-- 3. Kolom content -->
            <p class="text-gray-600 text-sm">{{ $article->content }}</p>
        </div>
    @endforeach
</div>
</x-app-layout>

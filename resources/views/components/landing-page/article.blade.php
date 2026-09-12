{{-- ================================================================= --}}
{{-- ARTICLE / BLOG SECTION                                            --}}
{{-- Data diambil dari model Article ($articles, dikirim dari          --}}
{{-- CompanyProfileController@index)                                   --}}
{{-- ================================================================= --}}
@props(['articles' => collect()])

<section id="article" class="py-20 bg-surface-container-low">
    <div class="max-w-[1320px] mx-auto px-6 md:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-headline-md md:text-headline-lg font-bold text-on-surface tracking-tight mb-4">
                ARTIKEL
            </h2>
            <p class="text-body-md text-on-surface-variant">
                Ikuti tips kuliner menarik, liputan ekspansi outlet baru, dan cerita seru dari dapur kami.
            </p>
        </div>

        @if ($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                    {{-- Card style Flowbite (vertical: gambar di atas, teks di bawah) --}}
                    <div class="max-w-sm w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('articles.show', $article) }}">
                            @if ($article->image)
                                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" />
                            @else
                                <div class="rounded-t-lg w-full h-48 bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-400">
                                    <span class="material-symbols-outlined text-4xl">image</span>
                                </div>
                            @endif
                        </a>
                        <div class="p-5">
                            <a href="{{ route('articles.show', $article) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $article->title }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ \Illuminate\Support\Str::limit($article->content, 100) }}
                            </p>
                            <a href="{{ route('articles.show', $article) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Baca Selengkapnya
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Fallback jika belum ada artikel --}}
            <div class="text-center py-16 bg-surface-container-lowest rounded-2xl border border-dashed border-outline-variant">
                <span class="material-symbols-outlined text-5xl text-on-surface-variant mb-3">newspaper</span>
                <p class="text-body-md text-on-surface-variant">
                    Belum ada artikel. Tambahkan lewat halaman
                    <a href="/articles/create" class="text-primary underline">Buat Article</a>.
                </p>
            </div>
        @endif
    </div>
</section>
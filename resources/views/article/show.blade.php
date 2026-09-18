<h1>{{ $article->title }}</h1>

@if($article->image)
    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" width="300">
@endif

<p>{{ $article->content }}</p>

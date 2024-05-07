@foreach ($articles as $article)
    <div class="card">
        <img src="{{ $article->image }}" alt="{{ $article->title }}">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->date }}</p>
        <p>{{ $article->content }}</p>
        <a href="/articles/{{ $article->id }}">Lees meer</a>
    </div>
@endforeach

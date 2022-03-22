@extends('template')

@section('container')
    <h1>Halaman Artikel Berita</h1>
     @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-3">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }}
                </a>                    
            </h3>
            <p> By. <a href="/authors/{{ $article->author->username }}"class="text-decoration-none"> {{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}"class="text-decoration-none">{{ $article->category->name }}</a></p>
            <p>{{ $article->excerpt }}......</p>
            <a href="/article/{{ $article->slug }}"class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection

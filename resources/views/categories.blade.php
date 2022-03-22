@extends('template')

@section('container')
    <h1 class ="mb-5"> Halaman Kategori</h1>
    @foreach($categories as $category)
        <ul>
            <li>
                <h2> <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
        {{-- <article>
        <h3>{{ $article->title }}</h3>
        <h2> <a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
        </h2>
        <h6>By: {{ $article->author }}</h6>
        <p>{!! $article->excerpt !!}</p>
        </article> --}}
    @endforeach
@endsection

@extends('template')

@section('container')
    <h1 class ="mb-5"> Halaman Kategori : {{ $category }}</h1>
    @foreach($articles as $article)
        <article>
        {{-- <h3>{{ $article->title }}</h3> --}}
        <h2> <a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
        </h2>
        <p> By. {{ $article->author->name }} </p>
        {{-- <h6>By: {{ $article->author }}</h6> --}}
        <p>{!! $article->excerpt !!}</p>
        </article>
    @endforeach
@endsection

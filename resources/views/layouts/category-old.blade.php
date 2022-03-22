@extends('template')

@section('container')
<h1 class="mb-5">Halaman Kategori : {{ $category }}</h1>

@foreach ($articles as $article)
    <ul>
        <li>
            <h2><a href="/categories/{{ $article->slug }}">{{ $category->name }}</a></h2>
    {{-- <p> {{ $article->excerpt }}</p> --}}
        </li>
    </ul>
    @endforeach
@endsection

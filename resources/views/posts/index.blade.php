@extends('layout')

@section('content')
    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2">Créer un article</a>
    @foreach ($posts as $post)
        <div class="bg-white shadow p-4 my-2">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post) }}">Lire plus</a>
        </div>
    @endforeach
@endsection

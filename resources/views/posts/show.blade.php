@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 text-white px-3 py-2">Modifier</a>
    <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline">
        @csrf @method('DELETE')
        <button class="bg-red-500 text-white px-3 py-2">Supprimer</button>
    </form>
@endsection

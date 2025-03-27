@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PUT')
        <input name="title" value="{{ $post->title }}" required class="border w-full p-2 my-2">
        <textarea name="content" required class="border w-full p-2 my-2">{{ $post->content }}</textarea>
        <button class="bg-yellow-500 text-white px-4 py-2">Mettre à jour</button>
    </form>
@endsection

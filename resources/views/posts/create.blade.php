@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input name="title" placeholder="Titre" required class="border w-full p-2 my-2">
        <textarea name="content" placeholder="Contenu" required class="border w-full p-2 my-2"></textarea>
        <button class="bg-green-500 text-white px-4 py-2">Créer</button>
    </form>
@endsection

@extends('layouts.main')

@section('header-title')
    {{ $post->title }}
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <h5 class="anons">
        {{ $post->anons }}
    </h5>
    <p class="post">
        {{ $post->text }}
    </p>
    <p>
        <a href="{{ route('posts.one.edit', $post->id) }}">Редактировать</a>
    </p>
    <p>
        <a href="{{ route('posts.one.delete', $post->id) }}">Удалить</a>
    </p>
@endsection


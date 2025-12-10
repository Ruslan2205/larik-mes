@extends('layouts.main')

@section('header-title')
    Страница постов
@endsection

@section('content')
    <h1>Посты</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores harum itaque iure minima mollitia pariatur provident rem sed. Dignissimos ducimus modi odit ratione voluptatibus. Aliquam asperiores possimus quidem reprehenderit vel!
    </p>

    <div class="class-posts">
        @foreach($posts as $post)
            <div class="class-post">
                <h3 class="title-post">
                    {{ $post->title }}
                </h3>
                <h5 class="anons">
                    {{ $post->anons }}
                </h5>
                <p class="post">
                    {{ $post->text }}
                </p>
                <p>
                    <a href="{{ route('posts.one', $post->id) }}">Подробнее</a>
                </p>
            </div>
        @endforeach
    </div>


@endsection


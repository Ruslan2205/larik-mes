@extends('layouts.main')

@section('header-title')
    Редактировать пост {{ $post->title }}
@endsection

@section('content')



    @include('includes.posteditform')
@endsection


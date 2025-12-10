@php use function Laravel\Prompts\error; @endphp
@extends('layouts.main')

@section('header-title')
    Контакты
@endsection

@section('content')

    @include('includes.contactform')
    @include('includes.aside')
@endsection

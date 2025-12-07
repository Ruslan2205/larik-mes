@extends('layouts.main')

@section('header-title')
    Контакты
@endsection

@section('content')

{{--    <h1>--}}
{{--        Страница контактов--}}
{{--    </h1>--}}
{{--    <form action="{{ route('contacts.post') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">--}}

{{--        @csrf--}}

{{--        <label for="name">{{ __('Name') }}</label>--}}
{{--        <input type="text" name="name" id="name" placeholder="{{ __('Input name') }}" value="{{ old('name') }}">--}}

{{--        <label for="email">{{ __('e-mail') }}</label>--}}
{{--        <input type="text" name="email" id="email" placeholder="{{ __('Input e-mail') }}" value="{{ old('email') }}">--}}

{{--        <label for="subject">{{ __('Subject message') }}</label>--}}
{{--        <input type="text" name="subject" id="subject" placeholder="{{ __('Input subject message') }}" value="{{ old('subject') }}">--}}

{{--        <label for="message">{{ __('Message') }}</label>--}}
{{--        <textarea type="text" name="message" id="message" placeholder="{{ __('Input message') }}">{{ old('message') }}</textarea>--}}

{{--        <button type="submit">{{ __('Submit') }}</button>--}}

{{--    </form>--}}

    @include('includes.contactform')
@endsection

@extends('layouts.app')
@section('title', 'Регистрация')
@section('css', 'css/auth/auth.css')
@section('js', 'js/auth/auth.js')
@section('form')
    <meta name='csrf-token' content="{{csrf_token()}}">
@endsection
@section('content')
    <section>
        <h1 class="title">Регистрация</h1>
        <form class="form" action="{{ route('user.registration')}}" method="POST">
            @csrf
            <input class="input" type="text" placeholder="email" name="email">
                @error('email')
                    <div class="wrapper-error">
                        <p class="message-error">{{ $message }}</p>
                    </div>
                @enderror
            <input class="input" type="password" placeholder="password" name="password">
                @error('password')
                    <div class="wrapper-error">
                        <p class="message-error">{{ $message }}</p>
                    </div>
                @enderror
            <button class="btn" type="submit">Отправить</button>
            @error('formError')
                <div class="wrapper-error">
                    <p class="message-error">{{ $message }}</p>
                </div>
            @enderror
        </form>
    </section>
@endsection
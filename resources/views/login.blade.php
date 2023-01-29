@extends('layouts.site')

@section('title')
    Логин
@endsection

@section('content')
    <form method="post" class="login">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        @csrf
        <button type="submit">отправить</button>
    </form>
    <p>
        не зарегестрированы?
        <a href="/registration">
            Зарегестрироваться
        </a>
    </p>
@endsection

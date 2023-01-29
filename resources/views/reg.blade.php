@extends('layouts.site')

@section('title')
    Регистрация
@endsection

@section('content')
    <form method="post" class="registration">
        <input type="text" placeholder="name">
        <input type="email" placeholder="email">
        <input type="password1" placeholder="password">
        <input type="password2" placeholder="repeat password">
        <button type="submit">отправить</button>
        @csrf
    </form>
@endsection

@section('js')
    <script src="js/registration.js"></script>
@endsection

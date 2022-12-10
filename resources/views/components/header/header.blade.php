<header class="header">
    <a href={{route('home')}}>Главная</a>
    @if (Auth::check())
        <a href={{route('user.logout')}}>Выход</a>
    @else
        <a href={{route('user.login')}}>Вход</a>
        <a href={{route('user.registration')}}>Регистрация</a>
    @endif
</header>
<nav>
    <div>
        <a href="/about">О нас</a>
        <a href="/catalog">Каталог</a>
        <a href="/info">Где нас найти</a>
        @if((Auth::user()))
            <a href="/logout">Выйти</a>
        @else
            <a href="/login">Войти</a>
        @endif
    </div>
</nav>

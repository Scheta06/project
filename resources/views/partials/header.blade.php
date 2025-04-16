<header class="header partials-background row-for-over-length full-width">
    <div class="left-header for-length">
        <a href="{{ route('home') }}" class="logotype center bold-huge-font bright-button-style">
            EHS
        </a>
        <a href="" class="catalog center bold-huge-font bright-button-style">
            Каталог
        </a>
    </div>
    <div class="right-header for-length bold-medium-font">
        <a href="{{ route('profile') }}">
            @if (Auth::check())
                {{ $userData->name }}
            @else
                Профиль
            @endif
        </a>
    </div>
</header>

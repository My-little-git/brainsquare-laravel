<header class="header">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ Vite::images('logo/logo.svg') }}" alt="" class="header__logo">
        </a>
    </div>

    <div class="auth">
        <a href="{{ route('login') }}" class="auth-button">Войти</a>
    </div>
</header>

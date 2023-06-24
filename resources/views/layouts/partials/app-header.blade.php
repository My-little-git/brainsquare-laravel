<header class="header">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ Vite::images('logo/logo.svg') }}" alt="" class="header__logo">
        </a>
    </div>

    <div class="auth">

        @auth('admin')

            <form action="{{ route('admin.logout') }}" method="POST">
                <button type="submit" class="logout-button">Выйти</button>
                @csrf
            </form>

        @elseauth('teacher')



        @elseauth('student')

            <div class="d-flex align-items-center">
                <h2 class="me-4">{{ auth()->user()->email }}</h2>

                <form action="{{ route('logout') }}" method="POST">
                    <button type="submit" class="logout-button">Выйти</button>
                    @csrf
                </form>
            </div>

        @else

            <a href="{{ route('login') }}" class="auth-button">Войти</a>

        @endauth
    </div>
</header>

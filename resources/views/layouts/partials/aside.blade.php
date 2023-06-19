<aside class="aside">
    <nav class="aside__links">
        <a class="aside__link {{ Route::is('home') ? "aside__link-active" : "" }}" href="{{ route('home') }}">
            <div class="link-main">Главная</div>
        </a>
        <a class="aside__link {{ Route::is('schedule') ? "aside__link-active" : "" }}" href="{{ route('schedule') }}">
            <div class="link-schedule">Расписание</div>
        </a>
        <a class="aside__link {{ Route::is('homework') ? "aside__link-active" : "" }}" href="{{ route('homework') }}">
            <div class="link-homework">Домашняя работа</div>
        </a>
        <a class="aside__link {{ Route::is('course.index') ? "aside__link-active" : "" }}" href="{{ route('course.index') }}">
            <div class="link-courses">Курсы</div>
        </a>
        <a class="aside__link {{ Route::is('performance') ? "aside__link-active" : "" }}" href="{{ route('performance') }}">
            <div class="link-performance">Успеваемость</div>
        </a>
    </nav>
</aside>

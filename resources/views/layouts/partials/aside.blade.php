<aside class="aside">

    @auth('admin')

        <nav class="aside__links">
            <div class="title">Админ панель</div>
            <a class="aside__link {{ Route::is('admin.teacher.*') ? "aside__link-active" : "" }}" href="{{ route('admin.teacher.index') }}">
                <div class="link-teachers-admin">Учителя</div>
            </a>
            <a class="aside__link {{ Route::is('admin.student.*') ? "aside__link-active" : "" }}" href="{{ route('admin.student.index') }}">
                <div class="link-students-admin">Студенты</div>
            </a>
            <a class="aside__link {{ Route::is('admin.course.*') ? "aside__link-active" : "" }}" href="{{ route('admin.course.index') }}">
                <div class="link-courses-admin">Курсы</div>
            </a>
            <a class="aside__link {{ Route::is('admin.lesson.*') ? "aside__link-active" : "" }}" href="{{ route('admin.lesson.index') }}">
                <div class="link-lessons-admin">Занятия</div>
            </a>
            <a class="aside__link {{ Route::is('admin.subject.*') ? "aside__link-active" : "" }}" href="{{ route('admin.subject.index') }}">
                <div class="link-subjects-admin">Предметы</div>
            </a>
            <a class="aside__link {{ Route::is('admin.order.*') ? "aside__link-active" : "" }}" href="{{ route('admin.order.index') }}">
                <div class="link-orders-admin">Заказы</div>
            </a>
            <a class="aside__link {{ Route::is('admin.center.*') ? "aside__link-active" : "" }}" href="{{ route('admin.center.index') }}">
                <div class="link-centers-admin">Центры</div>
            </a>
            <a class="aside__link {{ Route::is('admin.coupon.*') ? "aside__link-active" : "" }}" href="{{ route('admin.coupon.index') }}">
                <div class="link-coupons-admin">Купоны</div>
            </a>
        </nav>

    @elseauth('teacher')

    @elseauth('student')

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

    @else

        <nav class="aside__links">
            <a class="aside__link {{ Route::is('home') ? "aside__link-active" : "" }}" href="{{ route('home') }}">
                <div class="link-main">Главная</div>
            </a>
            <a class="aside__link {{ Route::is('course.index') ? "aside__link-active" : "" }}" href="{{ route('course.index') }}">
                <div class="link-courses">Курсы</div>
            </a>
        </nav>

    @endauth
</aside>

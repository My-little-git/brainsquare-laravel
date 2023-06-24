@extends('layouts.app-master')

@section('title', 'Курсы')

@section('content')

    <section id="course-index">
        <div class="app-container">
            <div class="section__title">Курсы</div>
            <div class="courses">
                <div class="cards">

                    @foreach($courses as $course)

                        <div class="card">
                            <div class="badges">
                                <span class="type">{{ $course->course_type->name }}</span>
                                <span class="subject" style="background: {{ $course->subject->color }}">{{ $course->subject->name }}</span>
                            </div>
                            <div class="title">{{ $course->name }}</div>
                            <div class="info">
                                <div class="center"><img src="{{ Vite::images('icons/location.svg') }}" alt="">{{ $course->audience->center->name }}</div>
                                <div class="lessons"><img src="{{ Vite::images('icons/time.svg') }}" alt="">{{ $course->lessons }} занятий</div>
                                <div class="date"><img src="{{ Vite::images('icons/calendar.svg') }}" alt="">{{ $course->start_at->format('d.m.y') }} - {{ $course->end_at->format('d.m.y') }}</div>
                            </div>
                            <div class="teacher__info teacher">
                                <img class="teacher__avatar" src="{{ asset('/storage/' . $course->teacher->avatar) }}" alt="">
                                <div class="teacher__name">{{ $course->teacher->initials() }}</div>
                                <button class="teacher__info-button">i</button>
                            </div>
                            <div class="footer">
                                <div class="price"><span class="number">{{ $course->perLesson() }} ₽</span> за занятие</div>
                                <div class="control">
                                    <button class="details">Подробнее</button>
                                    <button class="add">Выбрать</button>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
                <form class="filters">
                    <div class="filter search">
                        <div class="title">Поиск по курсам</div>
                        <input type="text" class="search__input" placeholder="Введите название курса">
                    </div>
                    <div class="filter duration">
                        <div class="title">Длительность</div>
                        <div id="range"></div>
                    </div>
                    <div class="filter subject">
                        <div class="title">Предмет</div>
                        <div class="subjects">
                            <div>
                                <input name="subject" class="subject" id="subject-1" value="1" type="checkbox">
                                <label for="subject-1">Информатика</label>
                            </div>
                            <div>
                                <input name="subject" class="subject" id="subject-2" value="2" type="checkbox">
                                <label for="subject-2">Математика</label>
                            </div>
                        </div>
                        <div class="more"><img src="{{ Vite::images('icons/arrow-down.svg') }}" alt="">ЕЩЁ 7 ПРЕДМЕТОВ</div>
                    </div>
                </form>
            </div>
            <div class="teacher-modal__wrapper d-none">
                <div class="modal">
                    <button class="close"></button>
                    <div class="info">
                        <div class="name">Евгения Клочева</div>
                        <ul class="description">
                            <li class="text">Сдала информатику на 100 баллов</li>
                            <li class="text">Сдала информатику на 100 баллов</li>
                        </ul>
                        <div class="advantages">
                            <div class="advantage">
                                <div class="title">24</div>
                                <div class="subtitle">Кол-во стобальников</div>
                            </div>
                            <div class="advantage">
                                <div class="title">с 2018 года</div>
                                <div class="subtitle">Опыт работы</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    @vite(['resources/js/courses.js'])

@endsection

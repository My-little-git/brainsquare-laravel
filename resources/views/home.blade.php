@extends('layouts.app-master')

@section('title', 'Главная')

@section('content')

    <section id="home">
        <div class="app-container">

            <div class="ad__wrapper d-none">
                @include('layouts.partials.ad')
            </div>

            <div class="events">
                <div class="section__title">Ближайшие события</div>
                @auth('student')

                    <div class="table">
                        <div class="titles grid">
                            <div>Время</div>
                            <div>Группа</div>
                            <div>Тема</div>
                            <div>Предмет</div>
                            <div>Аудитория</div>
                        </div>
                        <div class="body">
                            <div class="day-wrapper">
                                <div class="day">cегодня</div>
                                <div class="card">
                                    <div class="grid">
                                        <div>18:30-20:00</div>
                                        <div class="group"><img class="lesson-type__icon" src="{{ Vite::images('icons/group.svg') }}" alt="">Информатика 10-11 кл Питон 1 гр. Осипов</div>
                                        <div>25 задача. Маска. Модуль fnmatvh</div>
                                        <div>Информатика</div>
                                        <div><a class="geo" href="https://yandex.ru/maps?text=Сыктывкар, просп. Бумажников, 37А" target="_blank">Эжва, Триумф</a>, 238 каб.</div>
                                        <button class="menu-button"></button>
                                    </div>
                                    <div class="menu d-none">
                                        <a href="">Не смогу прийти</a>
                                        <a href="">Домашнее задание</a>
                                    </div>
                                </div>
                            </div>
                            <div class="day-wrapper">
                                <div class="day">завтра</div>
                                <div class="card">
                                    <div class="grid">
                                        <div>13:00-14:30</div>
                                        <div class="group"><img class="lesson-type__icon" src="{{ Vite::images('icons/person.svg') }}" alt="">Симоненко Анастасия</div>
                                        <div>14 задача</div>
                                        <div>Английский язык</div>
                                        <div><a class="geo" href="https://yandex.ru/maps?text=Сыктывкар, Тентюковская улица, 320" target="_blank">Сыктывкар, Антлантида</a>, 429 каб.</div>
                                        <button class="menu-button"></button>
                                    </div>
                                    <div class="menu d-none">
                                        <a href="">Не смогу прийти</a>
                                        <a href="">Домашнее задание</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endauth
            </div>
        </div>
    </section>

@endsection


@section('scripts')

    @vite(['resources/js/home.js'])

@endsection

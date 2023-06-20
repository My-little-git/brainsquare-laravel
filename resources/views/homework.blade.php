@extends('layouts.app-master')

@section('title', 'Домашние задания')

@section('content')

    <section id="homework">
        <div class="app-container">
            <div class="homework">
                <div class="section__title">Домашние работы</div>
                <div class="table">
                    <div class="titles grid">
                        <div>Время</div>
                        <div>Группа</div>
                        <div>Тема</div>
                        <div>Предмет</div>
                        <div>Учитель</div>
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
                                    <div class="teacher__info">
                                        <img src="{{ Vite::images('avatars/klocheva.png') }}" alt="" class="teacher__avatar">
                                        <span class="teacher__name">Евгения Клочева</span>
                                    </div>
                                    <button class="menu-button"></button>
                                </div>
                                <div class="homework">

                                    <div class="files">
                                        <div class="title">Файлы:</div>
                                        <a href="" class="file">Домашняя работа.txt</a>
                                    </div>
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
                                    <div class="teacher__info">
                                        <img src="{{ Vite::images('avatars/shafaruk.png') }}" alt="" class="teacher__avatar">
                                        <span class="teacher__name">Ильдика Шафарук</span>
                                    </div>
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
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    @vite('resources/js/homework.js')

@endsection

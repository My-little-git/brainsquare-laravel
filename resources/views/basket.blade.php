@extends('layouts.app-master')

@section('title', 'Корзина')

@section('content')

<section id="basket">
    <div class="app-container">
        <div class="note">Стоимость на полугодовую и годовую программы распределяется таким образом, что скидка применяется на последний месяц</div>
        <div class="basket">
            <div class="courses">
                <div class="cards">
                    <div class="card">
                        <div class="description">
                            <div class="badges">
                                <span class="type">Группа</span>
                                <span class="subject">Математика</span>
                            </div>
                            <div class="title">Подготовка к ЕГЭ по профильной математике</div>
                            <div class="info">
                                <div class="teacher__info teacher">
                                    <img class="teacher__avatar" src="{{ Vite::images('avatars/klocheva.png') }}" alt="">
                                    <div class="teacher__name">Евгения Клочева</div>
                                    <button class="teacher__info-button">i</button>
                                </div>
                                <div class="lessons"><img src="{{ Vite::images('icons/time.svg') }}" alt="">24 занятия</div>
                            </div>
                        </div>
                        <div class="options">
                            <div class="lessons">24 занятия</div>
                            <div class="price">12 000 ₽</div>
                            <div class="per-lesson">500 ₽ за занятие</div>
                        </div>
                            <button class="delete"></button>
                    </div>
                </div>
                <a href="{{ route('course.index') }}" class="add">Добавить ещё</a>
            </div>
            <div class="payment">
                <div class="result">
                    <div class="text">К оплате</div>
                    <div class="number">12 000 ₽</div>
                </div>
                <div class="calculations">
                    <div class="sum">
                        <div class="text">Сумма заказа</div>
                        <div class="number">12 000 ₽</div>
                    </div>
                    <div class="discount">
                        <div class="text">Скидка</div>
                        <div class="number">3 000₽</div>
                    </div>
                </div>
                <div class="promo-code">
                    <div class="control">У меня есть промокод</div>
                    <form action="" class="d-none">
                        <input type="text" class="promo">
                        <button type="submit" class="submit">
                    </form>
                </div>
                <button class="to-payment">Перейти к оплате</button>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

    @vite(['resources/js/basket.js'])

@endsection

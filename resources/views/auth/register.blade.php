@extends('layouts.auth-master')

@section('title', 'Регистрация')

@section('content')

    <section class="auth">
        <div class="auth-container">
            <div class="main__wrapper">
                <form action="" class="auth-form">
                    <div class="body">
                        <h3 class="title">Регистрация</h3>
                        <input type="text" name="name" class="input-person" placeholder="Имя">
                        <input type="text" name="surname" class="input-person" placeholder="Фамилия">
                        <input type="text" name="password" class="input-password" placeholder="Пароль">
                        <button class="submit">Дальше</button>
                    </div>
                    <div class="footer">
                        <span>Уже есть аккаунт?</span>
                        <a href="{{ route('login') }}">Войдите</a>
                    </div>
                </form>
                <img src="{{ Vite::images('auth/keys.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection

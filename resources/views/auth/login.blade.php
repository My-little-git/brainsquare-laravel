@extends('layouts.auth-master')

@section('title', 'Вход')

@section('content')

    <section class="auth">
        <div class="auth-container">
            <div class="main__wrapper">
                <form action="{{ route('login-process') }}" method="POST" class="auth-form">
                    <div class="body">
                        <h3 class="title">Вход</h3>
                        <input type="email" name="email" class="input-email" placeholder="Электронная почта">
                        <input type="text" name="password" class="input-password" placeholder="Пароль">
                        <div class="forgot">
                            <a href="">Забыли пароль?</a>
                        </div>
                        <button type="submit" class="submit">Войти</button>
                    </div>
                    <div class="footer">
                        <span>Нет профиля?</span>
                        <a href="{{ route('register') }}">Зарегистрируйтесь</a>
                    </div>
                    @csrf
                </form>
                <img src="{{ Vite::images('auth/keys.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection

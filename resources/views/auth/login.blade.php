@extends('layouts.auth-master')

@section('title', 'Вход')

@section('content')

    <section class="auth">
        <div class="auth-container">
            <div class="main__wrapper">
                <form action="{{ route('login-process') }}" method="POST" class="auth-form">
                    <div class="body">
                        <h3 class="title">Вход</h3>
                        <div class="col">
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="email"
                                               name="email"
                                               required
                                               value="{{ old('email') }}"
                                               class="input-email form-control @error('email') is-invalid @enderror"
                                               placeholder="Электронная почта">
                                        @error('email')
                                            <small class="error-text">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="password"
                                               name="password"
                                               required
                                               value="{{ old('password') }}"
                                               class="input-password form-control"
                                               placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 remember">
                                            <input type="checkbox"
                                                   class="form-checkbox"
                                                   name="remember"
                                                   {{ old('remember') ? "checked" : "" }}
                                                   value="1"
                                                   id="remember">
                                            <label for="remember">Запомнить меня</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            </form>
        </div>
    </section>

@endsection

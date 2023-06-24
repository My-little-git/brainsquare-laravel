@extends('layouts.auth-master')

@section('title', 'Регистрация')

@section('content')

    <section class="auth">
        <div class="auth-container">
            <div class="main__wrapper">
                <form action="{{ route('register-process') }}" method="POST" class="auth-form">
                    <div class="body">
                        <h3 class="title">Регистрация</h3>
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text"
                                           required
                                           name="surname"
                                           value="{{ old('surname') }}"
                                           class="input-person form-control @error('surname') is-invalid @enderror"
                                           placeholder="Фамилия*">
                                    @error('surname')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text"
                                           required
                                           name="name"
                                           value="{{ old('name') }}"
                                           class="input-person form-control @error('name') is-invalid @enderror"
                                           placeholder="Имя*">
                                    @error('name')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text"
                                           name="patronymic"
                                           value="{{ old('patronymic') }}"
                                           class="input-person form-control @error('patronymic') is-invalid @enderror"
                                           placeholder="Отчество">
                                    @error('patronymic')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="date"
                                           required
                                           name="birthday"
                                           value="{{ old('birthday') }}"
                                           class="input-date form-control @error('birthday') is-invalid @enderror"
                                           placeholder="День рождения">
                                    @error('birthday')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="email"
                                           required
                                           name="email"
                                           value="{{ old('email') }}"
                                           class="input-email form-control @error('email') is-invalid @enderror"
                                           placeholder="Электронная почта*">
                                    @error('email')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text"
                                           required
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           class="input-phone form-control @error('phone') is-invalid @enderror"
                                           placeholder="Телефон*">
                                    @error('phone')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="password"
                                           required
                                           name="password"
                                           value="{{ old('passwod') }}"
                                           class="input-password form-control @error('password') is-invalid @enderror"
                                           placeholder="Пароль*">
                                    @error('password')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="password"
                                           required
                                           name="password_confirmation"
                                           value="{{ old('password_confirmation') }}"
                                           class="input-password form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Повторите пароль*">
                                    @error('password_confirmation')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="submit next">Зарегистрироваться</button>
                    </div>
                    <div class="footer">
                        <span>Уже есть аккаунт?</span>
                        <a href="{{ route('login') }}">Войдите</a>
                    </div>
                    @csrf
                </form>
                <img src="{{ Vite::images('auth/keys.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>

    </script>

@endsection

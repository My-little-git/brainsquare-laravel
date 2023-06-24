@extends('layouts.app-master')

@section('title', 'Добавление учителя')

@section('content')

    <section id="admin" class="create">
        <div class="app-container">
            <div class="section__title">Добавление учителя</div>

            <div class="wrapper">

                <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3 g-5 align-items-center">
                        <div class="col-auto d-flex flex-column">
                            <input type="file" name="avatar" id="avatar" accept="image/*" />
                            <div id="preview-wrapper">
                                <div id="preview" style="background: url({{ asset('storage/avatars/no-image.png') }}) no-repeat center center / cover"></div>
                                <button
                                    type="button"
                                    id="upload-button"
                                    aria-label="upload image"
                                    aria-describedby="image"
                                >
                                    🙂
                                </button>
                            </div>
                            @error('avatar')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="surname" class="form-label">Фамилия</label>
                                    <input name="surname"
                                           id="surname"
                                           value="{{ old('surname') }}"
                                           class="form-control @error('surname') is-invalid @enderror"
                                           required
                                           type="text">
                                    @error('surname')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="form-label">Имя</label>
                                    <input name="name"
                                           id="name"
                                           value="{{ old('name') }}"
                                           class="form-control @error('name') is-invalid @enderror"
                                           required
                                           type="text">
                                    @error('name')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label" for="education">Образование</label>
                            <select name="education_id" id="education" class="form-select @error('education_id') is-invalid @enderror" required>
                                <option disabled {{ old('education_id') ? "" : "selected" }}>-- Выберите образование --</option>

                                @foreach($educations as $education)

                                    <option value="{{ $education->id }}"
                                        {{ old('education_id') === $education->id ? "selected" : "" }}>{{ $education->name }}</option>

                                @endforeach
                            </select>
                            @error('education_id')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input name="email"
                                   id="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   required
                                   type="text">
                            @error('email')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">Телефон</label>
                            <input name="phone"
                                   id="phone"
                                   value="{{ old('phone') }}"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   minlength="11"
                                   maxlength="11"
                                   required
                                   type="text">
                            @error('phone')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="birthday" class="form-label">День рождения</label>
                            <input name="birthday"
                                   id="birthday"
                                   value="{{ old('birthday') }}"
                                   class="form-control @error('birthday') is-invalid @enderror"
                                   required
                                   type="date">
                            @error('birthday')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="password" class="form-label">Пароль</label>
                            <input name="password"
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required>
                            @error('password')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="password_confirmation" class="form-label">Повторите пароль</label>
                            <input name="password_confirmation"
                                type="password"
                                id="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                required>
                            @error('password_confirmation')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto d-flex align-items-end">
                            <button class="btn" type="submit">Добавить</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    @vite(['resources/js/admin.js'])

@endsection

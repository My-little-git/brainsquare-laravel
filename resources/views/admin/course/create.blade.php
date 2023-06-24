@extends('layouts.app-master')

@section('title', 'Создание курса')

@section('content')

    <section id="admin" class="create">
        <div class="app-container">
            <div class="section__title">Создание курса</div>
            <div class="wrapper">
                <form action="{{ route('admin.course.store') }}" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label" for="name">Название</label>
                            <input name="name"
                                   type="text"
                                   id="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}">
                            @error('name')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label" for="subject">Предмет</label>
                            <select name="subject_id" id="subject" class="form-select @error('subject_id') is-invalid @enderror" required>
                                <option disabled {{ old('subject_id') ?: "selected" }}>-- Выберите предмет --</option>

                                @foreach($subjects as $subject)

                                    <option value="{{ $subject->id }}"
                                        {{ old('subject_id') === $subject->id ? "selected" : "" }}>{{ $subject->name }}</option>

                                @endforeach
                            </select>
                            @error('subject_id')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label" for="course-type">Тип курса</label>
                            <select name="course_type_id" id="course-type" class="form-select @error('course_type_id') is-invalid @enderror" required>
                                <option disabled {{ old('course_type_id') ?: "selected" }}>-- Выберите тип курса --</option>

                                @foreach($course_types as $course_type)

                                    <option value="{{ $course_type->id }}"
                                        {{ old('course_type_id') === $course_type->id ? "selected" : "" }}>{{ $course_type->name }}</option>

                                @endforeach
                            </select>
                            @error('course_type_id')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label" for="teacher">Учитель</label>
                            <select name="teacher_id" id="teacher" class="form-select @error('teacher_id') is-invalid @enderror" required>
                                <option disabled {{ old('teacher_id') ?: "selected" }}>-- Выберите учителя --</option>

                                @foreach($teachers as $teacher)

                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id') === $teacher->id ? "selected" : "" }}>{{ $teacher->initials() }}</option>

                                @endforeach
                            </select>
                            @error('teacher_id')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-1">
                            <label class="form-label" for="seats">Места</label>
                            <input name="seats"
                                   type="number"
                                   id="seats"
                                   class="form-control @error('seats') is-invalid @enderror"
                                   value="{{ old('seats') }}">
                            @error('seats')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-1">
                            <label class="form-label" for="lessons">Занятия</label>
                            <input name="lessons"
                                   type="number"
                                   id="lessons"
                                   class="form-control @error('lessons') is-invalid @enderror"
                                   value="{{ old('lessons') }}">
                            @error('lessons')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    @foreach($errors as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    <div class="row mb-4">
                        <div class="col-4">
                            <label class="form-label" for="start_at">Даты проведения курса</label>
                            <div class="row">
                                <div class="col">
                                    <input name="start_at"
                                           type="date"
                                           id="start_at"
                                           class="form-control @error('start_at') is-invalid @enderror"
                                           value="{{ old('start_at') }}">
                                    @error('start_at')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input name="end_at"
                                           type="date"
                                           id="end_at"
                                           class="form-control @error('end_at') is-invalid @enderror"
                                           value="{{ old('end_at') }}">
                                    @error('end_at')
                                    <small class="error-text">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="form-label" for="start_at">Дни недели</label>
                            <div class="row g-3">
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="monday" value="1">
                                    <label for="monday" class="label-day">ПН</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="tuesday" value="2">
                                    <label for="tuesday" class="label-day">ВТ</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="wednesday" value="3">
                                    <label for="wednesday" class="label-day">СР</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="thursday" value="4">
                                    <label for="thursday" class="label-day">ЧТ</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="friday" value="5">
                                    <label for="friday" class="label-day">ПТ</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="saturday" value="6">
                                    <label for="saturday" class="label-day">СБ</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="input-day" name="days[]" id="sunday" value="7">
                                    <label for="sunday" class="label-day">ВС</label>
                                </div>
                            </div>
                            @error('days')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <label for="time" class="form-label">Время</label>
                            <input type="time" name="time" class="form-control @error('time') is-invalid @enderror">
                            @error('time')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn">Добавить</button>
                    @csrf
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    @vite(['resources/js/admin.js'])

@endsection

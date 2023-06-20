@extends('layouts.app-master')

@section('title', 'Создание курса')

@section('content')

    <section id="admin" class="create">
        <div class="app-container">
            <div class="section__title">Создание курса</div>
            <form action="{{ route('admin.course.store') }}" method="POST">
                <div class="row">
                    <div class="mb-3 col">
                        <label class="form-label" for="name">Название</label>
                        <input name="name"
                               type="text"
                               id="name"
                               class="form-control"
                               value="{{ old('name') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-2">
                        <label class="form-label" for="subject">Предмет</label>
                        <select name="subject_id" id="subject" class="form-select" required>
                            <option disabled {{ old('subject_id') ?: "selected" }}>-- Выберите предмет --</option>

                            @foreach($subjects as $subject)

                                <option value="{{ $subject->id }}"
                                    {{ old('subject_id') === $subject->id ? "selected" : "" }}>{{ $subject->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label class="form-label" for="course-type">Тип курса</label>
                        <select name="course_type_id" id="course-type" class="form-select" required>
                            <option disabled {{ old('course_type_id') ?: "selected" }}>-- Выберите тип курса --</option>

                            @foreach($course_types as $course_type)

                                <option value="{{ $course_type->id }}"
                                    {{ old('course_type_id') === $course_type->id ? "selected" : "" }}>{{ $course_type->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label class="form-label" for="teacher">Учитель</label>
                        <select name="teacher_id" id="teacher" class="form-select" required>
                            <option disabled {{ old('teacher_id') ?: "selected" }}>-- Выберите учителя --</option>

                            @foreach($teachers as $teacher)

                                <option value="{{ $teacher->id }}"
                                    {{ old('teacher_id') === $teacher->id ? "selected" : "" }}>{{ $teacher->initials() }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-2">
                        <label class="form-label" for="seats">Количество мест</label>
                        <input name="seats"
                               type="number"
                               id="seats"
                               class="form-control"
                               value="{{ old('seats') }}">
                    </div>
                    <div class="mb-3 col-2">
                        <label class="form-label" for="lessons">Количество занятий</label>
                        <input name="lessons"
                               type="number"
                               id="lessons"
                               class="form-control"
                               value="{{ old('lessons') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-4">
                        <label class="form-label" for="start_at">Даты проведения курса</label>
                        <div class="row">
                            <div class="col">
                                <input name="start_at"
                                       type="date"
                                       id="start_at"
                                       class="form-control"
                                       value="{{ old('start_at') }}">
                            </div>
                            <div class="col">
                                <input name="end_at"
                                       type="date"
                                       id="end_at"
                                       disabled
                                       class="form-control"
                                       value="{{ old('end_at') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="start_at">Дни недели</label>
                        <div class="row g-2">
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="monday" value="1">
                                <label for="monday" class="label-day">ПН</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="tuesday" value="2">
                                <label for="tuesday" class="label-day">ВТ</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="wednesday" value="3">
                                <label for="wednesday" class="label-day">СР</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="thursday" value="4">
                                <label for="thursday" class="label-day">ЧТ</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="friday" value="5">
                                <label for="friday" class="label-day">ПТ</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="saturday" value="6">
                                <label for="saturday" class="label-day">СБ</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="input-day" name="days" id="sunday" value="7">
                                <label for="sunday" class="label-day">ВС</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn">Добавить</button>
            </form>
        </div>
    </section>

@endsection

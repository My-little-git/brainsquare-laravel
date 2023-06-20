@extends('layouts.app-master')

@section('title', 'Все курсы')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все курсы</div>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Учитель</th>
                        <th>Предмет</th>
                        <th>Тип занятия</th>
                        <th>Кол-во занятий</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($courses as $course)

                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->teacher->initials }}</td>
                            <td>{{ $course->subject->name }}</td>
                            <td>{{ $course->course_type->name }}</td>
                            <td>{{ $course->lessons }}</td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

            <a href="{{ route('admin.course.create') }}" class="btn-outline">Добавить курс</a>
        </div>
    </section>

@endsection

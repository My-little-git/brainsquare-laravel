@extends('layouts.app-master')

@section('title', 'Все учителя')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все учителя</div>

            <div class="wrapper">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Образование</th>
                        <th scope="col">День рождения</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($teachers as $teacher)

                        <tr>
                            <th scope="row">{{ $teacher->id }}</th>
                            <td>{{ $teacher->surname }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->education->name }}</td>
                            <td>{{ $teacher->birthday->format('d.m.Y') }}</td>
                            <td>
                                <a href="{{ route('admin.teacher.edit', $teacher->id) }}">✏️</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <a href="{{ route('admin.teacher.create') }}" class="btn-outline">Добавить учителя</a>
            </div>
        </div>
    </section>

@endsection

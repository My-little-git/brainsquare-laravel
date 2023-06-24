@extends('layouts.app-master')

@section('title', 'Все предметы')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все предметы</div>

            <div class="wrapper">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цвет</th>
                        <th scope="col">Кол-во курсов</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($subjects as $subject)

                        <tr>
                            <th scope="row">{{ $subject->id }}</th>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->color }} <span style="color: {{ $subject->color }}">■</span></td>
                            <td>{{ $subject->courses->count() }}</td>
                            <td>
                                <a href="{{ route('admin.subject.edit', $subject->id) }}">✏️</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.subject.destroy', $subject->id) }}" method="POST">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <form action="{{ route('admin.subject.store') }}" hidden class="short-form" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Наименование</label>
                            <input name="name" id="name" class="form-control" required type="text">
                        </div>
                        <div class="col-1">
                            <label for="color" class="form-label">Цвет</label>
                            <input name="color" id="color" class="form-color" required type="color">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-auto d-flex align-items-end">
                            <button class="btn" type="submit">Добавить</button>
                        </div>
                    </div>
                    @csrf
                </form>

                <button id="add-control" class="btn-outline">Добавить предмет</button>
            </div>
        </div>
    </section>

@endsection


@section('scripts')

    @vite(['resources/js/admin.js'])

@endsection

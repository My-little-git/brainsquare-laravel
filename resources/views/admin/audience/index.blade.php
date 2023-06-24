@extends('layouts.app-master')

@section('title', 'Все аудитории')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все аудитории</div>

            <div class="wrapper">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($audiences as $audience)

                        <tr>
                            <th scope="row">{{ $audience->id }}</th>
                            <td>{{ $audience->name }}</td>
                            <td>
                                <a href="{{ route('admin.audience.edit', $audience->id) }}">✏️</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.audience.destroy', $audience->id) }}">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <form action="{{ route('admin.audience.store') }}" class="short-form" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Наименование</label>
                            <input name="name" id="form" class="form-control" required type="text">
                        </div>
                        <div class="col-auto d-flex align-items-end">
                            <button class="btn" type="submit">Добавить</button>
                        </div>
                    </div>
                </form>

                <button id="add" class="btn-outline">Добавить аудиторию</button>
            </div>
        </div>
    </section>

@endsection

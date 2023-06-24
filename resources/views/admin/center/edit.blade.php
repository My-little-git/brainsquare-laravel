@extends('layouts.app-master')

@section('title', 'Редактирование предмета')

@section('content')

    <section id="admin" class="edit">
        <div class="app-container">
            <div class="section__title">Редактирование центра</div>

            <div class="wrapper mb-4">
                <form action="{{ route('admin.center.update', $center->id) }}" method="POST">
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="name" class="form-label">Наименование</label>
                            <input
                                name="name"
                                id="name"
                                value="{{ old('name') ?: $center->name }}"
                                class="form-control @error('name') is-invalid @enderror"
                                required
                                type="text">
                            @error('name')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="city" class="form-label">Город</label>
                            <input
                                name="city"
                                id="city"
                                value="{{ old('city') ?: $center->city }}"
                                class="form-control @error('city') is-invalid @enderror"
                                required
                                type="text">
                            @error('city')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="address" class="form-label">Адрес</label>
                            <input
                                name="address"
                                id="address"
                                value="{{ old('address') ?: $center->address }}"
                                class="form-control @error('address') is-invalid @enderror"
                                required
                                type="text">
                            @error('address')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto d-flex align-items-end">
                            <button class="btn" type="submit">Изменить</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
            <div class="wrapper">
                <h3 class="mb-4">Аудитории</h3>
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
                                    <form action="{{ route('admin.audience.destroy', $audience->id) }}" method="POST">
                                        @method('delete')
                                        <button class="btn-link" type="submit">❌</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <form action="{{ route('admin.audience.store') }}" hidden class="short-form mb-4" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Наименование</label>
                            <input
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                required
                                type="text">
                            @error('name')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <input
                            name="center_id"
                            id="center"
                            hidden
                            value="{{ $center->id }}"
                            class="form-control d-none @error('name') is-invalid @enderror"
                            required
                            type="text">
                    </div>
                    <div class="row">
                        <div class="col-auto d-flex align-items-end">
                            <button class="btn" type="submit">Добавить</button>
                        </div>
                    </div>
                    @csrf
                </form>

                <button id="add-control" class="btn-outline">Добавить</button>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    @vite(['resources/js/admin.js'])

@endsection

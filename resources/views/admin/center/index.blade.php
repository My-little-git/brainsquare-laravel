@extends('layouts.app-master')

@section('title', 'Все центры')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все центры</div>

            <div class="wrapper">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Город</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Кол-во аудиторий</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($centers as $center)

                        <tr>
                            <th scope="row">{{ $center->id }}</th>
                            <td>{{ $center->name }}</td>
                            <td>{{ $center->city }}</td>
                            <td>{{ $center->address }}</td>
                            <td>{{ $center->audiences->count() }}</td>
                            <td>
                                <a href="{{ route('admin.center.edit', $center->id) }}">✏️</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.center.destroy', $center->id) }}" method="POST">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <form action="{{ route('admin.center.store') }}" {{ old('name') ?: "hidden" }} class="short-form mb-4" method="POST">
                    <div class="row mb-3">
                        <div class="col-3">
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
                        <div class="col-3">
                            <label for="city" class="form-label">Город</label>
                            <input
                                name="city"
                                id="city"
                                value="{{ old('city') }}"
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
                                value="{{ old('address') }}"
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

    <script src="https://api-maps.yandex.ru/2.1/?apikey=5570b97f-ecdc-47d7-863b-9de8b1315037&lang=ru_RU"></script>
    @vite(['resources/js/admin.js'])

@endsection

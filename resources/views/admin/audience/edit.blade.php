@extends('layouts.app-master')

@section('title', 'Редактирование ')

@section('content')

    <section id="admin" class="edit">
        <div class="app-container">
            <div class="section__title">Редактирование кабинета</div>

            <div class="wrapper">
                <form action="{{ route('admin.audience.update', $audience->id) }}" method="POST">
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Наименование</label>
                            <input
                                name="name"
                                id="name"
                                value="{{ old('name') ?: $audience->name }}"
                                class="form-control @error('name') is-invalid @enderror"
                                required
                                type="text">
                            @error('name')
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
        </div>
    </section>

@endsection



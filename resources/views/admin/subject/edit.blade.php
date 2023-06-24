@extends('layouts.app-master')

@section('title', 'Редактирование предмета')

@section('content')

    <section id="admin" class="edit">
        <div class="app-container">
            <div class="section__title">Редактирование предмета</div>

            <div class="wrapper">

                <form action="{{ route('admin.subject.update', $subject->id) }}" class="short-form" method="POST">
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Наименование</label>
                            <input name="name"
                                   id="name"
                                   value="{{ old('name') ?: $subject->name }}"
                                   class="form-control"
                                   required
                                   type="text">
                        </div>
                        <div class="col-1">
                            <label for="color" class="form-label">Цвет</label>
                            <input name="color"
                                   id="color"
                                   value="{{ old('color') ?: $subject->color }}"
                                   class="form-color"
                                   required
                                   type="color">
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

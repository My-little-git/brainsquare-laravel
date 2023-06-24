@extends('layouts.app-master')

@section('title', 'Редактирование купона')

@section('content')

    <section id="admin" class="edit">
        <div class="app-container">
            <div class="section__title">Редактирование купона</div>

            <div class="wrapper">

                <form action="{{ route('admin.coupon.update', $coupon->id) }}" method="POST">
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="code" class="form-label">Код</label>
                            <input name="code"
                                   id="code"
                                   value="{{ old('code') ?: $coupon->code }}"
                                   minlength="3"
                                   maxlength="8"
                                   required
                                   class="form-control @error('code') is-invalid @enderror"
                                   type="text">
                            @error('code')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="value" class="form-label">Номинал</label>
                            <input name="value"
                                   id="value"
                                   value="{{ old('value') ?: $coupon->value }}"
                                   class="form-control @error('value') is-invalid @enderror"
                                   required
                                   type="number">
                            @error('value')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <label for="value" class="form-label">Значение</label>
                            <div class="row g-3">
                                <div class="col">
                                    <input type="radio"
                                           required
                                           class="input-radio"
                                           name="type"
                                           {{ (old('type') !== null ? old('type') : $coupon->type) == "0" ? "checked" : "" }}
                                           id="percentage"
                                           value="0">
                                    <label for="percentage" class="label-radio">%</label>
                                </div>
                                <div class="col">
                                    <input type="radio"
                                           required
                                           class="input-radio"
                                           name="type"
                                           {{ (old('type') !== null ? old('type') : $coupon->type) == "1" ? "checked" : ""  }}
                                           id="absolute"
                                           value="1">
                                    <label for="absolute" class="label-radio">₽</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="form-label" for="only_once">Тип</label>
                            <select name="only_once" id="only_once" class="form-select" required>
                                <option disabled {{ old('only_once') || !isset($coupon->only_once) ?: "selected" }}>--
                                    Выберите тип купона --
                                </option>
                                <option
                                    value="0" {{ (old('only_once') !== null ? old('only_once') : $coupon->type) == "0" ? "selected" : "" }}>
                                    Многоразовый
                                </option>
                                <option
                                    value="1" {{ (old('only_once') !== null ? old('only_once') : $coupon->type) == "1" ? "selected" : "" }}>
                                    Одноразовый
                                </option>
                            </select>
                            @error('only_once')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <label for="expired_at" class="form-label">Дата окончания</label>
                            <input name="expired_at"
                                   id="expired_at"
                                   value="{{ old('expired_at') ?: $coupon->expired_at->format('Y-m-d\TH:i') }}"
                                   class="form-control @error('expired_at') is-invalid @enderror"
                                   required
                                   type="datetime-local">
                            @error('expired_at')
                            <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="description" class="form-label">Описание</label>
                            <input name="description"
                                   id="description"
                                   value="{{ old('description') ?: $coupon->description }}"
                                   class="form-control @error('description') is-invalid @enderror"
                                   type="text">
                            @error('description')
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

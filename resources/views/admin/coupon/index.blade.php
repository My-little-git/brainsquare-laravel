@extends('layouts.app-master')

@section('title', 'Все купоны')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все купоны</div>

            <div class="wrapper">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Код</th>
                        <th scope="col">Номинал</th>
                        <th scope="col">Значение</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Дата окончания</th>
                        <th scope="col">Описание</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($coupons as $coupon)

                        <tr>
                            <th scope="row">{{ $coupon->id }}</th>
                            <td>{{ $coupon->code }}</td>
                            <td>{{ $coupon->value }}</td>
                            <td>{{ $coupon->type ? "Абсолютный" : "Процентный" }}</td>
                            <td>{{ $coupon->only_once ? "Одноразовый" : "Многоразовый" }}</td>
                            <td>{{ $coupon->expired_at }}</td>
                            <td>{{ $coupon->description }}</td>
                            <td>
                                <a href="{{ route('admin.coupon.edit', $coupon->id) }}">✏️</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.coupon.destroy', $coupon->id) }}" method="POST">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <a href="{{ route('admin.coupon.create') }}" class="btn-outline">Добавить купон</a>
            </div>
        </div>
    </section>

@endsection

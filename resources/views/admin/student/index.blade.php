@extends('layouts.app-master')

@section('title', 'Все студенты')

@section('content')

    <section id="admin" class="index">
        <div class="app-container">
            <div class="section__title">Все студенты</div>

            <div class="wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Email</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">День рождения</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($students as $student)

                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->surname }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->birthday->format('d-m-Y') }}</td>
                            <td>
                                <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST">
                                    @method('delete')
                                    <button class="btn-link" type="submit">❌</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.app-master')

@section('title', 'Успеваемость')

@section('content')

<section id="performance">
    <div class="container">
        <div class="section__title">Успеваемость</div>
        <div class="characteristics">
            <div class="characteristic">
                <div class="title">Лучший средний балл</div>
                <div class="cards">
                    <div class="card good">
                        <div class="mark">4.25</div>
                        <div class="subject">Информатика</div>
                        <div class="group">Информатика 10-11 кл Питон 1 гр. Осипов</div>
                    </div>
                </div>
            </div>
            <div class="characteristic">
                <div class="title">Худший средний балл</div>
                <div class="cards">
                    <div class="card bad">
                        <div class="mark">3.34</div>
                        <div class="subject">Русский язык</div>
                        <div class="group">Подготовка к ЕГЭ по русскому языку 10-11 кл Осипов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

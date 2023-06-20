@extends('layouts.app-master')

@section('title', 'Распиасние')

@section('content')

<section id="schedule">
    <div class="app-container">
        <div class="section__title">Расписание</div>
        <div class="control">
            <div class="buttons">
                <button class="prev"/>
                <button class="next"/>
            </div>
            <div class="month">Июнь 2023</div>
        </div>
        <div class="schedule__table">
            <div class="table__head">
                <div>ПН</div>
                <div>ВТ</div>
                <div>СР</div>
                <div>ЧТ</div>
                <div>ПТ</div>
                <div>СБ</div>
                <div>ВС</div>
            </div>
            <div class="table__body">
                <div class="day">
                    <div class="day-number">29</div>
                </div>
                <div class="day">
                    <div class="day-number">30</div>
                </div>
                <div class="day">
                    <div class="day-number">31</div>
                </div>
                <div class="day">
                    <div class="day-number">1</div>
                </div>
                <div class="day">
                    <div class="day-number">2</div>
                </div>
                <div class="day">
                    <div class="day-number">3</div>
                </div>
                <div class="day">
                    <div class="day-number">4</div>
                </div>
                <div class="day">
                    <div class="day-number">5</div>
                </div>
                <div class="day">
                    <div class="day-number">6</div>
                </div>
                <div class="day">
                    <div class="day-number">7</div>
                </div>
                <div class="day">
                    <div class="day-number">8</div>
                </div>
                <div class="day">
                    <div class="day-number">9</div>
                </div>
                <div class="day">
                    <div class="day-number">10</div>
                </div>
                <div class="day">
                    <div class="day-number">11</div>
                </div>
                <div class="day">
                    <div class="day-number">12</div>
                </div>
                <div class="day">
                    <div class="day-number">13</div>
                </div>
                <div class="day">
                    <div class="day-number">14</div>
                </div>
                <div class="day">
                    <div class="day-number">15</div>
                </div>
                <div class="day">
                    <div class="day-number">16</div>
                </div>
                <div class="day">
                    <div class="day-number current-day">17</div>
                    <div class="lessons">
                        <div class="lesson">
                            <div class="subject">Математика</div>
                        </div>
                    </div>
                </div>
                <div class="day">
                    <div class="day-number">18</div>
                </div>
                <div class="day">
                    <div class="day-number">19</div>
                </div>
                <div class="day">
                    <div class="day-number">20</div>
                </div>
                <div class="day">
                    <div class="day-number">21</div>
                </div>
                <div class="day">
                    <div class="day-number">22</div>
                </div>
                <div class="day">
                    <div class="day-number">23</div>
                </div>
                <div class="day">
                    <div class="day-number">24</div>
                </div>
                <div class="day">
                    <div class="day-number">25</div>
                </div>
                <div class="day">
                    <div class="day-number">26</div>
                </div>
                <div class="day">
                    <div class="day-number">27</div>
                </div>
                <div class="day">
                    <div class="day-number">28</div>
                </div>
                <div class="day">
                    <div class="day-number">29</div>
                </div>
                <div class="day">
                    <div class="day-number">30</div>
                </div>
                <div class="day">
                    <div class="day-number">1</div>
                </div>
                <div class="day">
                    <div class="day-number">2</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

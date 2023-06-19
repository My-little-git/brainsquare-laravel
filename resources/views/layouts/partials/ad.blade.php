<section id="ad">
    <img src="{{ Vite::images("ad/ad1.png") }}" alt="" class="ad__img">
    <div class="ad__body">
        <div class="ad__title">Обучаться ВЫГОДНО!</div>
        <div class="ad__text">При покупке первого курса <span class="ad__important">СКИДКА 30%</span> в течении первых трёх дней после регистрации.</div>
        <a href="{{ route('course.index') }}" class="ad__link">Записаться на курс</a>
    </div>
    <button class="ad__close"><img src="{{ Vite::images("icons/cross.svg") }}" alt=""></button>
</section>


$(document).ready(() => {

    // Short Form

    $.fn.extend({
        toggleText: function(a, b){
            return this.text(this.text() == b ? a : b);
        }
    });

    if ($('#add-control')){

        if (!$('.short-form').attr('hidden')){
            $('#add-control').toggleClass('close').toggleText("Добавить", "Cкрыть форму")
        }

        $('#add-control').on('click', () => {
            $('.short-form').slideToggle(200);
            $('#add-control').toggleClass('close').toggleText("Добавить", "Cкрыть форму")
        })
    }

    // Preview

    if ($('#upload-button')){

        const uploadButton = $('#upload-button');
        const fileInput = $('input[type=file]');
        const preview = $('#preview');

        uploadButton.on('click', () => fileInput.click());

        fileInput.on('change', e => {
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onloadend = () => {
                preview.attr('aria-label', file.name);
                preview.css('background', `url(${reader.result}) no-repeat center center / cover`);
            }
        })

    }

    // Date Course

    if ($('#lessons')){
        const lessons = $('#lessons');
        const startAt = $('#start_at');
        const days = $('input[name="days[]"]');

        const datePicker = () => {
            const $oldDayWeek = $('.input-day[disabled]:checked')
            $oldDayWeek.prop('checked', false)
            $oldDayWeek.prop('disabled', false)

            const startDay = new Date(startAt.val())
            const dayWeek = (startDay.toLocaleDateString('en-US', {weekday: "long"})).toLowerCase();

            document.getElementById(`${dayWeek}`).checked = true;
            $(`#${dayWeek}`).prop('disabled', true);
        }

        function calculateEndDate(startDate, lessonCount, daysOfWeek) {
            console.log(startDate, lessonCount, daysOfWeek)
            let currentDate = new Date(startDate); // текущая дата
            let completedLessons = 0; // количество проведенных занятий

            // пока количество проведенных занятий меньше заданного количества занятий:
            while (completedLessons < lessonCount) {
                // если день недели текущей даты соответствует одному из дней занятий,
                // увеличиваем количество проведенных занятий
                if (daysOfWeek.includes(String(currentDate.getDay()))) {
                    console.log(currentDate)
                    completedLessons++;
                }
                currentDate.setDate(currentDate.getDate() + 1); // переходим на следующую дату
            }

            currentDate.setDate(currentDate.getDate() - 1)

            // дата в currentDate - это дата последнего занятия
            return currentDate.toISOString().split('T')[0];
        }


        const calcEndDate = () => {

            let selectedDays = [];

            days.each(function (){
                if (this.checked){
                    selectedDays.push(this.value);
                }
            })

            if (lessons.val() && startAt.val() && selectedDays){
                document.getElementById('end_at').value = calculateEndDate(startAt.val(), lessons.val(), selectedDays)
            }
        }

        lessons.on('change', () => calcEndDate());
        startAt.on('change', () => {
            datePicker();
            calcEndDate();
        });
        days.on('change', () => calcEndDate());
    }


    // ymaps.ready(() => {
    //     console.log('fdlskj')
    //     var suggestView1 = new ymaps.SuggestView('address', []);
    // })
})

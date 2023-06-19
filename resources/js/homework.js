
$(document).ready(() => {

    // Menu

    $(window).on('click', (e) => {
        const target = e.target

        if ($(target).hasClass('menu-button')){
            $('.menu').addClass('d-none')

            const card = target.closest('.card')
            const menu = card.querySelector('.menu')

            $(menu).removeClass('d-none')
        }

        if (!$(target).hasClass('menu') && !$(target).hasClass('menu-button')){
            $('.menu').addClass('d-none')
        }
    })
})

// const menuElements = document.querySelectorAll('.event__menu')
//
//
// $(document).on("click", function(e) {
//     const target = e.target
//
//     if (!$(target).hasClass('event__menu') && !$(target).hasClass('event__menu-button') || $(target) === $(".event__menu:not(.d-none)").previousElementSibling){
//         menuElements.forEach(elem => {
//             $(elem).addClass('d-none')
//         })
//     }
//     if ($(target).hasClass('event__menu-button')){
//         target.closest('.event__card').querySelector('.event__menu').classList.remove('d-none')
//     }
// })

import Cookies from 'js-cookie'


$(document).ready(function(){

    // Banner

    if (!Cookies.get('cook_banner')){
        $('.ad__wrapper').removeClass('d-none')
        $('.ad__close').on('click', () => {
            $('.ad__wrapper').slideUp(200);
            Cookies.set('cook_banner', 1, { expires : 1 })
        })
    }

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

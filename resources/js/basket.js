
$(document).ready(() => {
    const promo = $('.promo-code .control');
    const promoForm = $('.promo-code form');

    promo.on('click', () => {
        console.log('fdsk')
        promoForm.slideToggle(100)
    })
})

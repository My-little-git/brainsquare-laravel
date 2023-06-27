


const promo = $('.promo-code .control');
const promoForm = $('.promo-code form');
promo.on('click', () => {
    promoForm.slideToggle(100);
})

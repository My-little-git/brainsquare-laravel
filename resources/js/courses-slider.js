import noUiSlider from "nouislider/src/nouislider";
import "nouislider/dist/nouislider.css"

$().ready(function(){

    const slider = document.querySelector('#range')
    console.log(slider)
    noUiSlider.create(slider, {
        start: [0, 24],
        connect: true,
        range: {
            min: 0,
            max: 24
        },
        step: 1
    })
})

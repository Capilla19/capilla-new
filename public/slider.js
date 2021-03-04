const slider =document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnleft = document.querySelector("#btn-left");
const btnright = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin' , sliderSectionLast);

function Next() {
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginleft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function() {
        slider.style.marginleft = "none";
        slider.insertAdjacentElement('beforeend' , sliderSectionFirst);
        slider.style.marginleft = "-100%";
    }, 500);
}

function Prev() {
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    slider.style.marginleft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function() {
        slider.style.marginleft = "none";
        slider.insertAdjacentElement('afterbegin' , sliderSectionLast);
        slider.style.marginleft = "-100%";
    }, 500);
}

btnright.addEventListener('click' , function(){
    Next();
})

btnleft.addEventListener('click' , function(){
    Prev();
})

/*setInterval(function() {
    Next()
}, 5000);*/

$(".submenu").click(function() {
    $(this).children("ul").slideToggle();
})
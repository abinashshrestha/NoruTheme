import Swiper from 'swiper';

console.log('it works');

var landingSwiper = new Swiper('.swiper-container', {
    speed: 400,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// landingSwiper;
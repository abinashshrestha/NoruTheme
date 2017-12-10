import Swiper from 'swiper';

console.log('it works');

var landingSwiper = new Swiper('.swiper-container', {
    speed: 400,
    lazy: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

// landingSwiper;
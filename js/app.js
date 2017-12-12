import Swiper from 'swiper';
import 'bootstrap/js/src/util';
import 'bootstrap/js/src/scrollspy';

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

$('body').scrollspy({
    offset: 100,
    target: '#navbar',
});

const navMenuToggler = document.querySelector('#nav-menu-toggler');
const navbar = document.querySelector('#navbar');

navMenuToggler.addEventListener('click', () => {
    navbar.classList.toggle('collapse');
});

// landingSwiper;
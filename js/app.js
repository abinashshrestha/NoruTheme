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
const navbarLink = document.querySelectorAll('.js-navbar-link');
const body = document.querySelector('body');
const pageContainer = document.querySelector('.page-container');

function navbarToggle() {
    navbar.classList.toggle('navbar-collapse--show');
    body.classList.toggle('overflow-hidden');
}

navMenuToggler.addEventListener('click', () => {
    navbarToggle();
});

navbarLink.forEach((i) => {
    i.addEventListener('click', () => {
        navbarToggle();
    });
});

pageContainer.addEventListener('click', () => {
    if (body.classList.contains('overflow-hidden')) {
        navbarToggle();
    }
});

pageContainer.addEventListener('touchstart', () => {
    if (body.classList.contains('overflow-hidden')) {
        navbarToggle();
    }
});

// landingSwiper;
// import 'mmenu-light/dist/mmenu-light'
// import 'mmenu-light/dist/mmenu-light.css'

// // import Swiper JS
// import Swiper, { Navigation, Pagination, Scrollbar } from 'swiper';
// // import Swiper styles
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// const swiper = new Swiper('.swiper', {
//     modules: [Navigation, Pagination, Scrollbar],
//     // Optional parameters
//     direction: 'vertical',
//     loop: true,
//     slidesPerView: 2,

//     // If we need pagination
//     pagination: {
//         el: '.swiper-pagination',
//     },

//     // Navigation arrows
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },

//     // And if we need scrollbar
//     scrollbar: {
//         el: '.swiper-scrollbar',
//     },
// });

// document.addEventListener('DOMContentLoaded', () => {
//     const menu = new MmenuLight(
//         document.querySelector('#menu'),
//         '(max-width: 600px)'
//     );

//     const navigator = menu.navigation();
//     const drawer = menu.offcanvas();

//     document
//         .querySelector("a[href='#menu']")
//         .addEventListener('click', (evnt) => {
//             evnt.preventDefault();
//             drawer.open();
//         });
// });

let el_topics = document.querySelector('.menu-topics');
let el_topics_submenu = document.querySelector('.sub-menu');

el_topics.insertAdjacentHTML(
    'beforeend',
    `<a href="#" class="see-all-menu" style="top: ${
        el_topics_submenu.clientHeight + 52
    }px"><span>See all topics</span> <span class="see-all-icon"></span></a>`
);

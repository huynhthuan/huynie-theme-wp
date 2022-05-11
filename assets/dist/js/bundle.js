/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/***/ (() => {

eval("// import 'mmenu-light/dist/mmenu-light'\r\n// import 'mmenu-light/dist/mmenu-light.css'\r\n\r\n// // import Swiper JS\r\n// import Swiper, { Navigation, Pagination, Scrollbar } from 'swiper';\r\n// // import Swiper styles\r\n// import 'swiper/css';\r\n// import 'swiper/css/navigation';\r\n// import 'swiper/css/pagination';\r\n\r\n// const swiper = new Swiper('.swiper', {\r\n//     modules: [Navigation, Pagination, Scrollbar],\r\n//     // Optional parameters\r\n//     direction: 'vertical',\r\n//     loop: true,\r\n//     slidesPerView: 2,\r\n\r\n//     // If we need pagination\r\n//     pagination: {\r\n//         el: '.swiper-pagination',\r\n//     },\r\n\r\n//     // Navigation arrows\r\n//     navigation: {\r\n//         nextEl: '.swiper-button-next',\r\n//         prevEl: '.swiper-button-prev',\r\n//     },\r\n\r\n//     // And if we need scrollbar\r\n//     scrollbar: {\r\n//         el: '.swiper-scrollbar',\r\n//     },\r\n// });\r\n\r\n// document.addEventListener('DOMContentLoaded', () => {\r\n//     const menu = new MmenuLight(\r\n//         document.querySelector('#menu'),\r\n//         '(max-width: 600px)'\r\n//     );\r\n\r\n//     const navigator = menu.navigation();\r\n//     const drawer = menu.offcanvas();\r\n\r\n//     document\r\n//         .querySelector(\"a[href='#menu']\")\r\n//         .addEventListener('click', (evnt) => {\r\n//             evnt.preventDefault();\r\n//             drawer.open();\r\n//         });\r\n// });\r\n\r\nlet el_topics = document.querySelector('.menu-topics');\r\nlet el_topics_submenu = document.querySelector('.sub-menu');\r\n\r\nel_topics.insertAdjacentHTML(\r\n    'beforeend',\r\n    `<a href=\"#\" class=\"see-all-menu\" style=\"top: ${\r\n        el_topics_submenu.clientHeight + 52\r\n    }px\"><span>See all topics</span> <span class=\"see-all-icon\"></span></a>`\r\n);\r\n\n\n//# sourceURL=webpack://huynie-theme-wp/./assets/js/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/js/main.js"]();
/******/ 	
/******/ })()
;
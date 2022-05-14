import '../../node_modules/waypoints/lib/noframework.waypoints';
import '../../node_modules/waypoints/lib/shortcuts/sticky';
import ClipboardJS from '../../node_modules/clipboard/dist/clipboard';
import toastr from '../../node_modules/toastr/toastr';
import '../../node_modules/mmenu-light/dist/mmenu-light';
import 'bootstrap/js/dist/modal';

let numeral = require('numeral');
let containerPost = document.querySelector('.category-body-content');
let buttonGroups = document.querySelectorAll('.category-switch button');
let overLay = document.querySelector('.overlay-post');

buttonGroups.forEach((button, index) => {
    button.onclick = () => {
        overLay.classList.add('active');
        setTimeout(() => {
            let nextEl = button.nextElementSibling;
            let prevEl = button.previousElementSibling;
            if (nextEl) {
                nextEl.classList.remove('active');
            }

            if (prevEl) {
                prevEl.classList.remove('active');
            }
            button.classList.add('active');
            if (button.dataset.view === 'grid') {
                containerPost.classList.remove('view-list');
            } else {
                containerPost.classList.remove('view-grid');
            }
            containerPost.classList.add('view-' + button.dataset.view);
        }, 300);

        setTimeout(() => {
            overLay.classList.remove('active');
        }, 800);
    };
});

let progressEl = document.querySelector('.progress');
let postEl = document.querySelector('.post-single-body');

if (postEl) {
    window.onscroll = () => {
        if (window.scrollY >= postEl.clientHeight + 162) {
            progressEl.style.width = '100%';
        } else {
            if (window.scrollY < 162) {
                progressEl.style.width = '0%';
            } else {
                progressEl.style.width =
                    ((window.scrollY - 162) / postEl.clientHeight) * 100 + '%';
            }
        }
    };
}

let sticky = new Waypoint.Sticky({
    element: document.querySelector('.header-wrap'),
});

new ClipboardJS('.btnCoppy');

let btnCoppy = document.querySelector('.btnCoppy');
if (btnCoppy) {
    btnCoppy.onclick = () => {
        toastr.success('Coppy link successfully!');
    };
}

let btnDiffFilter = document.querySelectorAll('.filter-btn-container');

btnDiffFilter.forEach((item, index) => {
    item.onclick = (e) => {
        if (item.classList.contains('active')) {
            item.classList.remove('active');
            item.querySelector('input').checked = false;
        } else {
            item.classList.add('active');
            item.querySelector('input').checked = true;
        }
    };
});

let viewEl = document.querySelector('.post-desc-view');
if (viewEl) {
    viewEl.innerHTML = numeral(viewEl.innerHTML).format('0 a');
}

document.addEventListener('DOMContentLoaded', () => {
    const menu = new MmenuLight(
        document.querySelector('#menu-main').parentElement,
        '(max-width: 576px)'
    );

    const navigator = menu.navigation();
    const drawer = menu.offcanvas();

    document.querySelector('.btn-mobile').addEventListener('click', (evnt) => {
        evnt.preventDefault();
        drawer.open();
    });
});

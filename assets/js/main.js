import '../../node_modules/waypoints/lib/noframework.waypoints';
import '../../node_modules/waypoints/lib/shortcuts/sticky';
import ClipboardJS from '../../node_modules/clipboard/dist/clipboard';
import toastr from '../../node_modules/toastr/toastr';

let el_topics = document.querySelector('.menu-topics');
let el_topics_submenu = document.querySelector('.sub-menu');

el_topics.insertAdjacentHTML(
    'beforeend',
    `<a href="#" class="see-all-menu" style="top: ${
        el_topics_submenu.clientHeight + 52
    }px"><span>See all topics</span> <span class="see-all-icon"></span></a>`
);

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

let sticky = new Waypoint.Sticky({
    element: document.querySelector('.header-wrap'),
});

new ClipboardJS('.btnCoppy');

let btnCoppy = document.querySelector('.btnCoppy');
btnCoppy.onclick = () => {
    toastr.success('Coppy link successfully!');
};

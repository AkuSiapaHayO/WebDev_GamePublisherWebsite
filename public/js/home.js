/* -------------- Nav -------------- */

const header = document.querySelector("header");

function stickyNavbar() {
    header.classList.toggle("scrolled", window.scrollY > 0)
}

stickyNavbar();

window.addEventListener("scroll", stickyNavbar);

/* -------------- Slideshow 2 -------------- */

let slider2 = document.querySelector('.content-2-slideshow .content-2-slideshow-slides');
let items2 = document.querySelectorAll('.content-2-slideshow .content-2-slideshow-slides .content-2-slideshow-image');
let dots2 = document.querySelectorAll('.content-2-slideshow .content-2-dots li');
let images2 = document.querySelectorAll('.content-2-grid li');
let lengthItems2 = items2.length - 1;
let active2 = 0;
let refreshInterval2;

function refreshAutoSlideInterval2() {
    clearInterval(refreshInterval2); // Clear the existing interval.
    refreshInterval2 = setInterval(() => {
        if (active2 < lengthItems2) {
            active2++;
        } else {
            active2 = 0;
        }
        reloadSlider2();
    }, 5000);
}

refreshAutoSlideInterval2();

function reloadSlider2() {
    slider2.style.left = -items2[active2].offsetLeft + 'px';

    let last_active_dot2 = document.querySelector('.content-2-slideshow .content-2-dots li.active');
    last_active_dot2.classList.remove('active');
    dots2[active2].classList.add('active');
}

dots2.forEach((li, key) => {
    li.addEventListener('click', () => {
        active2 = key;
        reloadSlider2();
        refreshAutoSlideInterval2();
    });
});

images2.forEach((li, key) => {
    li.addEventListener('click', () => {
        active2 = key;
        reloadSlider2();
        refreshAutoSlideInterval2();
    });
});

window.onresize = function (event) {
    reloadSlider2();
};

// /* -------------- Slideshow 3 -------------- */

let slider3 = document.querySelector('.content-3-slideshow .content-3-slideshow-slides');
let items3 = document.querySelectorAll('.content-3-slideshow .content-3-slideshow-slides .content-3-slideshow-content');
let next3 = document.getElementById('forward');
let prev3 = document.getElementById('back');
let dots3 = document.querySelectorAll('.content-3-slideshow .content-3-dots li');
let lengthItems3 = items3.length - 1;
let active3 = 0;
let refreshInterval3; // Declare the interval variable.

next3.onclick = function () {
    active3 = active3 + 1 <= lengthItems3 ? active3 + 1 : 0;
    reloadSlider3();
    refreshAutoSlideInterval3();
}
prev3.onclick = function () {
    active3 = active3 - 1 >= 0 ? active3 - 1 : lengthItems3;
    reloadSlider3();
    refreshAutoSlideInterval3();
}

function refreshAutoSlideInterval3() {
    clearInterval(refreshInterval3); // Clear the existing interval.
    refreshInterval3 = setInterval(() => {
        if (active3 < lengthItems3) {
            active3++;
        } else {
            active3 = 0;
        }
        reloadSlider3();
    }, 5000);
}

// Initialize the auto slide interval.
refreshAutoSlideInterval3();

function reloadSlider3() {
    slider3.style.left = -items3[active3].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.content-3-slideshow .content-3-dots li.active');
    last_active_dot.classList.remove('active');
    dots3[active3].classList.add('active');

}

dots3.forEach((li, key) => {
    li.addEventListener('click', () => {
        active3 = key;
        reloadSlider3();
        refreshAutoSlideInterval3();
    })
})

window.onresize = function (event) {
    reloadSlider3();
};

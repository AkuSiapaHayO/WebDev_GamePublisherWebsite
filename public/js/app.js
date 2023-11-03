/* -------------- Nav -------------- */

const header = document.querySelector("header");

function stickyNavbar() {
    header.classList.toggle("scrolled", window.scrollY > 0)
}

stickyNavbar();

window.addEventListener("scroll", stickyNavbar);

/* -------------- Slideshow -------------- */

let slider = document.querySelector('.slideshow .slideshow-slides');
let items = document.querySelectorAll('.slideshow .slideshow-slides .slideshow-image');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slideshow .dots li');
let lengthItems = items.length - 1;
let active = 0;

next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}

let refreshInterval1 = setInterval(() => {
    if (active < lengthItems) {
        active++;
    } else {
        active = 0;
    }
    reloadSlider();
}, 5000);

function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slideshow .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
         clearInterval(refreshInterval1)
    })
})

window.onresize = function(event) {
    reloadSlider();
};

/* -------------- Slideshow Content 2 -------------- */

let slider2 = document.querySelector('.content-2-slideshow .content-2-slideshow-slides');
let items2 = document.querySelectorAll('.content-2-slideshow .content-2-slideshow-slides .content-2-slideshow-image');
let dots2 = document.querySelectorAll('.content-2-slideshow .content-2-dots li');
let images2 = document.querySelectorAll('.content-2-grid li');
let lengthItems2 = items2.length - 1;
let active2 = 0;

// Set an initial auto slide interval
let refreshInterval2 = setInterval(() => {
    if (active2 < lengthItems2) {
        active2++;
    } else {
        active2 = 0;
    }
    reloadSlider2();
}, 5000); // Auto slide every 5 seconds (5000 milliseconds)

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
        clearInterval(refreshInterval2);
    });
});

images2.forEach((li, key) => {
    li.addEventListener('click', () => {
        active2 = key;
        reloadSlider2();
        clearInterval(refreshInterval2);
    });
});

window.onresize = function(event) {
    reloadSlider2();
};

/* -------------- Slideshow 3 -------------- */

let slider3 = document.querySelector('.content-3-slideshow .content-3-slideshow-slides');
let items3 = document.querySelectorAll('.content-3-slideshow .content-3-slideshow-slides .content-3-slideshow-content');
let next3 = document.getElementById('forward');
let prev3 = document.getElementById('back');
let dots3 = document.querySelectorAll('.content-3-slideshow .content-3-dots li');
let lengthItems3 = items3.length - 1;
let active3 = 0;

next3.onclick = function(){
    active3 = active3 + 1 <= lengthItems3 ? active3 + 1 : 0;
    reloadSlider3();
}
prev3.onclick = function(){
    active3 = active3 - 1 >= 0 ? active3 - 1 : lengthItems3;
    reloadSlider3();
}

let refreshInterval3 = setInterval(() => {
    if (active3 < lengthItems3) {
        active3++;
    } else {
        active3 = 0;
    }
    reloadSlider3();
}, 5000);

function reloadSlider3(){
    slider3.style.left = -items3[active3].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.content-3-slideshow .content-3-dots li.active');
    last_active_dot.classList.remove('active');
    dots3[active3].classList.add('active');

}

dots3.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active3 = key;
         reloadSlider3();
         clearInterval(refreshInterval3)
    })
})

window.onresize = function(event) {
    reloadSlider3();
};
